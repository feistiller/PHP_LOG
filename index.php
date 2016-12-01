<?php
    include_once('myTools/M_Log.class.php');
    include_once ('myTools/GetHostInfo.class.php');

    $GetIP=new \Lib\myTools\GetHostInfo();
    $ip=$GetIP->getIP();
    $log=new \Lib\myTools\M_Log();
    $log->baseLog("用户访问的ip:".$ip);
