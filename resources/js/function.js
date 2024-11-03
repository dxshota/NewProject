//保存用モータル表示機能
document.getElementById('save-btn').addEventListener('click', function() {
    // モーダルを表示
    document.getElementById('save-confirm-modal').style.display = 'block';
});

document.getElementById('cancel-save').addEventListener('click', function() {
    // モーダルを非表示
    document.getElementById('save-confirm-modal').style.display = 'none';
});

//保存ボタン押下処理
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

