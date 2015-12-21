<?php
$args = array(  'posts_per_page'   => 5, 
'orderby'          => 'date',
'order'            => 'DESC',
'post_type'        => array('post'),
'post_status'      => 'publish',
'suppress_filters' => true);   
$wp_query = new WP_Query($args);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">超最新記事</h3>
    </div>
    <!-- adspace -->
        <script type="text/javascript">
            var nend_params = {"media":32041,"site":166393,"spot":488485,"type":1,"oriented":1};
        </script>
        <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
    <!-- adspace -->
    <div class="list panel-body">
        <?php if (have_posts()) : ?>    
        <?php while (have_posts()) : the_post(); ?>
        <div class="listpanel list-cyounew panel-body col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="<?php the_permalink() ?>">
                <img class="imgBox" src="<?php get_image();?>">
                <img class="new" src="<?php echo get_template_directory_uri();?>/img/cnew.png">
                <div class="disBox"><div class="cyounewdate"><?php echo get_the_date("Y/m/d h:m:s"); ?></div><div><?php the_title(); ?></div></div>
            </a>
        </div>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </div>
</div>
