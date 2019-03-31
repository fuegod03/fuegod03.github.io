
<?php

/*
Template Name: Single Project Template
*/

get_header();
 ?>


<?php

// get the current slug
$slug = pods_v('last','url');

// get pods object
$mypod = pods('works', $slug);

// set our variables
$name = $mypod->field('name');
$permalink = $mypod->field('permalink');

$header_tittle = $mypod->field('header_tittle');
$img_main_logo = $mypod->field('img_main_logo');

$company_name = $mypod->field('company_name');
$company_work_description = $mypod->field('company_work_description');

$icon = $mypod->field('icon');
$icon2 = $mypod->field('icon2');
$icon3 = $mypod->field('icon3');
$icon4 = $mypod->field('icon4');
$icon5 = $mypod->field('icon5');
$icon6 = $mypod->field('icon6');

$icon_name = $mypod->field('icon_name');
$icon_name2 = $mypod->field('icon_name2');
$icon_name3 = $mypod->field('icon_name3');
$icon_name4 = $mypod->field('icon_name4');
$icon_name5 = $mypod->field('icon_name5');
$icon_name6 = $mypod->field('icon_name6');

$client_testimonial = $mypod->field('client_testimonial');
$ct_description = $mypod->field('ct_description');
$ct_name = $mypod->field('ct_name');
$ct_testimonial = $mypod->field('ct_picture');


$brand_identity = $mypod->field('brand_identity');
$brand_description = $mypod->field('brand_description');
$brand_transform_img = $mypod->field('brand_transform_img');
$brand_detail_img = $mypod->field('brand_detail_img');

$color_palettes = $mypod->field('color_palettes');
$color_palettes2 = $mypod->field('color_palettes2');
$color_palettes3 = $mypod->field('color_palettes3');
$color_palettes4 = $mypod->field('color_palettes4');

$brand_platform = $mypod->field('brand_platform');
$bp_description = $mypod->field('bp_description');
$bp_logo_text = $mypod->field('bp_logo_text');
$bp_background = $mypod->field('bp_background');

$message_development = $mypod->field('message_development');
$md_description = $mypod->field('md_description');
$md_img = $mypod->field('md_img');

$website_desgin = $mypod->field('website_desgin');
$wd_description = $mypod->field('wd_description');
$wd_img = $mypod->field('wd_img');

$app_development = $mypod->field('app_development');
$ad_description = $mypod->field('ad_description');
$ap_img = $mypod->field('ap_img');

$custom_print = $mypod->field('custom_print');
$cp_description = $mypod->field('cp_description');
$cp_img = $mypod->field('cp_img');

$digital_marketing = $mypod->field('digital_marketing');
$dm_description = $mypod->field('dm_description');
$dm_img	 = $mypod->field('dm_img	');


 ?>



<div id="single-page">


<div class="img-logo">
  <img src="<?php echo $img_main_logo;?>" alt="logo">
</div>

<div class="company">
<div class="tittle">
<h2><?php echo $company_name; ?></h2>
</div>
<div class="left">
<p><?php echo $company_work_description; ?></p>
</div>
<div class="right">
<ul>

  <li> <i class="icon"></i> <?php echo $icon_name; ?> </li>
  <li> <i class="icon2"></i> <?php echo $icon_name2; ?> </li>
  <li> <i class="icon3"></i> <?php echo $icon_name3; ?> </li>

  <li> <i class="icon4"></i> <?php echo $icon_name4; ?>  </li>
  <li> <i class="icon5"></i> <?php echo $icon_name5; ?> </li>
  <li> <i class="icon6"></i> <?php echo $icon_name6; ?> </li>

<style media="screen">
#single-page .company .right .icon{    background: url(<?php echo $icon; ?>) no-repeat center center;}
#single-page .company .right .icon2{    background: url(<?php echo $icon2; ?>) no-repeat center center;}
#single-page .company .right .icon3{    background: url(<?php echo $icon3; ?>) no-repeat center center;}

#single-page .company .right .icon4{    background: url(<?php echo $icon4; ?>) no-repeat center center; }
#single-page .company .right .icon5{    background: url(<?php echo $icon5; ?>) no-repeat center center;}
#single-page .company .right .icon6{    background: url(<?php echo $icon6; ?>) no-repeat center center;}
  </style>
</ul>
</div>
</div>

<!-- ////// -->
<div class="client-testimonial">
  <div class="tittle">
<h2><?php echo $client_testimonial; ?></h2>
  </div>
  <div class="left">
<p><?php echo $ct_description; ?></p>
<h3><?php echo $ct_name; ?></h3>
  </div>
  <div class="right">
<img src="<?php echo $ct_testimonial; ?>" alt="">
  </div>
</div>

<!-- ////// -->
<div class="palete">
<div class="color">
</div>
<div class="color2">
</div>
<div class="color3">
</div>
<div class="color4">
</div>
</div>
<style>
#single-page .palete .color{background-color:<?php echo $color_palettes; ?> }
#single-page .palete .color2{background-color:<?php echo $color_palettes2; ?>}
#single-page .palete .color3{background-color:<?php echo $color_palettes3; ?>}
#single-page .palete .color4{background-color:<?php echo $color_palettes4; ?>}
</style>
<!-- ////// -->
<div class="brand-identity">
  <div class="top">
  <h2><?php echo $brand_identity; ?></h2>
<p><?php echo $brand_description; ?></p>
  </div>
  <div class="img">
<img src="<?php echo $brand_transform_img; ?>" alt="">
  </div>
  <div class="img2">
<img src="<?php echo $brand_detail_img; ?>" alt="">
  </div>
</div>

<!-- ////// -->
<div class="brand-platform"> <style> #single-page .brand-platform{ background-color: <?php echo $bp_background; ?>;} </style>
<div class="content">
<h2><?php echo $brand_platform; ?></h2>
<p><?php echo $bp_description; ?></p>
<h3><?php echo $bp_logo_text; ?></h3>
</div>
</div>

<!-- ////// -->
<div class="message-development">
<div class="left">
<img src="<?php echo $md_img; ?>" alt="">
</div>
<div class="right">
<h2><?php echo $message_development; ?></h2>
<p><?php echo $md_description; ?></p>
</div>
</div>

<!-- ////// -->
<div class="website-design">
  <div class="top">
<h2><?php echo $website_desgin; ?></h2>
<p><?php echo $wd_description; ?></p>
  </div>
  <div class="img">
<img src="<?php echo $wd_img; ?>" alt="">
  </div>
</div>

<!-- ////// -->
<div class="app-development">
  <div class="top">
<h2><?php echo $app_development; ?></h2>
<p><?php echo $ad_description; ?></p>
  </div>
  <div class="img">
<img src="<?php echo $ap_img; ?>" alt="">
  </div>
</div>

<!-- ////// -->
<div class="custom-print">
  <div class="top">
<h2><?php echo $custom_print; ?></h2>
<p><?php echo $cp_description; ?></p>
  </div>
  <div class="img">
<img src="<?php echo $cp_img; ?>" alt="">
  </div>
</div>

<!-- ////// -->
<div class="digital-marketing">
  <div class="top">
<h2><?php echo $digital_marketing; ?></h2>
<p><?php echo $dm_description; ?></p>
  </div>
  <div class="img">
<img src="<?php echo $dm_img; ?>" alt="">
  </div>
</div>

<!-- <div class="whole-picture">
</div> -->
</div>


<?php get_footer(); ?>
