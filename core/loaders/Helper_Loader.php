<?php 
	class Helper_Loader{
		function load($helper_name){
			$helper = ucfirst($helper_name)."_Helper";
			$herlerPath = BASE_PATH."/core/helpers/{$helper}.php";
			if (!file_exists($herlerPath)) {
				
				exit("FIle $helper not found");	
			}
			require $herlerPath;

		}
	}

 ?>