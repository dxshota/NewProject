<x-app-layout>
    <!-- ヘッダー -->
    <x-slot name="header">
            @include('posts.header')    
    </x-slot>
    
<!-- テンプレ選択コンテナ -->
    <div class="formation-container">
        <h2>フォーメーション</h2>
        <ul class="formation-list">
            @foreach($formations as $id => $formation_name) <!---->
                <li class="formation-item" id ={{$id}}>
                    {{ $formation_name }}
                </li>
            @endforeach
        </ul>
    </div>



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
            <div class="player" data-id="1" data-x="-120" data-y="20" style="transform: translate(-120px, 20px);">
                <div class="player-circle" data-id="team1-1">
                    <input type="text" class="player-number"  placeholder="番号" > <!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="2" data-x="-210" data-y="-100" style="transform: translate(-210px, -100px);">
                <div class="player-circle" data-id="team1-2">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="3" data-x="-210" data-y="130" style="transform: translate(-210px, 130px);">
                <div class="player-circle" data-id="team1-3">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="4" data-x="-280" data-y="-250" style="transform: translate(-280px, -250px);">
                <div class="player-circle" data-id="team1-4">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="5" data-x="-280" data-y="290" style="transform: translate(-280px, 290px);">
                <div class="player-circle" data-id="team1-5">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            <div class="player" data-id="6" data-x="-350" data-y="-100" style="transform: translate(-350px, -100px);">
                <div class="player-circle" data-id="team1-6">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="7" data-x="-350" data-y="130" style="transform: translate(-350px, 130px);">
                <div class="player-circle" data-id="team1-7">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="8" data-x="-450" data-y="-170" style="transform: translate(-450px, -170px);">
                <div class="player-circle" data-id="team1-8">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="9" data-x="-450" data-y="210" style="transform: translate(-450px, 210px);">
                <div class="player-circle" data-id="team1-9">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="10" data-x="-500" data-y="20" style="transform: translate(-500px, 20px);">
                <div class="player-circle" data-id="team1-10">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <!-- チーム1のゴールキーパー -->
            <div class="player" data-id="11" data-x="-630" data-y="20" style="transform: translate(-630px, 20px);">
                <div class="player-circle" data-id="GK1-11">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            
            <!-- チーム2 -->
            <div class="player" data-id="12" data-x="25" data-y="20" style="transform: translate(25px, 20px);">
                <div class="player-circle" data-id="team2-12">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="13" data-x="110" data-y="-100" style="transform: translate(110px, -100px);">
                <div class="player-circle" data-id="team2-13">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="14" data-x="110" data-y="130" style="transform: translate(110px, 130px);">
                <div class="player-circle" data-id="team2-14">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="15" data-x="180" data-y="-250" style="transform: translate(180px, -250px);">
                <div class="player-circle" data-id="team2-15">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="16" data-x="180" data-y="290" style="transform: translate(180px, 290px);">
                <div class="player-circle" data-id="team2-16">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>
            
            <div class="player" data-id="17" data-x="250" data-y="-100" style="transform: translate(250px, -100px);">
                <div class="player-circle" data-id="team2-17">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="18" data-x="250" data-y="130" style="transform: translate(250px, 130px);">
                <div class="player-circle" data-id="team2-18">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="19" data-x="350" data-y="-170" style="transform: translate(350px, -170px);">
                <div class="player-circle" data-id="team2-19">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="20" data-x="350" data-y="210" style="transform: translate(350px, 210px);">
                <div class="player-circle" data-id="team2-20">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="21" data-x="410" data-y="20" style="transform: translate(410px, 20px);">
                <div class="player-circle" data-id="team2-21">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <!-- チーム2のゴールキーパー -->
            <div class="player" data-id="22" data-x="540" data-y="20" style="transform: translate(540px, 20px);">
                <div class="player-circle" data-id="GK2-22">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>
        </div>
        <!-- 交代選手スペース -->        
        <div class="substitute-area">
            <!--チーム１-->
            <div class="player" data-id="23"data-x="-640" data-y="420" style="transform: translate(-640px, 420px);">
                <div class="player-circle" data-id="team1-sub-1">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="24"data-x="-590" data-y="420" style="transform: translate(-590px, 420px);">
                <div class="player-circle" data-id="team1-sub-2">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="25"data-x="-540" data-y="420" style="transform: translate(-540px, 420px);">
                <div class="player-circle" data-id="team1-sub-3">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="26"data-x="-490" data-y="420" style="transform: translate(-490px, 420px);">
                <div class="player-circle" data-id="team1-sub-4">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="27"data-x="-440" data-y="420" style="transform: translate(-440px, 420px);">
                <div class="player-circle" data-id="team1-sub-5">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="28"data-x="-390" data-y="420" style="transform: translate(-390px, 420px);">
                <div class="player-circle" data-id="team1-sub-6">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="29"data-x="-340" data-y="420" style="transform: translate(-340px, 420px);">
                <div class="player-circle" data-id="team1-sub-7">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="30"data-x="-290" data-y="420" style="transform: translate(-290px, 420px);">
                <div class="player-circle" data-id="team1-sub-8">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="31"data-x="-240" data-y="420" style="transform: translate(-240px, 420px);">
                <div class="player-circle" data-id="GK1-31">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="32"data-x="-190" data-y="420" style="transform: translate(-190px, 420px);">
                <div class="player-circle" data-id="GK1-32">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

        <!--チーム２-->
            <div class="player" data-id="33"data-x="550" data-y="420" style="transform: translate(550px, 420px);">
                <div class="player-circle" data-id="team2-sub-1">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="34"data-x="500" data-y="420" style="transform: translate(500px, 420px);">
                <div class="player-circle" data-id="team2-sub-2">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="35"data-x="450" data-y="420" style="transform: translate(450px, 420px);">
                <div class="player-circle" data-id="team2-sub-3">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="36"data-x="400" data-y="420" style="transform: translate(400px, 420px);">
                <div class="player-circle" data-id="team2-sub-4">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="37"data-x="350" data-y="420" style="transform: translate(350px, 420px);">
                <div class="player-circle" data-id="team2-sub-5">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="38"data-x="300" data-y="420" style="transform: translate(300px, 420px);">
                <div class="player-circle" data-id="team2-sub-6">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="39"data-x="250" data-y="420" style="transform: translate(250px, 420px);">
                <div class="player-circle" data-id="team2-sub-7">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="40"data-x="200" data-y="420" style="transform: translate(200px, 420px);">
                <div class="player-circle" data-id="team2-sub-8">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="41"data-x="150" data-y="420" style="transform: translate(150px, 420px);">
                <div class="player-circle" data-id="GK2-41">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>

            <div class="player" data-id="42"data-x="100" data-y="420" style="transform: translate(100px, 420px);">
                <div class="player-circle" data-id="GK2-42">
                    <input type="text" class="player-number"  placeholder="番号" ><!-- 背番号用テキストボックス -->
                </div>
                
                <div class="player-info">
                    <input type="text" class="player-name" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                </div>
            </div>
        </div>    
    </div>
    
</x-app-layout>