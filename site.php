<?php get_header(); ?>
<?php if (have_posts()) : the_post();?>
<div id="main">
        <?php the_title();?>
            <?php the_date();?>
        <?php get_template_part("new"); ?>
        <?php the_content(); ?>
            <?php get_template_part("categorylist"); ?>
            <?php get_template_part("semecategory");?>
    <?php endif; wp_reset_query();?>
        <?php get_template_part("articlelist"); ?>
        <?php get_template_part("archivelist"); ?>
<?php get_footer(); ?>
