<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html> 
<?php
class Products extends CI_Controller{
	public function index()
	{
		// get all products
		$data['products'] = $this->Product_model->get_products();
		// Load View
		$data['main_content']='products';
		$this->load->view('main',$data);
	}

	public function details($id){
		// Get Product details
		$data['product'] = $this->Product_model->get_product_details($id);
		// Load View
		$data['main_content']='details';
		$this->load->view('main',$data);
	}
}
?>