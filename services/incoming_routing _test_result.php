<?php
date_default_timezone_set("Asia/Kuwait");
$sender="+251912655466";
$sms="ok";
function httpRequest($url)
{
    $pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";
    preg_match($pattern, $url, $args);
    $in = "";
    $fp = fsockopen("$args[1]", 80, $errno, $errstr, 30);
    if (!$fp) {
        return ("$errstr ($errno)");
    } else {
        $out = "GET /$args[3] HTTP/1.1\r\n";
        $out .= "Host: $args[1]:$args[2]\r\n";
        $out .= "User-agent: Ozeki PHP client\r\n";
        $out .= "Accept: */*\r\n";
        $out .= "Connection: Close\r\n\r\n";
        fwrite($fp, $out);
        while (!feof($fp)) {
            $in .= fgets($fp, 128);
        }
    }
    fclose($fp);
    return ($in);
}

$baseUrl = "http://127.0.0.1/vas/services/Subscribing_8480_20161011.php";
$queryString = "?sender=$sender&sms=$sms";
$url = $baseUrl . $queryString;
print $sender;
//httpRequest($url);
//header('Location:http://127.0.0.1/vas/services/Subscribing_8480_20161011.php?sender=$sender&sms=$sms');
?>