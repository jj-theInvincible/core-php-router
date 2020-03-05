<?php
include_once('./routes.php');
$request= $_SERVER['REQUEST_URI'];
 $arrayOf=explode('/',$request,2);
  $route=$arrayOf[1];
  
  $route=rtrim($route,'/');
   
  //echo $request;
  if(array_key_exists($route,$routeList)){
      include_once($routeList[$route]);
  }
  elseif($route==''){
    include_once('core_index.php');
  }
  else{
    http_response_code(404);
    echo "Not found";
  }