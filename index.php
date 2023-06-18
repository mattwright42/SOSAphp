<!doctype html>
<?php include('inc/language.php') ?>
<?php $pagenumber = "0"; //←ページ番号を記入します ?>
<?php $pagetitle = ""; ?>
<?php $directory = ""; ?>
<?php $titspace = ""; ?>
<?php include('inc/head.php') ?>
<body class="top_page">
  <section class="top_ctt">
    <div class="box">
      <div class="space"></div>
      <div class="main">
        <figure class="logo1"><img src="img/home_logo.png"></figure>
        <figure class="logo2"><img src="img/webmanual.png"></figure>
      </div>
      <span class="btn_next"><a href="01"><img src="img/navi/btn_next.png" alt="進む"></a></span>
      <footer>
        <div class="fence"><img src="<?php echo $directory ?>img/saku.png"></div>
        <div class="copyright">&copy;2023 Marvelous Inc.</div>
      </footer>
    </div>
  </section>
  <?php include('inc/menu_btn.php'); ?>
  <script type="text/javascript" src="<?php echo $directory; ?>js/smooth-scroll.min.js"></script>
  <script type="text/javascript" src="<?php echo $directory; ?>js/smooth-scroll-order.js"></script>
  <script type="text/javascript" src="<?php echo $directory; ?>js/class_order.js"></script>
  <script type="text/javascript" src="<?php echo $directory; ?>js/menu_btn.js"></script>
</body>
</html>