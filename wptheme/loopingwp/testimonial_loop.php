

 <div class="testimonials-container carousel" data-flickity>

   <?php
   $mypod=pods("testimonial");
   $mypod->find("name ASC");
   $number=0;
    ?>

    <?php while ($mypod->fetch()):?>

   <?php
   // set out variables
   $content=$mypod->field("content");
   $name=$mypod->field("name");
   $work=$mypod->field("work");
   $img=$mypod->field("img");
   $number+=1;
    ?>

   <div class="test-sides test-left carousel-cell">
     <div class="header">
       <div class="user-img" style="background: url('<?php echo $img ?>')">
       </div>
       <div class="info">
         <h4><?php echo $name ?></h4>
         <span><?php echo $work ?></span>
       </div>
     </div>
     <p>
<?php echo $content ?>
     </p>
   </div>

<?php endwhile; ?>
 </div>
 <script src="<?php echo get_bloginfo('template_directory'); ?>/js/testimonial.js" charset="utf-8"></script>
