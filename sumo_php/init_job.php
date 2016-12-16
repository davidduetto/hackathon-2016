<?php
header('Content-Type: application/json');
$ch = curl_init();

$post = json_encode($_POST);

curl_setopt($ch, CURLOPT_URL, "https://api.sumologic.com/api/v1/search/jobs");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERPWD, "suTQMcVt1XZHU0" . ":" . "stYh2uY2oojhV9HThno5UvSZrb5zhF1L1lU4OvMKJIKHth4isy3tOJLQAvx5JOf0");

$headers = array();
$headers[] = "Content-Type: application/json";
$headers[] = "Accept: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
print $result;

?>