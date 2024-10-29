<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('戦略画面') }} -->
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
    
    <!-- 保存ボタン -->
    <button id="save-btn" style="position: fixed; bottom: 10px; right: 10px;">保存</button>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- 保存確認モーダル -->
    <div id="save-confirm-modal">
    <div class="modal-content">
        <h3>タイトルを入力してください</h3>
            <!-- タイトル入力欄 -->
            <input type="text" name="title" placeholder="タイトルを入力" required>
            <button type="button" id="confirm-save">保存</button>
            <button type="button" id="cancel-save">キャンセル</button>

    </div>
</div>

<!-- ドラッグ中の選手の座標を表示するエリア 開発用-->
    <div id="dragCoordinatesDisplay" class="coordinates-display"></div>
    
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
        
            
            <!-- チーム１ -->
            <div class="player" style="transform: translate(-135px, -50px);">
                <div class="player-circle" data-id="team1-player-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-135px, 90px);">
                <div class="player-circle" data-id="team1-player-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-285px, -50px);">
                <div class="player-circle" data-id="team1-player-3">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-285px, 90px);">
                <div class="player-circle" data-id="team1-player-4">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-435px, -50px);">
                <div class="player-circle" data-id="team1-player-5">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            <div class="player" style="transform: translate(-435px, 90px);">
                <div class="player-circle" data-id="team1-player-6">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-285px, -200px);">
                <div class="player-circle" data-id="team1-player-7">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-285px, 250px);">
                <div class="player-circle" data-id="team1-player-8">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-435px, -200px);">
                <div class="player-circle" data-id="team1-player-9">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-435px, 250px);">
                <div class="player-circle" data-id="team1-player-10">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <!-- チーム1のゴールキーパー -->
            <div class="player" style="transform: translate(-630px, 20px);">
                <div class="player-circle" data-id="team1-player-GK">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            
            <!-- チーム2 -->
            <div class="player" style="transform: translate(40px, -50px);">
                <div class="player-circle" data-id="team2-player-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(40px, 90px);">
                <div class="player-circle" data-id="team2-player-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(185px, -50px);">
                <div class="player-circle" data-id="team2-player-3">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(185px, 90px);">
                <div class="player-circle" data-id="team2-player-4">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(340px, -50px);">
                <div class="player-circle" data-id="team2-player-5">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            <div class="player" style="transform: translate(340px, 90px);">
                <div class="player-circle" data-id="team2-player-6">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(185px, -200px);">
                <div class="player-circle" data-id="team2-player-7">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(185px, 250px);">
                <div class="player-circle" data-id="team2-player-8">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(340px, -200px);">
                <div class="player-circle" data-id="team2-player-9">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(340px, 250px);">
                <div class="player-circle" data-id="team2-player-10">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <!-- チーム2のゴールキーパー -->
            <div class="player" style="transform: translate(540px, 20px);">
                <div class="player-circle" data-id="team2-player-GK">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>
        </div>
        <!-- 交代選手スペース -->        
        <div class="substitute-area">
            <!--チーム１-->
            <div class="player" style="transform: translate(-640px, 420px);">
                <div class="player-circle" data-id="team1-sub-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-590px, 420px);">
                <div class="player-circle" data-id="team1-sub-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-540px, 420px);">
                <div class="player-circle" data-id="team1-sub-3">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-490px, 420px);">
                <div class="player-circle" data-id="team1-sub-4">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-440px, 420px);">
                <div class="player-circle" data-id="team1-sub-5">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-390px, 420px);">
                <div class="player-circle" data-id="team1-sub-6">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-340px, 420px);">
                <div class="player-circle" data-id="team1-sub-7">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-290px, 420px);">
                <div class="player-circle" data-id="team1-sub-8">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-240px, 420px);">
                <div class="player-circle" data-id="team1-sub-GK-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(-190px, 420px);">
                <div class="player-circle" data-id="team1-sub-GK-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

        <!--チーム２-->
            <div class="player" style="transform: translate(550px, 420px);">
                <div class="player-circle" data-id="team2-sub-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(500px, 420px);">
                <div class="player-circle" data-id="team2-sub-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(450px, 420px);">
                <div class="player-circle" data-id="team2-sub-3">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(400px, 420px);">
                <div class="player-circle" data-id="team2-sub-4">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(350px, 420px);">
                <div class="player-circle" data-id="team2-sub-5">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(300px, 420px);">
                <div class="player-circle" data-id="team2-sub-6">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(250px, 420px);">
                <div class="player-circle" data-id="team2-sub-7">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(200px, 420px);">
                <div class="player-circle" data-id="team2-sub-8">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(150px, 420px);">
                <div class="player-circle" data-id="team2-sub-GK-1">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" style="transform: translate(100px, 420px);">
                <div class="player-circle" data-id="team2-sub-GK-2">
                    <input type="text" class="player-number"  placeholder="番号" readonly><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" readonly><!-- 選手名用テキストボックス -->
                </div>
            </div>
        </div>    
    </div>
    
</x-app-layout>