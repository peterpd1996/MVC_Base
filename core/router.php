<?php 
	function load_app(){
		$module = !empty($_GET['module']) ? $_GET['module'] : 'home';
		$action = !empty($_GET['action']) ? $_GET['action'] : 'index';
		$area   = !empty($_GET['area']) ? $_GET['area'] : 'fontend';
		$controller = ucfirst($module).'_Controller'; // viet hoa chua cai dau vd: Home_Controller 
		if ($area == 'fontend') {
			define('AREA','fontend');
		}else{
			define('AREA','backend');
		}
		$controller_path = APP_PATH ."/controllers/".AREA."/{$controller}.php";
		// kiem tra file co ton tai k
		if (!file_exists($controller_path)) {
			exit(' File not found '.$controller_path);
		}
		// - đầu tiên là load app ta sẽ require các core cần thiết 
		
		require BASE_PATH.'/core/Core_Controller.php';
		require BASE_PATH.'/core/Base_Controller.php';

		require BASE_PATH.'/core/Core_Model.php';
		require BASE_PATH.'/core/Base_Model.php';
		// require các model và controller để tí sử dụng những thằng trong controller
		// mình chủ cần khởi tạo controller với phương thức ở đây 
		
		require $controller_path;
		// kiem tra co ton tai class do hay khong
		if (!class_exists($controller)) {
			exit('Class not found '.$controllers );
		}
		$object = new $controller;
		// kiem tra xem co ton tai method trong class $objec la gi 
		if (!method_exists($object,$action)) {
			exit('Method not found: '.$action);
		}
		// goi toi function tuong ung 
		$object->$action();
		


	}

 ?>