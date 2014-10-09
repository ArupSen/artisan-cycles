<?php
// --visits.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="col-md-2 picture">
  <?php
  img_tag('visits-local.jpg','places to visit in Much Hadham');
  ?>
<p><a href="http://twitter.com/henrymoorefdn" target="_blank">@henrymoorefdn</a></p>
<p><a href="http://twitter.com/hoepley_cafe" target="_blank">@Hoepley_Cafe</a></p>
</div>
<div class="col-md-5">
  <address>The Old Grain Store Bromley Lane
Much Hadham Hertfordshire SG10 6HU Tel 01438 940600
Mob 07772 931543 info@artisancycles.co.uk</address>
<div class="social-icons">
</div>
<?php
img_tag('visits-map.jpg','Local area map of Artisan Cycles');
?>
</div>

<div class="col-md-5 picture">
  <?php
  img_tag('visits-main.jpg','Visit Artisan Cycles by appointment');
  ?>
<p>visits by appointment</p>
</div>
<?php footer(); ?>
