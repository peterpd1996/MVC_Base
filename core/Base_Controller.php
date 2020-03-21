<?php 
	class Base_Controller extends Core_Controller{
		function renderLayout(){

			ob_start();
		    $this->view->show();
		    $content = ob_get_contents();
			ob_end_clean();
			$data = [
				'content' => $content
			];
			$this->layout->load($data);
		}
		function __destruct(){
			$this->renderLayout();
		}
	}

 ?>