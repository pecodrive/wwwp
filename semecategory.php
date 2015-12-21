<?php
$category = get_the_category();
foreach ($category as $item) {
    $categoryarray[] = $item->term_id;
}
$args = array(  'posts_per_page'   => 8, 
'offset'           => 0,
'category'         => $categoryarray,
'orderby'          => '',
'order'            => 'DESC',
'include'          => '',
'exclude'          => '',
'meta_key'         => '',
'meta_value'       => '',
'post_type'        => array('post'),
'post_mime_type'   => '',
'post_parent'      => '',
'post_status'      => 'publish',
'suppress_filters' => true);   
$wp_query = new WP_Query($args);
?>
    <div class="panel-body text-center">おすすめ＆同じカテゴリーの記事</div>
    <div class="seme list">
        <?php if (have_posts()) : ?>    
        <?php while (have_posts()) : the_post(); ?>
        <div class="listpanel list-seme panel-body col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="<?php the_permalink() ?>">
                <img class="imgBox" src="<?php get_image();?>">
                <img class="scate" src="<?php echo get_template_directory_uri();?>/img/scate.png">
                <div class="disBox"><?php the_title(); ?></div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
    </div>
