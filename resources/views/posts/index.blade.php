<x-app-layout>
    <!-- ヘッダー -->
    <x-slot name="header">
            @include('posts.header')
    </x-slot>
    
<!-- テンプレ選択コンテナ -->
    <div class="formation-container">
        <h2>フォーメーション</h2>
        <ul class="formation-list">
            @foreach($formations as $id => $formation_name) <!--formation_template_nameを一覧表示-->
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
            @foreach ($players as $index => $player)
                
                <!--チーム１のゴールキーパー-->
                @if($index == 10 || $index == 30 || $index == 31) 
                    <div class="player" data-id={{$index}} data-x={{ $player->player_position_x }} data-y={{$player->player_position_y}} style="transform: translate({{ $player->player_position_x }}px, {{$player->player_position_y}}px);">
                        <div class="player-circle" data-id="GK1-{{$index}}">
                            <input type="text" class="player-number" value="{{$player->player_number}}" placeholder="GK番号" > <!-- 背番号用テキストボックス -->
                        </div>
                        
                        <div class="player-info">
                            <input type="text" class="player-name" value="{{$player->player_name}}" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                        </div>
                    </div>
                
                <!--チーム2のゴールキーパー-->
                @elseif($index == 21 || $index == 40 || $index == 41) 
                    <div class="player" data-id={{$index}} data-x={{ $player->player_position_x }} data-y={{$player->player_position_y}} style="transform: translate({{ $player->player_position_x }}px, {{$player->player_position_y}}px);">
                            <div class="player-circle" data-id="GK2-{{$index}}">
                                <input type="text" class="player-number" value="{{$player->player_number}}" placeholder="GK番号" > <!-- 背番号用テキストボックス -->
                            </div>
                            
                            <div class="player-info">
                                <input type="text" class="player-name" value="{{$player->player_name}}" placeholder="GK選手名" ><!-- 選手名用テキストボックス -->
                            </div>
                    </div>

                <!--チーム１のプレイヤー-->
                @elseif($index < 10 || ($index > 21 && $index < 31))
                    <div class="player" data-id={{$index}} data-x={{ $player->player_position_x }} data-y={{$player->player_position_y}} style="transform: translate({{ $player->player_position_x }}px, {{$player->player_position_y}}px);">
                            <div class="player-circle" data-id="team1-{{$index}}">
                                <input type="text" class="player-number" value="{{$player->player_number}}" placeholder="番号" > <!-- 背番号用テキストボックス -->
                            </div>
                            
                            <div class="player-info">
                                <input type="text" class="player-name" value="{{$player->player_name}}" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                            </div>
                    </div>

                <!--チーム2のプレイヤー-->
                @else
                    <div class="player" data-id={{$index}} data-x={{ $player->player_position_x }} data-y={{$player->player_position_y}} style="transform: translate({{ $player->player_position_x }}px, {{$player->player_position_y}}px);">
                            <div class="player-circle" data-id="team2-{{$index}}">
                                <input type="text" class="player-number" value="{{$player->player_number}}" placeholder="番号" > <!-- 背番号用テキストボックス -->
                            </div>
                            
                            <div class="player-info">
                                <input type="text" class="player-name" value="{{$player->player_name}}" placeholder="選手名" ><!-- 選手名用テキストボックス -->
                            </div>
                    </div>
                @endif
            @endforeach           
        </div>    
    </div>
    
</x-app-layout>