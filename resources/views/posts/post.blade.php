<x-app-layout>
    <!-- ヘッダー -->
    <x-slot name="header">
        @include('posts.header')
    </x-slot>
    
    <div class="post-container">
        
        
        <!-- 投稿の表示エリア -->
        <div class="posts-grid">
            @foreach($posts as $post)
                <div class="post-card" data-post-id="{{ $post->id }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <p class="post-meta">
                        投稿者: {{ $post->user->name }} | 投稿日: {{ $post->created_at->format('Y年m月d日') }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- ページネーション -->
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>