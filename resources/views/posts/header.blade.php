    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <!-- {{ __('戦略画面') }} -->
    </h2>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        <!-- ヘッダーメニュー -->
        <nav class="header-nav">
            <ul>
                <li><a href="{{ route('tactics.redirect') }}">[戦術]</a></li>
                <li><a href="{{ route('posts.list') }}" class="preset-button">[投稿]</a></li>
                <li><a href="/profile">[プロファイル]</a></li>
                <li><a href="#" id="logout-button">[ログアウト]</a></li>
            </ul>
    </nav>

    <script>
    // ログアウト実行
    document.getElementById('logout-button').addEventListener('click', function(event) {
        event.preventDefault(); // デフォルトのリンク動作を無効化
        // 警告ダイアログを表示し、ユーザーの確認を求める
        if (confirm("本当にログアウトしますか？")) {
            document.getElementById('logout-form').submit(); // ユーザーがOKを選択した場合、ログアウトを実行
        }
    });
</script>