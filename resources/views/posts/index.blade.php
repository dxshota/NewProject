<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('戦略画面') }}
        </h2>
        <!-- ヘッダーメニュー -->
        <nav class="header-nav">
            <ul>
                <li><a href="#">[戦術]</a></li>
                <li><a href="#">[プリセット]</a></li>
                <li><a href="#">[コミュニティ]</a></li>
                <li><a href="#">[ログイン]</a></li>
            </ul>
        </nav>
    </x-slot>

<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>フォーメーション</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!--Publicのstyle.cssを読み込み-->
    </head>
    <body>
        <div class="container">
            <!-- サッカーコート -->
            <div class="soccer-field">
                <!-- 中央円 -->
                <div class="center-circle"></div>
                <div class="center-dot"></div>

                <!-- 左側のゴールエリアとペナルティエリア -->
                <div class="goal-area goal-area-left"></div>
                <div class="penalty-area penalty-area-left"></div>

                <!-- 右側のゴールエリアとペナルティエリア -->
                <div class="goal-area goal-area-right"></div>
                <div class="penalty-area penalty-area-right"></div>

            <!-- プレイヤーはここに配置される（JSでドラッグ&ドロップ） -->
            </div>

            <!-- 交代選手スペース -->
            <div class="substitute-area">
                <div class="player">選手1</div>
                <div class="player">選手2</div>
                <div class="player">選手3</div>
                <div class="player">選手4</div>
            </div>
        </div>
    </body>
</html>
</x-app-layout>