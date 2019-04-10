<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_m extends CI_Model {
    public $table = 'categories';
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function get_cats() {
    	$limit = 20;
    	$offset = 0;
	    $query = $this->db->get_where($this->table,array('id>' => 1), $limit, $offset);
	    //var_dump($query->result());die('zzzz');
	    return $query->result();

	}
}