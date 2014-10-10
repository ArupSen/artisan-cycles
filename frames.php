<?php
// --frames.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row">
  <div class="col-md-3 picture">
    <?php
    img_tag('frames-columbus.jpg','Columbus tubing');
    ?>
  </div>
  <div class="col-md-2 picture">
    <?php
    img_tag('frames-brazing.jpg','Silver fillet brazing');
    ?>
  </div>
  <div class="col-md-1"></div>
  <div class="col-md-6 text">
    <p>Our frames are hand-crafted, specifically designed and built one by one for each individual rider's body dimensions and weight, riding style, preferred geometry and specifications.</p>
    <p>Experience is a key factor in frame building. We select the best Italian artisans with several generations' experience of building frames at competitive level - and these are family businesses who have always kept their productions 100% made in Italy. From Antonio and Ferruccio Taverna, to Valentino Stocchero, Renzo Formigli and Irio Tommasini, our frame builders have hand-crafted frames, as outside contractors, for the major Italian bicycle brands. In many occasions, they have built - and still do - professional competition frames that raced major world competitions.</p>
    <p>We are proud to bring these frames to the UK, they represent the absolute best you can find in the world for heritage, experience and innovation. From the classic modernity of Steel and Stainless Steel, to the versatility of Aluminium and the inno- vation of modern materials, such as Carbon Fibre and Titanium.</p>
    <p>We design any geometry for any need and purpose. Book an appointment and come in for a chat and experience the unique services we can offer here, in the middle of the beautiful English countryside, Much Hadham, Hertfordshire.</p>
  </div>
</div>

<div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-3 picture">
    <?php
      img_tag('frames-dropouts.jpg', 'frame dropouts');
    ?>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-6 picture">
    <?php
    include_once(INCPATH.'enquire.php');
    img_tag('frames-bench.jpg', 'frame on bench');
    ?>
  </div>
  <aside><p>master frame builders of competition frames since the 1940's</p></aside>
</div>

<div class="row">
  <div class="col-md-4 picture">
<?php
    img_tag('frames-bottom-left.jpg', 'frame building');
?>
  </div>
  <div class="col-md-4 picture">
<?php
    img_tag('frames-bottom-centre.jpg', 'frame building');
?>
  </div>
  <div class="col-md-4 picture">
<?php
    img_tag('frames-bottom-right.jpg', 'frame building');
?>
  </div>
</div>
<?php footer(); ?>
