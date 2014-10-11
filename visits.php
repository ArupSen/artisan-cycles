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
<p class="henry-moore"><a href="http://twitter.com/henrymoorefdn" target="_blank">@henrymoorefdn</a></p>
<p class="cafe"><a href="http://twitter.com/hoepley_cafe" target="_blank">@Hoepley_Cafe</a></p>
</div>
<div class="col-md-5 picture">
  <address>The Old Grain Store<br /> Bromley Lane<br />
Much Hadham<br /> Hertfordshire SG10 6HU<br /> Tel 01438 940600<br />
Mob 07772 931543<br /> info@artisancycles.co.uk</address>
<div class="social-icons">
<a href="https://www.facebook.com/pages/Artisan-Cycles/280582228781100" title="follow us on facebook" target="_blank"><?php img_tag('fb_icon.png', 'Follow us on Facebook'); ?></a>
<a href="https://twitter.com/ArtisanCyclesUK" title="follow us on twitter" target="_blank"><?php img_tag('twitter_icon.png', "Follow us on Twitter"); ?></a>
<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
  <div id="SkypeButton_Call_artisancycles_1">
    <script type="text/javascript">
      Skype.ui({
        "name": "chat",
        "element": "SkypeButton_Call_artisancycles_1",
        "participants": ["artisancycles"],
        "imageColor": "white",
        "imageSize": 32
      });
    </script>
  </div>
</div>
<?php
img_tag('visits-map.jpg','Local area map of Artisan Cycles');
?>
</div>

<div class="col-md-5 picture">
  <?php
  img_tag('visits-main.jpg','Visit Artisan Cycles by appointment');
  ?>
<p class="appointment">visits by appointment</p>
</div>
<?php footer(); ?>
