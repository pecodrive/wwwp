<?php
function get_image() {
    global $post, $posts;
    $category = get_the_category();
    $countCategory = count($category);
    $categoryid = mt_rand(0, $countCategory - 1);
    $filename = category_description($category[$categoryid]->cat_ID);
    $filename = preg_replace("/<p>/","",$filename);
    $filename = preg_replace("/<\/p>/","",$filename);
    $filename = "tumb150_".$filename;

    $first_img = '';
    $output = preg_match("/<img src=\"(http:\/\/[_a-z0-9:\/\.-]+\/([_a-z-0-9]+\.[jpegngifbmJPEGIFNGBM]{3,4}))\">/u", $post->post_content, $matches);
    if(empty($matches[1])){
        $first_img = get_template_directory_uri()."/img/{$filename}";
    }else{
        $first_img = "http://omoro.top/wp-content/uploads/tumb150_{$matches[2]}";
        // $first_img = $matches[1];
    }
    echo $first_img;
}

function get_image_noecho($id) {
    global $post, $posts;
    $category = get_the_category($id);
    $countCategory = count($category);
    $categoryid = mt_rand(0, $countCategory - 1);
    $filename = category_description($category[$categoryid]->cat_ID);
    $filename = preg_replace("/<p>/","",$filename);
    $filename = preg_replace("/<\/p>/","",$filename);
    $filename = "tumb150_".$filename;

    $first_img = '';
    $output = preg_match("/<img src=\"(http:\/\/[_a-z0-9:\/\.-]+\/([_a-z-0-9]+\.[jpegngifbmJPEGIFNGBM]{3,4}))\">/u", $post->post_content, $matches);
    if(empty($matches[1])){
        $first_img = get_template_directory_uri()."/img/{$filename}";
    }else{
        $first_img = "http://omoro.top/wp-content/uploads/tumb150_{$matches[2]}";
        // $first_img = $matches[1];
    }
    return $first_img;
}

function imobileAd($aid, $said, $width, $height, $class){
$url = get_template_directory_uri();
$adscript = <<< AAA
        <script type="text/javascript">
            imobile_pid = "{$aid}"; 
            imobile_asid = "{$said}"; 
            imobile_width = {$width}; 
            imobile_height = {$height};
        </script>
<img src="{$url}/img/dammyad.png" width={$width} height={$height}>
AAA;
return $adscript;
}

function rssPerser4i($xml, $sitetitle){
    libxml_use_internal_errors(true);
    $xmlObj = simplexml_load_file($xml); 
    $tagArray = [];
    foreach ($xmlObj->item as $value) {
$tagArray[] = <<< AAA
<div class="listpanel-rss list-rss panel-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a href="{$value->link}">
        <div class="disBox-rss">
            <div class="rsstitle">{$sitetitle}</div>
            <div class="rsslink">{$value->title}</div>  
        </div>
    </a>
</div>
AAA;
    }
    return $tagArray;
}
function rssPerser4c($xml,$sitetitle){
    libxml_use_internal_errors(true);
    $xmlObj = simplexml_load_file($xml); 
    $tagArray = [];
    foreach ($xmlObj->channel->item as $value) {
$tagArray[] = <<< AAA
<div class="listpanel-rss list-rss panel-body col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <a href="{$value->link}">
        <div class="disBox-rss">
            <div class="rsstitle">{$sitetitle}</div>
            <div class="rsslink">{$value->title}</div>  
        </div>
    </a>
</div>
AAA;
    }
    return $tagArray;
}


