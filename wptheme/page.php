
<?php get_header(); ?>
<section id="page-template">
<div class="container">

<!-- DONT FORGET TO APPLY TO LOOP WHEN OVERLOOPING SOMETHING IN WP -->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
<!-- DONT FORGET TO APPLY TO LOOP WHEN OVERLOOPING SOMETHING IN WP -->

</div>
</section>
<?php get_footer(); ?>
