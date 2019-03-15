<?php
@session_start();
date_default_timezone_set('Asia/Jakarta');
$today = gmdate(date("Y-m-d"));
require_once('Config/configDB.php');
#require_once('Config/baseURL.php');
if(!@$_SESSION['Administrator'] AND !@$_SESSION['Alumni']){
        require('View/Auth/login.php');
    }else{
    	require('Model/Other/fungsiTanggal.php');
    	require('Model/Session/sessionType.php');
        require('index3.php');
    }
?>