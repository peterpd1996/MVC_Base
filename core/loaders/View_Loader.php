<?php 
	class View_Loader{
		protected $content = [];
		function load($view,$data = []){
			if(!empty($data))
			extract($data);
			$view_path = APP_PATH."/views/".AREA."/{$view}.php";
			if (!file_exists($view_path)) {
				exit('File not found :' . $view_path);
			}
			ob_start();
			  require $view_path;
			  $this->content[] = ob_get_contents();
			ob_clean();
		}
		function show(){
			foreach ($this->content as $values) {
				echo $values;
			}
		}
	}

 ?>