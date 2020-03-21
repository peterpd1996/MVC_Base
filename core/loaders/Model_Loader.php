<?php 
	class Model_Loader{
		function load($model_name){
			// Ten class voi ten file phai giong nhau
			$model = ucfirst($model_name)."_Model";
			$model_path = APP_PATH."/models/".AREA."/{$model}.php";
			if (!file_exists($model_path)) {
				exit('Not found the model :'.$model_path);	
			}
			require $model_path;
				// minh khoi tao class ten la model_name de minh tro den cac phuong thuc cua no
			$this->$model_name = new $model;
		}
	}

 ?>