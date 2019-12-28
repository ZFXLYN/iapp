<?php

//ip是否来自共享互联网
if (!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//ip是否来自代理
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//ip是否来自远程地址
else
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;
?>