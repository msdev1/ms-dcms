<?php

namespace MS\Core;



class B {


	function __construct() {	
    
   	}

   	public static function r($path,$b=true){
		if($b){
   		require_once (app_path().DS."Http".DS."Controllers".DS."B".DS.$path.".php");
   		return true;
   		}
   		require_once (app_path().DS."Http".DS."Controllers".DS."F".DS.$path.".php");
   		return true;
   	}

}