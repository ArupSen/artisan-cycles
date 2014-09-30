<?php
// --fitting.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="col-md-5 picture">
  <?php
  img_tag('fitting-main.jpg','Professional bike fitting at Artisan Cycles');
  ?>
<p>PRO RIDER FRANCESCO CHICCHI BEING FITTED BY GIUSEPPE</p>
</div>
<div class="col-md-7 text">
  <h3>professional bike fitting</h3>
<p>Bike Fitting is a highly specialized science and we offer the best service available in the UK.
Giuseppe Giannecchini is one of the world's leading professional bio-mechanics and bike fitters. He has many years Pro-Tour fitting experience, collaborating with great frame builders. Giuseppe comes to our studio one weekend every month and we can offer a bike fitting session with him, at a very competitive price.
</p>
<p>This is a Level 3 fitting session, aimed at competitive riders and those who have specific physical requirements, and also those who just spend many hours on a saddle. It entails identifying the best riding position, designing the perfect made to measure geometry and tuning the bicycle to the individual settings required by each rider. This service also includes a follow-up session with Giuseppe, once the final bike has been ridden for the adaptation period.
</p>
<p>Small changes can radically alter performance and comfort. "Harmony" between bike and rider is the word we most often hear from our clients. The aches and pains or common niggles that riders had on previous bikes are swiftly eliminated and they soon start to shave minutes off their personal best times.
</p>
<p>At all levels, from the beginner cyclist and commuter to the serious rider, the feedback we keep
receiving is always ...: "perfect handling, precise cornering, responsiveness, comfort, efficiency, a pleasure to ride, never painful..." and these are words that make us very proud of what we do.
</p>
<?php
// enquire button
include_once(INCPATH.'enquire.php');
?>
</div>


<?php footer(); ?>
