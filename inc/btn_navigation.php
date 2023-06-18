<?php
  $prev = $pagenumber - 1;
  $next = $pagenumber + 1;
?>
<nav class="to_page to_page<?php echo $pagenumber; ?>">
  <span class="btn_top"><?php echo '<a href="../">' ?><img src="<?php echo $directory ?>img/navi/btn_prev.png" alt="戻る"></a></span>
  <span class="btn_prev"><?php echo '<a href="' ?><?php echo $directory ?><?php echo sprintf("%02d", "$prev"); ?><?php echo '/">' ?><img src="<?php echo $directory ?>img/navi/btn_prev.png" alt="戻る"></a></span>
  <span class="btn_next"><?php echo '<a href="' ?><?php echo $directory ?><?php echo sprintf("%02d", "$next"); ?><?php echo '/">' ?><img src="<?php echo $directory ?>img/navi/btn_next.png" alt="進む"></a></span>
</nav>
