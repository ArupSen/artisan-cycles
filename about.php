<?php
// -- about.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="col-md-5 picture">
  <?php
  img_tag('about-main.jpg', 'Artisan Cycles, Much Hadham, Hertfordshire');
  ?>
</div>
<div class="col-md-7 text">
    <h3>BIKES BUILT FOR PERFORMANCE AND DURABILITY</h3>
  <p>Our range includes performance level carbon fibre and titanium, classic and modern steel bicycles and aluminium entry racers. Our frames are made to measure, in Italy. They are individually handcrafted by master frame builders who have specialized in high-end competition frames since the 1940's.</p>
  <h3>BIKE FITTING THE WAY IT SHOULD BE</h3>
  <p>Our bio-mechanic has over 10 years pro-tour experience in this highly skilled science. When it comes to getting the right position and designing the optimum geometry it is experience that counts. We are proud to offer the best bike fitting service you’ll find in the UK.</p>
  <h3>TOP QUALITY, MADE IN EUROPE</h3>
  <p>We offer an alternative to mass produced bikes made in far East. Our hand-made projects are a careful selection of top quality components that are designed, produced and still manufactured in Europe. Tommasini, Campagnolo, Miche, Crono are just some of the brands we stock.</p>
  <h3>THE PROCESS</h3>
  <p>It’s like going to a tailor for a bespoke suit fitting rather than picking something from a rail on the high street. Make an appointment to discuss your project in detail, we will design the project around you and after 10 weeks your dream bike will be ready to collect.</p>
  <h3>RURAL SETUP, A UNIQUE DESTINATION</h3>
  <p>In Hertfordshire, you’ll find a wide range of handcrafted premium brands, under one roof. We also offer clothing and shoes, all made in Italy. Much Hadham is a pretty village with pleasant country lanes for rides and places to visit. Most importantly, when clients come to us they know they are getting great value for the highest quality.</p>
<?php
include_once(INCPATH.'enquire.php');
?>
</div>


<?php footer(); ?>
