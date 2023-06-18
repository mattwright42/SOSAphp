<!doctype html>
<?php include('../inc/language.php') ?>
<?php $pagenumber = "04"; //←ページ番号を記入します ?>
<?php $pagecat = "cat_a"; //←ページカテゴリを入力します ?>
<?php $pagetitle = "ゲームの始め方"; //←ページのタイトルを記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?>
<?php include('../inc/head.php') ?>
<?php include('../inc/body_page.php') ?>
<article>
  <h2>タイトルメニュー</h2>
  <div class="txpic">
    <div class="box">
      <div class="tx">ゲームを起動してタイトル画面でボタンを押すと、メニューが表示されます。項目を選び、決定してください。</div>
      <img src="../img/ph/04_01.png" alt="">
    </div>
  </div>
  <div class="table2">
    <table>
      <tr><th>つづきから</th><td>セーブしたところからゲームを再開します。</td></tr>
      <tr><th>はじめから</th><td>最初からゲームを始めます。</td></tr>
      <tr><th>システム</th><td>設定の変更やDLCの確認、スタッフクレジットの表示ができます。</td></tr>
    </table>
  </div>
  <div class="column">
    <div class="box">
      <div class="box2">
        <div class="main">
          <h4><img src="../img/clm_ttl.png"><br>セーブについて</h4>
          <div class="tx">ゲーム中に+ボタンを押して「日記を書く」を選ぶか、自宅のサイドテーブルを調べて日記を書くと、セーブできます（最大8個）。また、自宅で寝ると自動でセーブされます。</div>
          <img src="../img/clm_chara.png" class="clm_chara">
        </div>
        <div class="clm_tl"></div><div class="clm_tr"></div><div class="clm_bl"></div><div class="clm_br"></div><div class="clm_lt"></div><div class="clm_lb"></div><div class="clm_rc"></div>
      </div>
    </div>
  </div>
</article>
<article>
  <h2>主人公を作成しよう</h2>
  <div class="mainchara">
    <div class="box">
      <div class="info">
        <div class="tx">ゲームを始めると、まずは自分の分身となる主人公を作成できます。自身のスタイルに合わせ、顔立ちや髪型、名前などを選びましょう。見た目や名前、性別はあとから変えられませんが、ファッションはチェスト・鏡でいつでも変えることができます。</div>
        <div class="table2 dispc">
          <table>
            <tr><th>見た目</th><td>顔立ち、肌の色、目の色を選べます。</td></tr>
            <tr><th>ファッション</th><td>髪型、髪の色、服装を選べます。</td></tr>
            <tr><th>名前</th><td>主人公の名前を決められます（最大8文字）。</td></tr>
            <tr><th>性別</th><td>おとこ、おんな、その他のなかから選べます。</td></tr>
          </table>
        </div>
      </div>
      <figure><img src="../img/ph/04_02_03.png" alt=""></figure>
      <div class="table2 dissp">
        <table>
          <tr><th>見た目</th><td>顔立ち、肌の色、目の色を選べます。</td></tr>
          <tr><th>ファッション</th><td>髪型、髪の色、服装を選べます。</td></tr>
          <tr><th>名前</th><td>主人公の名前を決められます（最大8文字）。</td></tr>
          <tr><th>性別</th><td>おとこ、おんな、その他のなかから選べます。</td></tr>
        </table>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="box">
      <div class="box2">
        <div class="main">
          <h4><img src="../img/clm_ttl.png"><br>年齢の変化について</h4>
          <div class="tx">わすれ谷で過ごし、1年が経過するたびに主人公は年齢を重ねていき、見た目が変わっていきます。</div>
          <img src="../img/clm_chara.png" class="clm_chara">
        </div>
        <div class="clm_tl"></div><div class="clm_tr"></div><div class="clm_bl"></div><div class="clm_br"></div><div class="clm_lt"></div><div class="clm_lb"></div><div class="clm_rc"></div>
      </div>
    </div>
  </div>
</article>
<?php include('../inc/footer.php') ?>