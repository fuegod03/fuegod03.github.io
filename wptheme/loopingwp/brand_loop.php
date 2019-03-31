
<?php
$mypod=pods("brand");
$mypod->find("name ASC");
$number=0;
 ?>

 <?php while ($mypod->fetch()):?>

<?php
// set out variables
$name=$mypod->field("name");
$brand=$mypod->field("brand");
$number+=1;
 ?>

   <div class="box brand-box<?php echo $number ?>">
<img src="<?php echo $brand ?>" alt="">
   </div>


<?php endwhile; ?>
