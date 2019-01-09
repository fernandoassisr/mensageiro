<?php


class Helper 
{
	
	function __construct()
	{
	
	}

	function Redirect($url, $permanent = false)
	{
    	header('Location: ' . $url, true, $permanent ? 301 : 302);
    	exit();
	}
}
new Helper();