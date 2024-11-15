//console.log("hello");

const presetBtn = document.querySelector("preset-button");
if(presetBtn){
    document.querySelector('.preset-button').addEventListener('click', function() { //post.blade.php画面に遷移
        window.location.href = '/posts';
    });
}
//保存用モータル表示機能
// const saveBtn = document.getElementById('save-btn');
// if(saveBtn){
//     saveBtn.addEventListener('click', function() {
//         // モーダルを表示
//         document.getElementById('save-confirm-modal').style.display = 'block';
//     });

//     document.getElementById('cancel-save').addEventListener('click', function() {
//         // モーダルを非表示
//         document.getElementById('save-confirm-modal').style.display = 'none';
//     });

//     document.getElementById('confirm-save').addEventListener('click', async function() {
//         const titleInput = document.querySelector('#save-confirm-modal input[name="title"]');

//         if (titleInput.value.trim() === '') {
//             alert('タイトルを入力してください。');
//             titleInput.focus();
//             return;
//         }

//         const players = document.querySelectorAll('.player');
//         const positions = [];

//         players.forEach(player => {
//             const playerX = player.dataset.x;
//             const playerY = player.dataset.y;
            
//             // 背番号と名前を取得し、nullableとして設定
//             const playerNumberElement = player.querySelector('.player-number');
//             const playerNameElement = player.querySelector('.player-name');

//             console.log(playerNumberElement);

//             const playerNumber = playerNumberElement ? playerNumberElement.value : null;
//             const playerName = playerNameElement ? playerNameElement.value : null;

//             console.log(playerNumber);
//             console.log(playerName);

//             positions.push({
//                 team_id: 1,
//                 player_position_x: Number(playerX),
//                 player_position_y: Number(playerY),
//                 player_number: Number(playerNumber) || null,
//                 player_name: playerName || null
//             });
//         });

//         const data = {
//             title: titleInput.value.trim(),
//             positions: positions
//         };

//         console.log(data);

//         const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//         await fetch('/save-post-data', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': csrfToken
//             },
//             body: JSON.stringify(data)
//         })
//         .then(response => response.json())
//         .then(data => {
//             if (data.success) {
//                 alert('保存が完了しました');
//                 document.getElementById('save-confirm-modal').style.display = 'none';
//             } else {
//                 alert('保存に失敗しました');
//             }
//         })
//         .catch(error => {
//             console.error('エラー:', error);
//             alert('保存時にエラーが発生しました');
//         });
//     });
// }

//保存ボタン押下処理(開発用)
document.getElementById('confirm-save').addEventListener('click',async function() {
    // タイトル欄の取得
    const titleInput = document.querySelector('#save-confirm-modal input[name="title"]');

    // フロントエンドでのバリデーション（空欄チェック）
    if (titleInput.value.trim() === '') {
        alert('タイトルを入力してください。');
        titleInput.focus();
        return; // バリデーションに失敗した場合、保存処理を中断
    }

    // 選手座標の取得
    const players = document.querySelectorAll('.player');
    const positions = [];

    players.forEach(player => {
        // player 要素から data-id を取得
        const playercircle = player.querySelector('.player');
        //const teamId = playercircle.getAttribute('data-id');
        
        // player 要素から data-x, data-y を取得
        const playerX = player.dataset.x;
        const playerY = player.dataset.y;
        
        //data-id,data-x,data-yを送信
        positions.push({ 
            team_id: 1,
            player_position_x: Number(playerX),
            player_position_y: Number(playerY)
        });
    });

    // データの送信
    const data = {
        title: titleInput.value.trim(),
        positions: positions
    };

    console.log(data);

    // CSRFトークンをmetaタグから取得
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // サーバーにPOSTリクエストを送信
    await fetch('/save-template', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken // CSRFトークンをヘッダーに追加
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('保存が完了しました');
            document.getElementById('save-confirm-modal').style.display = 'none';
        } else {
            alert('保存に失敗しました');
        }
    })
    .catch(error => {
        console.error('エラー:', error);
        alert('保存時にエラーが発生しました');
    });
});



//テンプレート選手座標呼び出し関数

const container = document.querySelector('.container');
    window.addEventListener('DOMContentLoaded', () => {
        const formationitems = document.querySelectorAll('.formation-item');

        formationitems.forEach(formationitem => {
        //console.log('formationitem', formationitem);
        
            formationitem.addEventListener('click', async (event)=>{
                try {
                    // サーバーからテンプレートIDに対応する位置情報を取得
                    const response = await fetch(`/get-formation-positions/${event.target.id}`);
                    const positions = await response.json();
                    
                    console.log(positions);
                    
                    // 位置データが存在する場合にのみ処理
                    if (positions && positions.length > 0) {
                        positions.forEach((position, index) => {
                            
                                const playerElement = document.querySelector(`.player[data-id="${index}"]`); //index->0から処理を始めないとバグる
        
                            console.log(playerElement);
                            if (playerElement) {
                                // data-x, data-y の更新
                                playerElement.dataset.x = position.player_position_x;
                                playerElement.dataset.y = position.player_position_y;
        
                                // CSS transform で位置を設定
                                playerElement.style.transform = `translate(${position.player_position_x}px, ${position.player_position_y}px)`;

                            }
                            // プレイヤーのIDに対応するDOM要素を取得

                            
                        });
                    } else {
                        console.warn("指定されたフォーメーションの位置データが見つかりません。");
                    }
                } catch (error) {
                    console.error("位置データの取得に失敗しました:", error);
                }
            })
        }
        )}
    )

//投稿情報呼び出し
const postgrid = document.querySelector('.post-grid');
document.querySelectorAll('.post-card').forEach(card => { //.post-cardクラスを持つ全ての要素を取得し、それぞれをcardとして処理
    card.addEventListener('click', async () => {

        const postId = card.dataset.postId; // カードに設定された投稿IDを取得
        
        const getUrl = `/tactics/` + postId;

        try {
            window.location.href = getUrl;
        } catch (error) {
            console.error("選手情報の取得に失敗しました:", error);
        }
    });
});
