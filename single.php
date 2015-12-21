<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>    
<div class="main col-xs-12 col-sm-7 col-md-8 col-lg-8">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1><?php the_title();?></h1>
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo get_the_date("Y/m/d H:i:s"); ?>
            </div>
            <ol class="breadcrumb breadcrumb-nomargin">
                <li><a href="<?php echo site_url();?>">Home</a></li>
                <?php 
                    $cat = get_the_category();
                    $catId = $cat[0]->cat_ID;
                    $catName = $cat[0]->cat_name; 
                    $catUrl = get_category_link($catId);
                ?>
                <li><a href="<?php echo $catUrl;?>"><?php echo $catName; ?></a></li>
            </ol>
        </div>
    </div>
        <!-- adspace  -->
            <div class="adspace text-center hidden-xs col-sm-12 hidden-md hidden-lg">
                    <script type="text/javascript">
                    var nend_params = {"media":32041,"site":166393,"spot":488497,"type":1,"oriented":1};
                    </script>
                    <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
            <div class="adspace text-center hidden-xs hidden-sm col-md-6 col-lg-6">
                    <script type="text/javascript">
                    var nend_params = {"media":32041,"site":166393,"spot":488495,"type":1,"oriented":1};
                    </script>
                    <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
            <div class="adspace text-center hidden-xs hidden-sm col-md-6 col-lg-6">
                    <script type="text/javascript">
                    var nend_params = {"media":32041,"site":166393,"spot":488493,"type":1,"oriented":1};
                    </script>
                    <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
            <div class="adspace text-center col-xs-12 hidden-sm hidden-md hidden-lg">
                <script type="text/javascript">
                    var nend_params = {"media":32041,"site":166393,"spot":488491,"type":1,"oriented":1};
                </script>
                <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
        <!-- adspace  -->
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="article panel-body">
                <div class="col-xs-12">
                    <?php the_content(); ?>
                </div>
                    <!-- adspace  -->
                        <div class="adspace text-center hidden-xs col-sm-12 hidden-md hidden-lg">
                            <script type="text/javascript">
                            var nend_params = {"media":32041,"site":166393,"spot":488488,"type":1,"oriented":1};
                            </script>
                            <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
                        </div>
                        <div class="adspace text-center hidden-xs hidden-sm col-md-6 col-lg-6">
                            <script type="text/javascript">
                            var nend_params = {"media":32041,"site":166393,"spot":488487,"type":1,"oriented":1};
                            </script>
                            <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
                        </div>
                        <div class="adspace text-center hidden-xs hidden-sm col-md-6 col-lg-6">
                            <script type="text/javascript">
                            var nend_params = {"media":32041,"site":166393,"spot":488486,"type":1,"oriented":1};
                            </script>
                            <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
                        </div>
                        <div class="adspace text-center col-xs-12 hidden-sm hidden-md hidden-lg">
                            <script type="text/javascript">
                            var nend_params = {"media":32041,"site":166393,"spot":488395,"type":1,"oriented":1};
                            </script>
                            <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
                        </div>

                    <!-- adspace  -->
                <div class="col-xs-12">
                    <?php get_template_part("categorylist"); ?>
                </div>
                <div class="col-xs-12 seme">
                    <?php get_template_part("semecategory");?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12">
        <?php get_template_part("rss"); ?>
    </div>
</div>
<?php endif; ?>
<div class="sidebar col-xs-12 col-sm-5 col-md-4 col-lg-4">
    <div class="col-xs-12">
        <?php get_template_part("singlenew"); ?>
    </div>
        <!-- adspace  -->
            <div class="adspace text-center hidden-xs hidden-sm col-md-12 col-lg-12">
                <script type="text/javascript">
                var nend_params = {"media":32041,"site":166393,"spot":488501,"type":1,"oriented":1};
                </script>
                <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
            <div class="adspace text-center col-xs-12 col-sm-12 hidden-md hidden-lg">
                <script type="text/javascript">
                var nend_params = {"media":32041,"site":166393,"spot":488501,"type":1,"oriented":1};
                </script>
                <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
        <!-- adspace  -->
    <div class="col-xs-12">
        <?php get_template_part("singlearticllist"); ?>
    </div>
        <!-- adspace  -->
            <div class="adspace text-center hidden-xs hidden-sm col-md-12 col-lg-12">
                <script type="text/javascript">
                var nend_params = {"media":32041,"site":166393,"spot":488502,"type":1,"oriented":1};
                </script>
                <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
            <div class="adspace text-center col-xs-12 col-sm-12 hidden-md hidden-lg">
                <script type="text/javascript">
                var nend_params = {"media":32041,"site":166393,"spot":488502,"type":1,"oriented":1};
                </script>
                <script type="text/javascript" src="https://js1.nend.net/js/nendAdLoader.js"></script>
            </div>
        <!-- adspace  -->
    <div class="col-xs-12">
        <?php get_template_part("archivelist"); ?>
    </div>
    <div class="col-xs-12">
        <?php get_template_part("linker"); ?>
    </div>
</div>
<?php get_footer(); ?>
