<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tax_m extends CI_Model {
    public $table = 'tax';
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function get_tax() {
	    $query = $this->db->get_where($this->table,array());
	    //var_dump($query->first_row());die('zzzz');
	    return $query->first_row();

	}
}