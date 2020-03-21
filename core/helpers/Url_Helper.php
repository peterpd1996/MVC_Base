<?php 
	function base_url($url){
		$url = explode('/',$url);
		// http://127.0.0.1/MVC_BASE/index.php?area=fontend&module=home&action=index

		$module = $url[0];
		$action = $url[1];
		return BASE_URL."?module=$module&action=$action";
		
	}

 ?>