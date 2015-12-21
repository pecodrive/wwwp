<?php
$args = array(  'posts_per_page'   => 20, 
'offset'           => 0,
'category'         => '',
'orderby'          => 'rand',
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
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">おすすめ記事</h3>
    </div>
    <!-- adspace -->
        <script type="text/javascript">
            var nend_params = {"media":32041,"site":166393,"spot":488484,"type":1,"oriented":1};
        </script>
        <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
    <!-- adspace -->
    <div class="list panel-body">
        <?php if (have_posts()) : ?>    
        <?php while (have_posts()) : the_post(); ?>
        <div class="listpanel-side list-reco panel-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <a href="<?php the_permalink() ?>">
                <img class="imgBox-Side" src="<?php get_image();?>">
                <img class="reco-single" src="<?php echo get_template_directory_uri();?>/img/reco.png">
                <div class="disBox-Side">
                    <div class="recodata">
                        <?php 
                        $cat = get_the_category();
                        $countCat = count($cat);
                        if($countCat > 3){
                        $count = 3;
                        }else{
                        $count = $countCat;
                        }
                        for ($i=0; $i < $count; $i++) {
                           echo "<div class=\"reco-cate\">{$cat[$i]->name}</div>"; 
                        }
                        ?>
                    </div>
                    <div>
                        <?php the_title(); ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
    <?php endif; wp_reset_query(); ?>
    </div>
</div>
