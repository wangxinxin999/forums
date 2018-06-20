<?php


function C($key)
{
	global $config;

	return $config[$key];
}


function __autoload($className)
{

    include ('./'.$className.'.php');
}


function url($controller,$action,$param=[])
{
  // $host =$_SERVER['HOST'];
  $url =APP_HOST.'index.php?action='.$controller.'&action='.$action;

  if(!empty($param))
  {

  	foreach($parm as $key ->$val){

  		$url .= '&'.$key.'='.$val;
  	}
  }
   
   return $url;
  
}

function redirect($url)
{

}

function getImg($imgSrc)
{
	 return APP_HOST.'/public/img/'.$imgSrc;
}

 function getJs($jsSrc)
{
      return APP_HOST.'/public/js/'.$jsSrc;
}

 function Css($cssSrc)
{
	  return APP_HOST.'/public/css/'.$cssSrc;
}

