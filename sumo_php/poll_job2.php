<?php
$ch = curl_init();

$jobLink = $_POST["link"];

curl_setopt($ch, CURLOPT_URL, $jobLink + "/messages");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_USERPWD, "suTQMcVt1XZHU0" . ":" . "stYh2uY2oojhV9HThno5UvSZrb5zhF1L1lU4OvMKJIKHth4isy3tOJLQAvx5JOf0");

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
print $result;

?>