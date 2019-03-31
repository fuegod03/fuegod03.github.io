<?php


$row=$mypod->row();
$post_id = $row['ID'];
if(!function_exists('get_post_featured_image')){
  function get_post_featured_image($post_id,$size){
    $return_array = [];
    $image_id= get_post_thumbnail_id($post_id);
    $image =
    wp_get_attachment_image_src($image_id,$size);
    $image_url = $image[0];
    $image_alt = get_post_meta($image_id,
    '_wp_attachment_image_alt', true);
    $image_post = get_post($image_id);
    $image_caption = $image_post->post_excerpt;
    $image_description =
    $image_post->post_content;
    $return_array['id'] = $image_id;
    $return_array['url'] = $image_url;
    $return_array['alt'] = $image_alt;
    $return_array['caption'] = $image_caption;
    $return_array['description']=
    $image_description;
    return $return_array;
  }
}
$image_properties =
get_post_featured_image($post_id,'full');
 ?>
