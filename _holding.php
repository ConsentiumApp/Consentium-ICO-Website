<?php
    $domain = $_SERVER['HTTP_HOST'];
    if(empty($domain)){
	$domain = $_SERVER['SERVER_NAME'];
    }
    $url = "http://parked.hostek.com?domain=$domain";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,$url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    $result =  curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>