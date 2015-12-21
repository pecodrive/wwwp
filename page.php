<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>    
<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><?php the_title();?></h1>
        </div>
    </div>
    <div class="panel panel-default site">
        <div class="panel-body">
            <?php the_content(); ?>
            <?php get_template_part("form"); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    <?php get_template_part("singlenew"); ?>
    <?php get_template_part("singlearticllist"); ?>
    <?php get_template_part("archivelist"); ?>
</div>
<?php get_footer(); ?>
