<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/vnd.apple.mpegurl");

$api_url = "https://maxplay-tv.fun/cl.php?id=f064e069-8861-43d5-ac79-828b029a50a1"; // API URL

$m3u8_url = file_get_contents($api_url);

if ($m3u8_url) {
    echo $m3u8_url;
} else {
    echo "Error fetching stream URL";
}
?>
