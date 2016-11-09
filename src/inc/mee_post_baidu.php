<?php
/**
 * Created by PhpStorm.
 * User: feizheng
 * Date: 7/28/16
 * Time: 11:44
 * 用户名：xxx
 * 密码：xxx
 */
function mee_post_baidu($post_id, $post)
{
    /*
    *百度实时推送
    *来源：http://www.wpmee.com/mee-post-baidu/
    */
    $PostUrl = get_permalink($post_id);
    $urls = array($PostUrl);
    $api = 'http://data.zz.baidu.com/urls?site=www.demo.cc&token=xxxxx';
    $ch = curl_init();//主机需要支持curl
    $options = array(
        CURLOPT_URL => $api,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => implode("\n", $urls),
        CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
    );
    curl_setopt_array($ch, $options);
    curl_exec($ch);
}

add_action('publish_post', 'mee_post_baidu');
