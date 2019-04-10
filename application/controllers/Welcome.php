<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model(array('Category_m','Product_m', 'Tax_m'));
		//$this->load->model('Product_m');
		$cats = $this->Category_m->get_cats();
		$products = $this->Product_m->get_products();
		$tax = $this->Tax_m->get_tax();
		//var_dump($cats);die('zzz');
		$data['cats'] = $cats;
		$data['products'] = $products;
		$data['tax'] = $tax;
		$this->load->helper('url');
		//$this->load->view('header');
		$this->load->view('home',$data);
	}
}
