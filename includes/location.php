<?php

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
$PublicIP = get_client_ip();
@$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json     = json_decode($json, true);

@$country  = $json['country'];
@$region   = $json['region'];
@$network     = $json['city'];
@$timezone     = $json['timezone'];

# -------------------------------------------------------------------


/*


$user_ip = getenv('REMOTE_ADDR');
#echo $user_ip;
# ------------------------------------------------

# Get user location data --------------------------

@$user_location = file_get_contents('http://ip-api.com/php/');

//foreach ($user_location as $data) {
//    echo $data . "<br>";
//}

#echo var_dump($user_location);

$user_location = unserialize($user_location);

#echo var_dump($user_location);

#echo $user_location['country'];
#echo "<br>";
#echo $user_location['as'];
#echo "<br>";
#echo $user_location['timezone'];

$country = $user_location['country'];
$network = $user_location['as'];
$timezone = $user_location['timezone'];

# NOTES ----------------------------------------------
/*

unserialize() takes a single serialized variable and converts it back into a PHP value (ARRAY).

file_get_contents() reads a file (text or json) and converts into a string.

*/
?>