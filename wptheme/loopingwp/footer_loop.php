<?php
$mypod=pods("footer");
$mypod->find("name ASC");
 ?>

 <?php while ($mypod->fetch()):?>

<?php
// set out variables
$background=$mypod->field("background");
$left_img=$mypod->field("left_img");
$location=$mypod->field("location");
$right_h2=$mypod->field("right_h2");
$right_h3=$mypod->field("right_h3");
$content=$mypod->field("content");
$right_button=$mypod->field("right_button");
$contact_logo=$mypod->field("contact_logo");
$contact_tittle=$mypod->field("contact_tittle");
$contact_number=$mypod->field("contact_number");
$link_contact_number=$mypod->field("link_contact_number");
$contact_address=$mypod->field("contact_address");
$contact_right_logo=$mypod->field("contact_right_logo");
$font_icon=$mypod->field("font_icon");
$font_icon2	=$mypod->field("font_icon2	");
$font_icon3=$mypod->field("font_icon3");
$font_icon4=$mypod->field("font_icon4");
 ?>


 <footer>

 <div class="location-container"> <style media="screen"> footer .location-container{ background: url(<?php echo $background ?>) no-repeat center center;}</style>

 <div class="location-img">
 <a href="<?php echo $location ; ?>">
 <img src="<?php echo $left_img; ?>" alt="">
 </a>
 </div>
 <div class="location-info">
   <h2><?php echo $right_h2; ?></h2>
   <h3> <?php echo $right_h3; ?> </h3>
 <p><?php echo $content; ?></p>
 <button class="btn" type="button" name="button"><?php echo $right_button; ?></button>
 </div>
 </div>


   <!-- Second box -->
 <div class="info-container">

 <div class="info-contact">
   <img src="<?php echo $contact_logo; ?>" alt="">
   <div class="info">
     <h5><?php echo $contact_tittle; ?></h5>

 <a href="<?php echo $link_contact_number; ?>"><?php echo $contact_number ?></a>
 <address>
<?php echo $contact_address; ?>
 </address>
   </div>
 </div>

 <div class="info-img">
 <img src="<?php echo $contact_right_logo; ?>" alt="">
 </div>
 </div>

   <!-- Third box -->
   <div class="social-container">
     <a href="http://www.facebook.com/">
       <i class="<?php echo $font_icon; ?>"></i>
     </a>
     <a href="http://www.dribbble.com/">
       <i class="<?php echo $font_icon2; ?>"></i>
     </a>
     <a href="http://www.facebook.com/">
       <i class="<?php echo $font_icon3; ?>"></i>
     </a>
     <a href="http://www.facebook.com/">
       <i class="<?php echo $font_icon4; ?>"></i>
     </a>
   </div>
   <h5>Jose Espino</h5>
   <h6>Web Developer</h6>
   <script src="<?php echo get_bloginfo('template_directory'); ?>/js/app.js"></script>
 </footer>
 </body>
 <?php wp_footer(); ?>
 </html>

<?php endwhile; ?>
