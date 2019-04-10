<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon_m extends CI_Model {
    public $table = 'coupons';
    public function __construct() {
        parent::__construct();
        $this->load->database(); 
    }
    public function check_coupon($code) {
    	//var_dump($code);
	    $query = $this->db->get_where($this->table,array('code'=>$code));
	   // var_dump(isset($query->row()->id));die('zzz');
	    return isset($query->row()->id );

	}
}