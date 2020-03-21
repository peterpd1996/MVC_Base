<?php 
	class Core_Controller{
		protected $layout;
		protected $model;
		protected $view;
		protected $helper;
		//ở thằng controller ta sẽ gán 3 giá trị cho lần luot 3 class 
		function __construct(){
			// goi thang khoi tao layout_loader
			require BASE_PATH."/core/loaders/Layout_Loader.php";
			$this->layout = new Layout_Loader();
			// view loader
			require BASE_PATH."/core/loaders/View_Loader.php";
			$this->view = new View_Loader();
			// model loader
			require BASE_PATH."/core/loaders/Model_Loader.php";
			$this->model = new Model_Loader();
			// helper loader
			require BASE_PATH."/core/loaders/Helper_Loader.php";
			$this->helper = new Helper_Loader();

			$this->autoload_model();
		}
		function autoload_model(){
			$autoload_config = require BASE_PATH."/config/autoload.php";
			if (count($autoload_config['model']) <= 0) {
				return false;
			}
				foreach ($autoload_config as $autoload_name => $config) {
					foreach ($config as $name) {
						$this->$autoload_name->load($name);
						//this->model->load('product'); giống thế 
					}
				}

		}
	}

 ?>