import interact from 'interactjs'

//ドラッグアンドドロップ機能
//player
interact('.player').draggable({
    listeners: {
        start(event) {
            // ドラッグ開始時にアイコンを変化させる（例: 透明度を下げる）
            event.target.style.opacity = '0.6';   
        },

        move(event) {
        const target = event.target;


        // 移動距離の計算
        const x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
        const y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

        // 座標の適用
        target.style.transform = `translate(${x}px, ${y}px)`;

        // 座標を保存
        target.setAttribute('data-x', x);
        target.setAttribute('data-y', y);

        // 原点(center-dot)からの距離を計算
        const centerDot = document.querySelector('.soccer-field .center-dot');
        const centerRect = centerDot.getBoundingClientRect();
        const playerRect = target.getBoundingClientRect();

        const distanceX = ((playerRect.left - centerRect.left)).toFixed(2);
        const distanceY = ((playerRect.top - centerRect.top)).toFixed(2);

        // 表示エリアに座標を表示
        // document.getElementById('dragCoordinatesDisplay').innerText = 
        //     `X: ${Math.round(distanceX)} px, Y: ${Math.round(distanceY)} px `;
        
        
        
        // サーバーに送る座標データを想定 (例としてコンソールに出力)
        console.log({
            player_position_x: parseFloat(distanceX),
            player_position_y: parseFloat(distanceY)
        });
        },
        end(event) {
            // ドラッグ終了時に元に戻す
            event.target.style.opacity = '1';
        }
    }
});

//ball
interact('.ball').draggable({
    listeners: {
        start(event) {
            // ドラッグ開始時にアイコンを変化させる（例: 透明度を下げる）
            event.target.style.opacity = '0.6';
        },
        move(event) {
            const target = event.target;

            // 移動距離の計算
            const x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
            const y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

            // 座標の適用
            target.style.transform = `translate(${x}px, ${y}px)`;

            // 座標を保存
            target.setAttribute('data-x', x);
            target.setAttribute('data-y', y);

            // 原点(center-dot)からの距離を計算（選手と同様）
            const centerDot = document.querySelector('.soccer-field .center-dot');
            const centerRect = centerDot.getBoundingClientRect();
            const ballRect = target.getBoundingClientRect();

            const distanceX = ((ballRect.left - centerRect.left)).toFixed(2);
            const distanceY = ((ballRect.top - centerRect.top)).toFixed(2);

            // 表示エリアに座標を表示
            // document.getElementById('dragCoordinatesDisplay').innerText = 
            //     `ボール - X: ${Math.round(distanceX)} px, Y: ${Math.round(distanceY)} px`;
        },
        end(event) {
            // ドラッグ終了時に元に戻す
            event.target.style.opacity = '1';
        }
    }
});

//選手データテキストボックス機能
document.addEventListener('DOMContentLoaded', function() {
    // ダブルクリックでテキストボックスが表示される処理
    document.querySelectorAll('.player-circle, .player-info').forEach(function(element) { //選手番号circle-> 選手名infoの順
        element.addEventListener('dblclick', function() {
            event.stopPropagation(); // 自動的にplayer-infoにバブリングしないように、イベントの伝播を停止させる
            
            let playerElement = element.closest('.player');

            // 背番号と選手名のテキストボックスを表示する
            playerElement.querySelectorAll('input[type="text"]').forEach(function(input) {
                
                // ダブルクリックした要素に該当する input だけを編集可能にする
                if (element.contains(input)) {
                    input.removeAttribute('readonly'); // 編集可能にする
                    input.style.backgroundColor = 'white'; // 白い背景にする
                    input.focus(); // テキストボックスにフォーカスする
                }
            });
        });
    });

    // フォーカスが外れたらテキストボックスを隠す処理
    document.querySelectorAll('.player input[type="text"]').forEach(function(input) {
        input.addEventListener('blur', function() {
            input.setAttribute('readonly', true); // 再び編集不可にする
            input.style.backgroundColor = 'transparent'; // 背景を透明に戻す
        });

        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                input.setAttribute('readonly', true); // Enterキーで編集不可にする
                input.style.backgroundColor = 'transparent'; // 背景を透明に戻す
            }
        });
    });

    // ドラッグ中の処理（ドラッグイベントは変化させない）
    document.querySelectorAll('.player').forEach(function(player) {
        player.addEventListener('mousedown', function() {
            // ドラッグ開始時にスタイルを変更しないようにする
            player.querySelectorAll('input[type="text"]').forEach(function(input) {
                input.style.backgroundColor = 'transparent'; // 背景を元の透明に戻す
            });
        });
    });
});
