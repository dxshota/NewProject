<?php

namespace App\Providers;
use App\Models\Template;
use App\Models\Position_player_template as PpTemplates;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \URL::forceScheme('https');
        Paginator::useBootstrap();
        // templates テーブルからデータを取得し、全ビューで使用可能にする
        View::composer('*', function ($view) {
            $formations = Template::orderBy('id', 'asc')->pluck('formation_template_name', 'id');
            $view->with('formations', $formations);
        });
    }
}
