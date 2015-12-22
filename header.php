<!DOCTYPE html>
<?php// access(); ?>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body <?php body_class(); ?>>
<?php if ( !is_user_logged_in() ){
echo <<<aaa
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36078315-8', 'auto');
  ga('send', 'pageview');
</script>
aaa;
}
?>
<?php
    $ip = $_SERVER["REMOTE_ADDR"];
    $nonce = wp_create_nonce();
    echo "<script>var globals = {ip:\"{$ip}\",nonce:\"{$nonce}\",aa:1, flag:\"aru\"}</script>";
?>
<div class="container-fluid">
    <header class="center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="headertop col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div>
                <a href="<?php echo site_url(); ?>">
                    <img class="img-responsive au" src="<?php echo get_template_directory_uri();?>/img/topsmalls.png">
                </a>
                <nav class="topnav col-xs-12 navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li class="dropdown text-center">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                             role="button" aria-haspopup="true" aria-expanded="false">menu<span class="caret"></span></a>
                             <ul class="dropdown-menu">
                            <li><a href="<?php bloginfo("url") ?>">ホーム</a></li>
                            <li><a href="<?php echo bloginfo("url") . "/?page_id=1463" ?>">全記事</a></li>
                                <!-- <li><a href="#">カテゴリ</a></li> -->
                                <!-- <li role="separator" class="divider"></li> -->
                                <!-- <li><a href="#">記事ランキング</a></li> -->
                                <!-- <li><a href="#">オススメ記事</a></li> -->
                            </ul>
                        </li>
                    </ul>
                    <form id="inner_srach" method="get" action="<?php bloginfo('url') ?>" />
                        <input type="text" class="form-control" name="s" placeholder="検索したいキーワードを入力(enter)">
                    </form>
                </nav>
            </div>
        </div>
        <div class="hidden-xs col-sm-9 col-md-9 col-lg-9">
            <div class="headerpanel panel">
                <div class="panel-body">
            <?php
                $args = array(  'posts_per_page'   => 3, 
                    'orderby'          => 'date',
                    'order'            => 'DESC',
                    'post_type'        => array('post'),
                    'post_status'      => 'publish',
                    'suppress_filters' => true);   
                $wp_query = new WP_Query($args);
            ?>
            <?php if (have_posts()) : ?>    
            <?php while (have_posts()) : the_post(); ?>
            <div class="listpanel-head list-cyounew panel-body col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <a href="<?php the_permalink() ?>">
                    <img class="imgBox-head" src="<?php get_image();?>">
                    <img class="new" src="<?php echo get_template_directory_uri();?>/img/cnew.png">
                    <div class="disBox-head">
                        <div class="cyounewdate"><?php echo get_the_date("Y/m/d h:m:s"); ?></div>
                        <div><?php the_title(); ?></div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
 
    </header>