function rssPrint(){
    $ads = [
        "<script type=\"text/javascript\">
            var nend_params = {\"media\":32041,\"site\":166393,\"spot\":494567,\"type\":10,\"oriented\":1,\"display_order\":1};
        </script>",
        "<script type=\"text/javascript\">
            var nend_params = {\"media\":32041,\"site\":166393,\"spot\":494567,\"type\":10,\"oriented\":1,\"display_order\":2};
        </script>",
        "<script type=\"text/javascript\">
            var nend_params = {\"media\":32041,\"site\":166393,\"spot\":494567,\"type\":10,\"oriented\":1,\"display_order\":3};
        </script>",
        "<script type=\"text/javascript\">
            var nend_params = {\"media\":32041,\"site\":166393,\"spot\":494567,\"type\":10,\"oriented\":1,\"display_order\":4};
        </script>",
        "<script type=\"text/javascript\">
            var nend_params = {\"media\":32041,\"site\":166393,\"spot\":494567,\"type\":10,\"oriented\":1,\"display_order\":5};
        </script>"];

    $ch2c         = rssPerser4i("http://2ch-c.net/?xml_all","しぃアンテナ");
    $ch2matomenet = rssPerser4c("http://2ch-matome.net/feeds/rss/","2chまとめヘッドライン");
    $ch2navi      = rssPerser4c("http://2chnavi.net/headline/?rss=1","2chnavi");
    $antenash     = rssPerser4i("http://www.antennash.com/index.rdf","アンテナシェア");
    $ch2matomecom = rssPerser4c("http://2ch-matome.com/rss/main.xml","VIPあんてな");
    $newmofu      = rssPerser4c("http://newmofu.doorblog.jp/rss/noadult.xml","にゅーもふ");
    $wani         = rssPerser4c("http://waniantenna.com/rss/0.xml","ワニアンテナ");
    $giko         = rssPerser4c("http://gikotena.net/public/data/new_all.rss","ギコあんてな");
    $negi         = rssPerser4i("http://negi.warotamaker.com/rss/index.rdf","ネギアンテナ");
    $rssLinkArray = array_merge
        (
            $ch2c,
            $ch2matomenet,
            $ch2navi,
            $antenash,
            $ch2matomecom,
            $newmofu,
            $wani,
            $giko,
            $negi
        );
    shuffle($rssLinkArray);
    // $rssLinkArray = array_merge($rssLinkArray, $ads);
    foreach ($rssLinkArray as $value) {
       echo $value; 
    }
}

function articleAdEcho(){
$url = get_template_directory_uri();
$adscript = <<< AAA
<div class="adspace text-center col-xs-12 hidden-sm hidden-md hidden-lg">
    <script type="text/javascript">
        imobile_pid = "40000"; 
        imobile_asid = "68000"; 
        imobile_width = 250; 
        imobile_height = 250;
    </script>
    <img src="{$url}/img/dammyad.png" width=250 height=250>
</div>
<div class="adspace text-center hidden-xs col-sm-12 col-md-12 col-lg-6">
    <script type="text/javascript">
        imobile_pid = "40000"; 
        imobile_asid = "68000"; 
        imobile_width = 336; 
        imobile_height = 280;
    </script>
    <img src="{$url}/img/dammyad.png" width=336 height=280>
</div>
<div class="adspace text-center hidden-xs hidden-sm hidden-md col-lg-6">
    <script type="text/javascript">
        imobile_pid = "40000"; 
        imobile_asid = "68000"; 
        imobile_width = 336; 
        imobile_height = 280;
    </script>
    <img src="{$url}/img/dammyad.png" width=336 height=280>
</div>
AAA;
return $adscript;
}
add_shortcode("adadd", "articleAdEcho");

function access(){
    date_default_timezone_set('Asia/Tokyo');
    global $wpdb;
    $wpdb->query( $wpdb->prepare( 
        "
        INSERT INTO access 
        (HTTP_REFERER, HTTP_USER_AGENT, QUERY_STRING, REMOTE_ADDR, REQUEST_URI, DATETIMES)
        VALUES ( %s, %s, %s, %s, %s, %s)
", 
    array(
        $_SERVER["HTTP_REFERER"], 
        $_SERVER["HTTP_USER_AGENT"], 
        $_SERVER["QUERY_STRING"], 
        $_SERVER["REMOTE_ADDR"], 
        $_SERVER["REQUEST_URI"], 
        date("Y-m-d H:i:s")
    ) 
));
}
