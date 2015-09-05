<?php
// --bikes_new.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row bikes-top col-md-12">
<p>ALL OF OUR PROJECTS ARE MADE TO MEASURE, CUSTOM BUILT, WITH CUSTOMISED FINISHES<br> BUT HERE YOU CAN VIEW SOME OF OUR MOST POPULAR MODELS AS AN INDICATION</p>
<?php include(INCPATH.'enquire.php'); ?>
</div>
<div class="row bikes">
  <div class="col-md-6 main">
    <?php img_tag('tommasini-1.jpg', 'alt and title'); ?>
  </div>
  <div class="col-md-6 detail">
    <p>TOMMASINI VLC3<br>
    FULL CARBON FRAME AND FORK<br> GROUPSET - CAMPAGNOLO RECORD<br> FINISHING KIT - DEDA ZERO 100<br> WHEELS - CAMPAGNOLO NEUTRON</p>
    <?php img_tag('tommasini-detail-1.jpg', 'alt and title'); ?>
  </div>
</div><!-- .row .bikes -->
<?php footer(); ?>
