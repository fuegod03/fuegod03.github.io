
<?php
$mypod=pods("logo");
$mypod->find("name ASC");
 ?>

 <?php while ($mypod->fetch()):?>

<?php
// set out variables
$mainlogoweb=$mypod->field("mainlogoweb");
// include the current feature image
// use this to add the feature img<?php echo $image_properties[url]; ? >
// (dont forger to close the tag)
include("get_feature_img.php");
?>



<?php endwhile; ?>
