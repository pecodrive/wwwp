<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">全記事リスト</h3>
    </div>
    <div class="list allarticle panel-body">
            <?php
                $args = array(  'posts_per_page'   => 100, 
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => array('post'),
                    'post_status'      => 'publish',
                    'suppress_filters' => true);   
                $wp_query = new WP_Query($args);
            ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="listpanel list-categoryarchive panel-body col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="<?php the_permalink() ?>">
                <img class="imgBox" src="<?php get_image();?>">
                <div class="disBox">
                    <div class="listcat">
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
    <div class="moreload">
    </div>
    <div class="loadlist text-center col-xs-12">
        <span class="aru">さらに読み込む</span>
        <span class="nai">もう記事はありません</span>
    </div>
    </div>
</div>
