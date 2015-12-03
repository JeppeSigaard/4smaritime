<div class="article-list">
<?php 
$query_vars = array(
    'post-type' => 'post',
); 
    
if (is_home() || is_front_page()){

    $query_vars['posts_per_page'] = '3';

}
$list = new WP_Query($query_vars);

while($list->have_posts()) :  $list->the_post();

get_template_part('template-parts/common/list','article');


endwhile;
wp_reset_postdata();

?>
<div class="article-list">