<?php
//反映されてる？
require_once(dirname(dirname(dirname(dirname(__file__)))) . '/wp-load.php');
$request  = json_decode(file_get_contents( "php://input" ) , true);
if(!wp_verify_nonce($request["nonce"])){
    die();
}
// var_dump($request["aa"]);
$per = 100;
$offset = $request["aa"] * $per;
$full = $wpdb->get_var("SELECT count(*) FROM {$wpdb->posts} WHERE post_status = 'publish' AND post_type = 'post'");
$nocoli = $full - ($per + $offset);
// var_dump($offset);
// var_dump($nocoli);
$flag;
if($nocoli <= 0){
    $flag = "mounai";
}else{
    $flag = "aru";
}
// var_dump($full);
$html = "";
$args = array(  'posts_per_page'   => $per, 
                'offset'           => (int)$offset,
                'orderby'          => 'date',
                'order'            => 'DESC',
                'post_type'        => array('post'),
                'post_status'      => 'publish',
                'suppress_filters' => true
            );   
$wp_query = new WP_Query($args);
$cq = count($wp_query->posts);
for ($i=0; $i < $cq; $i++) {
        $catHtml = "";
        $title = $wp_query->posts[$i]->post_title;
        $category = get_the_category($wp_query->posts[$i]->ID);
        $count = count($category);
        if($count > 3){
            $count = 3;
        }
        for ($j=0; $j < $count; $j++) {
            $catHtml .= "<div class=\"reco-cate\">{$category[$j]->name}</div>";
        }
        $date = $wp_query->posts[$i]->post_date;
        // var_dump($wp_query->posts[$i]->post_content);
        $img = get_image_noecho($wp_query->posts[$i]->ID, $wp_query->posts[$i]->post_content);
        $permalink = get_permalink($wp_query->posts[$i]->ID);

$html .= <<<AAA
<div class="listpanel list-categoryarchive panel-body col-xs-12 col-sm-6 col-md-6 col-lg-4">
    <a href="{$permalink}">
        <img class="imgBox" src="{$img}">
        <div class="disBox">
            <div class="listcat">
                {$catHtml}
            </div>
            <div>
                {$title}
            </div>
        </div>
    </a>
</div>
AAA;
}
wp_reset_query();
$data = ["html"=>$html, "flag"=>$flag, "nocoli"=>$nocoli];
$json = json_encode($data);
// var_dump($json);
header( "Conon_encodeent-Type: text/html; X-Content-Type-Options: nosniff; charset=utf-8" );
header( "Content-Type: aplication/json; X-Content-Type-Options: nosniff; charset=utf-8" );
echo $json;
die();
