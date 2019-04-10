<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_m extends CI_Model {
    public $table = 'orders';
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function insert($data){
    	$this->db->insert($this->table, $data);
    }
}