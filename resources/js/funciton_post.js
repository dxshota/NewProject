//投稿情報呼び出し
const postgrid = document.querySelector('.post-grid');
document.querySelectorAll('.post-card').forEach(card => { //.post-cardクラスを持つ全ての要素を取得し、それぞれをcardとして処理
    card.addEventListener('click', async (event) => {
        console.log(event);

        const postId = event.target.dataset.postId; // カードに設定された投稿IDを取得

        console.log(postId);

        try {
            const response = await fetch(`/get-post-players/${event.currentTarget.dataset.postId}`); //fetch関数で/get-post-players/${postId}に非同期リクエストを送信し、投稿に紐づく選手情報を取得
            const data = await response.json();
            
            console.log(data);
            
            // 取得した選手情報が存在する場合にのみ処理
            if (data.players && data.players.length > 0) {
                
                // 選手情報をindex.blade.phpの要素に反映
                data.players.forEach((player, index)  => {
                    const playerElement = document.querySelector(`.player[data-id="${index + 1}"]`);
                
                //playerElementが見つからなかった場合は、このブロックをスキップ
                    if (playerElement) {                                
                        playerElement.dataset.x = player.player_position_x;
                        playerElement.dataset.y = player.player_position_y;
                        playerElement.querySelector('.player-number').textContent = player.player_number;
                        playerElement.querySelector('.player-name').textContent = player.player_name;

                    // CSSで位置を更新
                        playerElement.style.transform = `translate(${player.player_position_x}px, ${player.player_position_y}px)`;
                    }
                });
            
            } else {
                console.warn("選手情報が見つかりませんでした。");
            }
        } catch (error) {
            console.error("選手情報の取得に失敗しました:", error);
        }
    });
});