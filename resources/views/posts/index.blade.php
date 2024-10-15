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

                <!-- ドラッグ中の選手の座標を表示するエリア 開発用-->
                <div class="coordinates-display" id="coordinatesDisplay">
                    X: 0, Y: 0
                </div>
            <!-- プレイヤーはここに配置される（JSでドラッグ&ドロップ） -->
            <div class="player" data-id="1" style="left: 100px; top: 100px;">
                    <div class="player-circle" style="background-color: lightblue;">
                        10
                    </div>
                    <div class="player-info">
                        <select>
                            <option value="FW">FW</option>
                            <option value="MF">MF</option>
                            <option value="DF">DF</option>
                            <option value="GK">GK</option>
                        </select>
                        <span>山田 太郎</span>
                    </div>
                </div>
            </div>

            <!-- 交代選手スペース -->
            <div class="substitute-area">
            <div class="player" data-id="2">
                <div class="player-circle" style="background-color: lightcoral;">
                        11
                    </div>
                    <div class="player-info">
                        <select>
                            <option value="FW">FW</option>
                            <option value="MF">MF</option>
                            <option value="DF">DF</option>
                            <option value="GK">GK</option>
                        </select>
                        <span>田中 一郎</span>
                    </div>
                </div>
            </div>
    </div>
        
        <!--<script src="./drag.js"></script>-->    
</x-app-layout>