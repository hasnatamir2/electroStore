<?php
class Cart extends CI_Controller{
    public $paypal_data = '';
    public $tax;
    public $shipping;
    public $total=0;
    public $grand_total;
    /* 
    *   Cart Index
    */
    public function index(){
        // Load view
        $data['main_content'] = 'cart';
        $this->load->view('main.php',$data);
    }
    /*
    *   Add cart
    */
    public function add(){
        // Item data
        $data = array(
            'id' => $this->input->post('item_number'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'name' => $this->input->post('title')
        );

        $this->cart->insert($data);

        redirect('');
    }
    /*
    *   Update Cart
    */
    public function update($in_cart = null){
        $data = $_POST;
        $this->cart->update($data);

        // Show Cart Page
        redirect('cart','refresh');
    }
}