<!doctype html>
<?php include('../inc/language.php') ?>
<?php $pagenumber = "03"; //←ページ番号を記入します ?>
<?php $pagecat = "cat_a"; //←ページカテゴリを入力します ?>
<?php $pagetitle = "操作方法"; //←ページのタイトルを記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?>
<?php include('../inc/head.php') ?>
<?php include('../inc/body_page.php') ?>
<article>
  <h2>フィールドでの操作</h2>
  <div class="table2">
    <table>
      <tr><th>Lスティック</th><td>歩く（少し倒す）／走る（大きく倒す）</td></tr>
      <tr><th>Rスティック</th><td>カメラの移動</td></tr>
      <tr><th>Rスティックボタン</th><td>カメラの切り替え</td></tr>
      <tr><th>Rボタン＋Aボタン</th><td>アイテムの説明を見る</td></tr>
      <tr><th>Rボタン＋Xボタン</th><td>イヌ笛</td></tr>
      <tr><th>Rボタン＋Yボタン</th><td>ウマ笛</td></tr>
      <tr><th>Rボタン＋Rスティック</th><td>ズームイン（上）／ズームアウト（下）</td></tr>
      <tr><th>ZRボタン</th><td>カメラリセット</td></tr>
      <tr><th>ZLボタン＋Lスティック</th><td>平行移動</td></tr>
      <tr><th>Lボタン</th><td>道具ミニリュックとアイテムミニリュックの切り替え</td></tr>
      <tr><th>方向ボタン</th><td>道具・アイテムの選択（左右）／アイテムバーの切り替え（上下）</td></tr>
      <tr><th>Aボタン</th><td>アクション（話す・調べる・拾うなど）／決定</td></tr>
      <tr><th>Bボタン</th><td>道具をしまう／キャンセル</td></tr>
      <tr><th>Xボタン</th><td>リュックを開く</td></tr>
      <tr><th>Yボタン</th><td>道具やアイテムを使う</td></tr>
      <tr><th>+ボタン</th><td>システムメニューを開く</td></tr>
      <tr><th>-ボタン</th><td>マップを開く</td></tr>
    </table>
  </div>
  <h3>カメラ撮影での操作</h3>
  <div class="table2">
    <div class="tx">道具のカメラを選択してYボタンを押すと、カメラで撮影できます。</div>
    <table>
      <tr><th>Rスティック</th><td>カメラアングルの変更</td></tr>
      <tr><th>Xボタン</th><td>セルフタイマーをかける</td></tr>
      <tr><th>方向ボタン</th><td>ズームイン（上）／ズームアウト（下）</td></tr>
      <tr><th>Rボタン</th><td>撮影</td></tr>
      <tr><th>Bボタン</th><td>撮影画面から戻る</td></tr>
      <tr><th>+ボタン</th><td>アルバムを開く</td></tr>
    </table>
  </div>
  <div class="column">
    <div class="box">
      <div class="box2">
        <div class="main">
          <h4><img src="../img/clm_ttl.png"><br>セルフタイマーについて</h4>
          <div class="tx">セルフタイマーをかけているあいだ、主人公は自由に移動できます。家族や住人たちとの集合写真や、綺麗な背景、自慢の畑など、さまざまな思い出を残しましょう。</div>
          <img src="../img/clm_chara.png" class="clm_chara">
        </div>
        <div class="clm_tl"></div><div class="clm_tr"></div><div class="clm_bl"></div><div class="clm_br"></div><div class="clm_lt"></div><div class="clm_lb"></div><div class="clm_rc"></div>
      </div>
    </div>
  </div>
</article>
<article>
  <h2>メニュー画面での操作</h2>
  <div class="table2">
    <table>
      <tr><th>Lスティック／方向ボタン</th><td>項目の選択</td></tr>
      <tr><th>Aボタン</th><td>決定</td></tr>
      <tr><th>Bボタン</th><td>キャンセル</td></tr>
      <tr><th>Lボタン／Rボタン</th><td>タブの切り替え</td></tr>
    </table>
  </div>
</article>
<?php include('../inc/footer.php') ?>