<?php
// --wheels.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="col-md-6 picture">
<?php
  img_tag('wheels-main.jpg', 'Hand built wheels at Artisan Cycles Ltd');
?>
</div>
<div class="col-md-6 text">
  <h3>hand built wheels</h3>
<p>After a well built frame, the next most important component of a good bicycle is most certainly the wheelset. We offer the option to have hand-built wheelsets on all our projects - but we also sell just the wheels, customised on demand; prices start at £200 for a set.</p>
<p>A hand made wheelset not only allows choice of preferred components, but it also offers the best possible handling and durability, as it's designed according to client's weight, riding style and requirements. We build all sorts of custom wheels, for any purpose, with any lacing pattern, using only top quality components, like Sapim spokes (made in Belgium), Mavic rims (made in France), Campagnolo, Miche and Royce hubs (made in Italy and England). Below are just three examples of our most popular wheelsets, but combinations are endless, so please feel free to enquire about any build:</p>
<p>The Commuter: 36 spokes, 3-cross front and rear - £285 <br />- Miche hubs / Sapim Race spokes / Mavic Open Pro rims</p>
<p>The Racer: 32 spokes, radial front / 2-cross rear - £498
<br />- Campagnolo Record hubs / Sapim Laser spokes / Mavic Open Pro CD rims</p>
<p>The Super Racer: 20 spokes radial front / 24 spokes 2-cross rear - £770 <br />- Royce Titanium hubs / Sapim CX-Ray spokes / DT-Swiss RR585 rims</p>
<?php
// the enquire button
include_once(INCPATH.'enquire.php');
?>
</div>



<?php footer(); ?>
