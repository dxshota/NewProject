import interact from 'interactjs'

document.addEventListener('DOMContentLoaded', function () {
  // interact.jsによるドラッグ＆ドロップ
  interact('.player').draggable({
      listeners: {
          move(event) {
              const target = event.target;
              const x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx;
              const y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy;

              // 選手要素の位置を更新
              target.style.transform = `translate(${x}px, ${y}px)`;

              // 新しい位置を保存
              target.setAttribute('data-x', x);
              target.setAttribute('data-y', y);
          }
      }
  });

  // すべての選手を元の位置にリセット
  document.getElementById('clear').addEventListener('click', () => {
      const players = document.querySelectorAll('.player');
      players.forEach(player => {
          player.style.transform = '';
          player.setAttribute('data-x', 0);
          player.setAttribute('data-y', 0);
      });
  });
});