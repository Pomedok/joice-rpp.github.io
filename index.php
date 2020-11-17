<?php
//define('ST_T', microtime());//начало
session_start();
header("Content-Type:text/html;charset=UTF-8");
require_once("engine/config/conf.php");
require_once("engine/classes/head.php"); 
//--------INDEX-------GET-----
if(!$_GET['main'] && !$_GET['admin'] && !$_GET['ucp']) {
$main = "index";}
if($_GET['main']) {
        $main = trim(strip_tags($_GET['main']));
}
if(!empty($main))
{

        if(file_exists("engine/classes/main/".$main.".php")) {
                include("engine/classes/main/".$main.".php");
                if(class_exists($main)) {
                
                        $obj = new $main;
                        $obj->get_body();
                }
                else {
                        exit();
                }
        }
        else {
                exit();
        }
} 
//--------ADMIN-------GET-----
if($_GET['admin']) {
	$admin = trim(strip_tags($_GET['admin']));
}
if(!empty($admin))
{

        if(file_exists("engine/classes/admin/".$admin.".php")) {
        	include("engine/classes/admin/".$admin.".php");
        	if(class_exists($admin)) {
        	
        		$obj = new $admin;
        		$obj->get_body();
        	}
        	else {
        		exit();
        	}
        }
        else {
        	exit();
        }
} 
///////////////////////////
//--------UCP-------GET-----
if($_GET['ucp']) {
	$ucp = trim(strip_tags($_GET['ucp']));
}
else {
	//$ucp = "login";
} 
if(!empty($ucp))
{

        if(file_exists("engine/classes/ucp/".$ucp.".php")) {
        	include("engine/classes/ucp/".$ucp.".php");
        	if(class_exists($ucp)) {
        	
        		$obj = new $ucp;
        		$obj->get_body();
        	}
        	else {
        		exit();
        	}
        }
        else {
        	exit();
        }
}       
?>
