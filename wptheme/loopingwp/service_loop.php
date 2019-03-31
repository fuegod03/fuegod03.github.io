
          <?php
          $mypod=pods("service");
          $mypod->find("name ASC");
           ?>

           <?php while ($mypod->fetch()):?>

          <?php
          // set out variables
          $name=$mypod->field("name");
          $content= $mypod->field("content");
          // $permalink=$mypod->field("permalink");
          $icon_class=$mypod->field("icon_class");
          $border_color=$mypod->field("border_color");
          $sub_name = $mypod->field("sub_name");
          $sub_name2 = $mypod->field("sub_name2");
          $sub_name3 = $mypod->field("sub_name3");
          $sub_name4 = $mypod->field("sub_name4");
          $sub_name5 = $mypod->field("sub_name5");

          $sub_name6 = $mypod->field("sub_name6");
          $sub_name7 = $mypod->field("sub_name7");
          $sub_name8 = $mypod->field("sub_name8");
          $sub_name9 = $mypod->field("sub_name9");
          $sub_name10 = $mypod->field("sub_name10");
           ?>

          <div class="box <?php echo $border_color ?>">
          <i class="<?php echo $icon_class ?>"></i>
          <h5><?php echo $name ?></h5>
          <ul>
            <li><?php echo $sub_name ?></li>
            <li><?php echo $sub_name2 ?></li>
            <li><?php echo $sub_name3 ?></li>
            <li><?php echo $sub_name4 ?></li>
            <li><?php echo $sub_name5 ?></li>

            <li><?php echo $sub_name6 ?></li>
            <li><?php echo $sub_name7 ?></li>
            <li><?php echo $sub_name8 ?></li>
            <li><?php echo $sub_name9 ?></li>
            <li><?php echo $sub_name10 ?></li>
          </ul>
          </div>
          <?php endwhile; ?>
