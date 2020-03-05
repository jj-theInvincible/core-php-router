<?php
include_once('routes.php');
$request= $_SERVER['REQUEST_URI'];
 $arrayOf=explode('/',$request,4);

  $route=$arrayOf[3];
  $route=rtrim($route,'/');
  //echo $route;
  if(array_key_exists($route,$routeList)){
      include_once($routeList[$route]);
  }
  else{
    http_response_code(404);
    echo "Not found";
  }