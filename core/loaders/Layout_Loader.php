<?php 
	class Layout_Loader{
		protected $layout = 'default';
		function set($layout){
			$this->layout = $layout;
		}
		function load($data = []){
			// bien key cua data thanh bien co the su dung dcl
			extract($data);
			$layout_path = APP_PATH."/views/".AREA."/layout/{$this->layout}.php";
			if (!file_exists($layout_path)) {
				exit('Not found layout: '.$layout_path);
			}
			require $layout_path;

		}
	}

 ?>