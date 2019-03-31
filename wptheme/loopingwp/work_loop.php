
<?php
$mypod=pods("works");
$mypod->find("name ASC");
$number=0;
 ?>

 <?php while ($mypod->fetch()):?>

<?php
// set out variables
$name=$mypod->field("name");
$content= $mypod->field("content");
$permalink=$mypod->field("permalink");
$front_photo=$mypod->field("front_photo");
$front_description=$mypod->field("front_description");
$type_of_project=$mypod->field("type_of_project");
$number+=1;
 ?>

 <a href="<?php echo $permalink; ?>" class="box image<?php echo $number; ?>">
   <div class="image">
     <div class="hover-bg">
       <style media="screen">
       #portfolio-section .portfolio-container .box.image<?php echo $number; ?> .image{
background: url("<?php echo $front_photo ?>");

       }
       </style>
       <div class="title">
         <div class="text"><?php echo $type_of_project ?></div>
       </div>
     </div>
   </div>
 </a>

<?php endwhile; ?>
