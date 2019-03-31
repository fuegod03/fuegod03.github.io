
<?php
$mypod=pods("blog");
$mypod->find("name ASC");
$number=0;
 ?>

 <?php while ($mypod->fetch()):?>

<?php
// set out variables
$front_name=$mypod->field("front_name");
$front_img=$mypod->field("front_img");
$front_description=$mypod->field("front_description");
$month_and_year=$mypod->field("month_and_year");
$number+=1;

// include the current feature image
// use this to add the feature img<?php echo $image_properties[url]; ? >
// (dont forger to close the tag)
include("get_feature_img.php");
?>

<a href="blog/#" class="post">
  <div class="post-img" style="background: url('<?php echo $front_img ?>');"></div>
  <div class="details">
    <h4><?php echo $front_name; ?></h4>

    <p class="date"> <?php echo $month_and_year ?> </p>
<p><?php echo $front_description; ?></p>

  </div>
  <div class="more">
    <div class="button">
      Read More
    </div>
  </div>
</a>

<?php endwhile; ?>
