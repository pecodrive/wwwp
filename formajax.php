<?php
require_once(dirname(dirname(dirname(dirname(__file__))))."/wp-load.php");
$request = json_decode( file_get_contents( "php://input" ) , true );
if(wp_verify_nonce($request["nonce"] === false)){
    die();
}
$time = current_time('mysql');
$body = $request["file"]."<br>".$request["url"]."<br>".$request["note"]."<br>";
$data = array(
    'comment_post_ID' => 2,
    'comment_author_email' => $request["mail"],
    'comment_content' => $body, 
    'comment_author_IP' => $request["ip"],
    'comment_agent' => $request["userag"],
    'comment_date' => $time,
);

wp_insert_comment($data);
