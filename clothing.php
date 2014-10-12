<?php
// --clothing.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<div class="left-stripe"></div>
<div class="right-stripe"></div>
<div class="row top-row">
  <div class="col-md-5 picture">
    <?php
    img_tag('clothing-parentini-top.jpg', 'Parentini');
    ?>
<aside>WORLD CHAMPIONSHIPS 2014, PONFERRADA, SPAIN<br /> THE DANISH NATIONAL TEAM WINS ON PARENTINI</aside>
  </div>
  <div class="col-md-7">
    <h3>PREMIUM QUALITY BRANDS, 100% MANUFACTURED IN ITALY</h3>
  <p>Parentini and Crono are only two of the Premium brands we stock. We selected these com- panies because they are great examples of quality at highest level and stylish design in the cycling industry. When you try these products, you will not want to use anything else. We have a sizing kit in our studio, please feel free to come in and try them on. Experience stuff will help you choose. For Clubs and Teams, we do special order discounts, custom designs with no minimum orders and quick turnarounds.</p>
  <?php
  img_tag('clothing-chrono-shoes.jpg','Chrono Shoes');
  ?>
  </div>
</div>
<div class="row bottom-row">
  <div class="col-md-6 picture">
    <?php
    img_tag('clothing-parentini-bottom.jpg','Parentini custom club kits');
    ?>
      <aside>
      <p>custom club kits:</p>
      <ul>
      <li>any design</li>
      <li>no minmum order</li>
      <li>quick turnaround</li>
      </ul>
      </aside>
  </div>
  <div class="col-md-6 picture">
    <?php
    img_tag('clothing-shoerack.jpg','Chrono - The Secret to the perfect shoe');
    ?>
      <aside>
      <p>THE SECRET FOR THE PERFECT SHOE:</p>
      <ul>
      <li>italian ingredients</li>
      <li>experienced hands</li>
      <li>slow cooking</li>
      </ul>
      </aside>
  </div>
</div>

<?php footer(); ?>
