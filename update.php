<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jsonData = json_decode(file_get_contents("php://input"), true);
    $host = $_SERVER["HTTP_HOST"];
    $url = $_SERVER["REQUEST_URI"];
    $url = "http://" . $host . $url;
    $url = str_replace($host, "ip-remota/", $url);
    $ch = curl_init($url);    
    $jsonDataEncoded = json_encode($jsonData);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
}