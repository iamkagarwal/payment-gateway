<?php
/*
Basic PHP script to handle Instamojo RAP webhook.
*/

$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];
if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'SALT' without <>
$mac_calculated = hash_hmac("sha1", implode("|", $data), "00c27972ca5c41e682aa0af55559df49");
if($mac_provided == $mac_calculated){
    if($data['status'] == "Credit"){
        // Payment was successful, mark it as successful in your Database.
        // You can acess payment_request_id, purpose etc here. 
    }
    else{
        // Payment was unsuccessful, mark it as failed in your Database.
        // You can acess payment_request_id, purpose etc Here.
    }
}
else{
    echo "MAC mismatch";
}
?>
