<?php
// --bikes.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row rides">
  <div class="col-md-5 picture">
    img_tag('bikes-lisa.jpg', 'Lisa riding Ironman UK on Racer Rosa bicycle');
<p>IRONMAN UK<br />
LISA ON RACER ROSA</p>
  </div>
  <div class="col-md-3 picture">
    img_tag('bikes-duncan.jpg', 'Duncan on Dragon Ride on his Racer Rosa bicycle');
<p>DRAGON RIDE<br />
DUNCAN<br />
ON RACER ROSA</p>
  </div>
  <div class="col-md-4 picture">
    img_tag('bikes-riccardo.jpg', 'Riccardo on the Tour of Flanders');
<p>TOUR OF FLANDERS<br /> RICCARDO <br />ON RACER ROSA</p>
  </div>
</div>
<div class="row epoca">
  <div class="col-md-5 picture">
    img_tag('bikes-epoca1.jpg','Epoca carbon fibre bike');
  </div>
  <div class="col-md-4 picture">
  <p>EPOCA<br />
  R60<br />
  CARBON FIBRE</p>
    img_tag('bikes-epoca2.jpg', Epoca carbon fibre bike');
  </div>
  <div class="col-md-3 picture">
    img_tag('bikes-epoca3.jpg', Epoca carbon fibre bike');
  </div>
</div>


<?php footer(); ?>
