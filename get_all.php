<?php
$host= $_SERVER["HTTP_HOST"];
$url = $_SERVER["REQUEST_URI"];
$url = "http://" . $host . $url;
$url = str_replace( $host , "ip-remota/", $url);
print_r(file_get_contents($url));