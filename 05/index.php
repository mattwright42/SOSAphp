<!doctype html>
<?php include('../inc/language.php') ?>
<?php $pagenumber = "05"; //←ページ番号を記入します ?>
<?php $pagecat = "cat_a"; //←ページカテゴリを入力します ?>
<?php $pagetitle = "画面の見方"; //←ページのタイトルを記入します ?>
<?php $directory = "../"; ?>
<?php $titspace = "｜"; ?>
<?php include('../inc/head.php') ?>
<?php include('../inc/body_page.php') ?>
<article>
  <h2>フィールド画面</h2>
  <div class="pic1">
    <img src="../img/ph/05_01.png">
  </div>
  <div class="number">
    <ol>
      <li><dl><dt>体力</dt><dd>主人公の体力です。ゼロになるとその場で倒れ、3時間経って目を覚まします。</dd></dl></li>
      <li><dl><dt>季節と日付</dt><dd>現在の季節と日付です。季節によって育てられる作物や実のなる果樹が変わります。</dd></dl></li>
      <li><dl><dt>時間</dt><dd>現在時刻です。</dd></dl></li>
      <li>
        <dl>
          <dt>天候</dt>
          <dd>
            現在の天候です。
            <div class="ic_exp">
              <span><img src="../img/ph/05_02-1.png">＝快晴／晴れ</span>
              <span><img src="../img/ph/05_02-2.png">＝曇り</span>
              <span><img src="../img/ph/05_02-3.png">＝雨</span>
              <span><img src="../img/ph/05_02-4.png">＝大雨</span>
              <span><img src="../img/ph/05_02-5.png">＝雪</span>
            </div>
          </dd>
        </dl>
      </li>
      <li><dl><dt>アイテムスロット</dt><dd>5列あり、方向ボタン上下でスロットを切り替えることができます。</dd></dl></li>
      <li><dl><dt>ミニリュック</dt><dd>選択したスロットに入っているアイテムです。方向ボタン左右でアイテムを切り替え、Yボタンで使うことができます。</dd></dl></li>
      <li><dl><dt>操作ガイド</dt><dd>A、B、X、Yボタンに割り振られたそれぞれの行動が取れます。</dd></dl></li>
    </ol>
  </div>
</article>
<article>
  <h2>リュックメニュー</h2>
  <div class="tx1">Xボタンを押すとリュックメニューが表示され、アイテムの整理や住人との友好度などが確認できます。</div>
  <div class="pic1"><img src="../img/ph/05_03.png"></div>
  <div class="ic_list">
    <ul>
      <li>
        <img src="../img/ph/05_04-1.png" alt="">
        <dl><dt>リュック</dt><dd>リュックに入っているアイテムを確認できます。</dd></dl>
      </li>
      <li>
        <img src="../img/ph/05_04-2.png" alt="">
        <dl><dt>おつかいリスト</dt><dd>掲示板で確認したおつかいの一覧です。</dd></dl>
      </li>
      <li>
        <img src="../img/ph/05_04-3.png" alt="">
        <dl><dt>牧場情報</dt><dd>主人公のステータスや見つけたステキ、出荷の情報を確認できます。</dd></dl>
      </li>
      <li>
        <img src="../img/ph/05_04-4.png" alt="">
        <dl><dt>動物情報</dt><dd>現在飼育している動物の情報を確認できます。</dd></dl>
      </li>
      <li>
        <img src="../img/ph/05_04-5.png" alt="">
        <dl><dt>住人情報</dt><dd>それぞれの住人との友好度を確認できます。</dd></dl>
      </li>
    </ul>
  </div>
  <h3>リュックの操作</h3>
  <div class="tx1">リュックでは所持アイテムの説明を見たり、入れ替えたりできます。また、Yボタンでアイテムを捨てたり、+ボタンでせいとんしたりできます。</div>
  <div class="column">
    <div class="box">
      <div class="box2">
        <div class="main">
          <h4><img src="../img/clm_ttl.png"><br>活力と満腹度に注意しよう</h4>
          <div class="tx">主人公には体力、活力、満腹度があり、リュックメニューの牧場情報で確認できます。満腹度が下がったり、失敗した料理を食べたりすると活力が減少し、会話や表情が変化します。満腹度は料理を食べて回復させましょう。</div>
          <img src="../img/clm_chara.png" class="clm_chara">
        </div>
        <div class="clm_tl"></div><div class="clm_tr"></div><div class="clm_bl"></div><div class="clm_br"></div><div class="clm_lt"></div><div class="clm_lb"></div><div class="clm_rc"></div>
      </div>
    </div>
  </div>
</article>
<article>
  <h2>システムメニュー</h2>
  <div class="table2">
    <div class="tx">フィールド画面で+ボタンを押すと、システムメニューが開きます。</div>
    <table>
      <tr><th>日記を書く</th><td>現在のプレイ状況をセーブします。</td></tr>
      <tr><th>日記を読む</th><td>セーブしてあるデータをロードします。</td></tr>
      <tr><th>タカクラノート</th><td>牧場生活についての説明を確認できます。</td></tr>
      <tr><th>オプション</th><td>ゲーム内に関する設定などを変更できます。</td></tr>
      <tr><th>タイトルへ戻る</th><td>現在のゲームを終了し、セーブせずにタイトル画面に戻ります。</td></tr>
    </table>
  </div>
</article>
<?php include('../inc/footer.php') ?>