<?php get_header(); ?>
<div class="main col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <?php get_template_part("unkown"); ?>
        <?php get_template_part("indexnew"); ?>
        <?php get_template_part("articlelist"); ?>
</div>
<div class="sidebar col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <?php get_template_part("archivelist"); ?>
</div>
<?php get_footer(); ?>
