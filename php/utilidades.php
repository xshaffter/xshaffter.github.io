<?php 
function redirect($url){
	header('Location: ' . $url, flase, 301);
	die();
}