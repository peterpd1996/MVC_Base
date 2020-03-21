<?php 
class Home_Controller extends Base_Controller {
	
		//minh co thang autoload model roi nen k can load model o day nua
	function __construct(){
		parent::__construct();
		$this->model->load('product');
		$this->helper->load('url');
	}
	
	function index(){
		
		//  mac dinh thi khi minh load view la da co phan layout mac dinh roi
		
			$product = $this->model->product->get_All();
			
			$this->view->load('product/product',['products' => $product]);

		
		// khi minh load roi thi no se co class la category = new Category_Model() vi minh da khoi tao o model_loader roi
		// ma thang Category_Model() lai ke thua thang Base_Model nen minh co the thuc thi cac ham trong do nen class minh vua tao dc su dung binh thuong
			// echo " <pre>";
			// var_dump($this->model->category->get_all('category'));
			// echo "</pre>";
	}
	function show(){
		  $id = $_GET['id'];
		   $detail_product = $this->model->product->fetch_id($id);
		$this->view->load('product/detail_product',['product' => $detail_product]);
		
	}
}

 ?>