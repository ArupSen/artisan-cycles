<?php
// --bikes.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="row lombardi-top">
    <div class="col-md-3 picture">
    <h3>all of our projects are</h3>
    <?php
    img_tag('bikes-lombardi-sport.jpg','Lombardi Sport 01');
    ?>
    <p>racer rosa<br />sport 01<br />columbus steel</p>
  </div>
  <div class="col-md-2 picture">
    <aside>made to measure and custom built</aside>
    <?php
    img_tag('bikes-lombardi-seattube.jpg','Lombardi steel seat tube');
    ?>
  </div>
  <div class="col-md-2 picture">
    <p>but here you can view<br />some of our most popular<br />models as an indication</p>
    <?php
    include(INCPATH.'enquire.php');
    img_tag('bikes-lombardi-forks.jpg','Lombardi steel forks');
    ?>
  </div>
  <div class="col-md-1 picture"></div>
  <div class="col-md-4 picture">
    <?php
    img_tag('bikes-lombardi-headtube.jpg','Lombardi Carbon Head Tube');
    ?>
  </div>
</div>
<div class="row lombardi-bottom">
  <div class="col-md-2 picture">
  <p>racer rosa<br />pista 01<br />columbus<br />steel</p>
    <?php
    img_tag('bikes-tommasini-headtube.jpg','Tommasini Carbon Head Tube');
    ?>
  </div>
  <div class="col-md-2 picture">
    <?php
    img_tag('bikes-tommasini-headtube.jpg','Tommasini Carbon Head Tube');
    ?>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-tommasini-headtube.jpg','Tommasini Carbon Head Tube');
    ?>
  </div>
  <div class="col-md-1 picture">
  <p>LOMBARDI<br /> GARA 02<br /> CARBON<br /> FIBRE</p>
  </div>
  <div class="col-md-4 picture">
    <?php
    img_tag('bikes-tommasini-headtube.jpg','Tommasini Carbon Head Tube');
    ?>
  </div>
</div>
<div class="row rides">
  <div class="col-md-5 picture">
    <?php
    img_tag('bikes-lisa.jpg', 'Lisa riding Ironman UK on Racer Rosa bicycle');
    ?>
    <p>IRONMAN UK<br /> LISA ON RACER ROSA</p>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-duncan.jpg', 'Duncan on Dragon Ride on his Racer Rosa bicycle');
    ?>
    <p>DRAGON RIDE<br /> DUNCAN<br /> ON RACER ROSA</p>
  </div>
  <div class="col-md-4 picture">
    <?php
    img_tag('bikes-riccardo.jpg', 'Riccardo on the Tour of Flanders');
    ?>
    <p>TOUR OF FLANDERS<br /> RICCARDO <br />ON RACER ROSA</p>
  </div>
</div>
<div class="row epoca">
  <div class="col-md-5 picture">
    <?php
    img_tag('bikes-epoca1.jpg','Epoca carbon fibre bike');
    ?>
  </div>
  <div class="col-md-4 picture">
    <p>EPOCA<br /> R60<br /> CARBON FIBRE</p>
    <?php
    img_tag('bikes-epoca2.jpg', 'Epoca carbon fibre bike');
    ?>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-epoca3.jpg', 'Epoca carbon fibre bike');
    ?>
  </div>
</div>
<div class="row tommasini-top">
  <div class="col-md-2 picture">
    <?php
    img_tag('bikes-tommasini-headtube-carbon.jpg','Tommasini Carbon Head Tube');
    ?>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-tommasini-saddle.jpg','Tommasini Carbon Seat Tube');
    ?>
  </div>
  <div class="col-md-2 picture">
    <p>TOMMASINI<br /> VLC3<br /> CARBON FIBRE</p>
    <?php
    img_tag('bikes-tommasini-frame.jpg','Tommasini Carbon frame');
    ?>
  </div>
  <div class="col-md-5 picture">
    <?php
    img_tag('bikes-tommasini-riders.jpg','Tommasini Riders');
    ?>
  </div>
</div>
<div class="row tommasini-bottom">
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-tommasini-steel.jpg','Tommasini Steel Frame');
    ?>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-tommasini-fire.jpg','Tommasini Fire Columbus Frame');
    ?>
  </div>
  <div class="col-md-2 picture">
      <p>TOMMASINI<br />
    FIRE<br />
    STEEL<br />
    COLUMBUS SPIRIT</p>
  </div>
  <div class="col-md-2 picture">
    <p>TOMMASINI<br /> MACH<br /> TITANIUM</p>
    <?php
    img_tag('bikes-tommasini-headtube.jpg','Tommasini Titanium Head Tube');
    ?>
  </div>
  <div class="col-md-2 picture">
    <p>TOMMASINI<br /> X-FIRE<br /> STAINLESS STEEL<br /> COLUMBUS XCR</p>
    <?php
    img_tag('bikes-tommasini-headtube-steel.jpg','Tommasini Steel Head Tube');
    ?>
  </div>
</div>
<div class="row racer-rosa-top">
  <div class="col-md-9 picture">
    <?php
    img_tag('bikes-racer-rosa-white.jpg','Racer Rosa White Racer');
    ?>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-racer-rosa-detail.jpg','Racer Rosa Steel Frame');
    ?>
  </div>
</div>
<div class="row racer-rosa-bottom">
  <div class="col-md-2 picture">
  <p>RACER ROSA<br /> SPORT 02<br /> COLUMBUS<br /> LIFE / SPIRIT<br /> STEEL FRAME<br /> CARBON FORK</p>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-racer-rosa-headset.jpg','Racer Rosa Carbon Fork');
    ?>
  </div>
  <div class="col-md-4 picture">
    <?php
    img_tag('bikes-racer-rosa-downtube.jpg','Racer Rosa Steel Frame');
    include(INCPATH.'enquire.php');
    ?>
<a href="#top">back to top</a>
  </div>
  <div class="col-md-3 picture">
    <?php
    img_tag('bikes-racer-rosa-stays.jpg','Racer Rosa Rear Stays');
    ?>
  </div>
</div>
<?php footer(); ?>
