<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_m extends CI_Model {
    public $table = 'products';
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function get_products() {
    	$limit = 20;
    	$offset = 0;
	    $query = $this->db->get_where($this->table,array(), $limit, $offset);
	    return $query->result();

	}
}