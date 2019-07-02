<?php 
class Product_model extends CI_Model {
    /*
    *
    *   Get all Products
    *
    */
    public function get_products(){
        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        return $query->result();
    }
    /*
    *   Get single product
    */
    public function get_product_details($id){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('Id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    /*
    *   Get categories
    */
    public function get_categories(){
        $this->db->select('*');
        $this->db->from('category');
        $query = $this->db->get();
        return $query->result();
    }
    /*
    *   Get most popular products
    */
    public function get_popular(){
        $this->db->select('P.*, COUNT(O.ID) as total');
        $this->db->from('orders as O');
        $this->db->join('product as P','O.ID = P.Id', 'INNER');
        $this->db->group_BY('O.ID');
        $this->db->order_by('total','desc');
        $query = $this->db->get();
        return $query->result();
    }
    
}