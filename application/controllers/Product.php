<?php
class Product extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->model( array('Product_m','Tax_m','Coupon_m','Order_m'));
	}
	function index(){
		$this->load->model( array('Product_m','Tax_m'));
		$data['data'] = $this->Product_m->get_products();
		//var_dump($data);die('zzz');
		//$this->load->view('product_view',$data);
	}
	function add_to_cart(){
		$data =  array(
			'id' => $this->input->post('product_id'),
			'name' => $this->input->post('product_name'),
			'price' => $this->input->post('product_price'),
			'qty' => $this->input->post('quantity'),
			'coupon' => ''
		);
		$this->cart->insert($data);
		echo $this->show_cart();
	}
	function show_cart(){
		$output = '';
		$no = 0;
		//var_dump($this->cart->contents());die('zzzz');
		$tax = $this->Tax_m->get_tax();
		//var_dump($this->cart->contents());die('zzzz');
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= '
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price'], 1, ',', ' ').'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal'], 1, ',', ' ').'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="remove_cart btn btn-danger btn_sm">Cancel</button></td>
				</tr>
			';
			
		}
		if($this->session->has_userdata('coupon')){
			$code = $this->session->userdata('coupon');
			$grand_total= ($this->cart->total()*$tax->value/100) + $this->cart->total();
			$grand_after_coupon = $grand_total - ($grand_total*0.1);
			$tax_total= $this->cart->total()*$tax->value/100;
			$output.='
					<tr>
						<th colspan="right">Tax '.number_format($tax->value).'%</th>
						
						<th colspan="right"> USD '.number_format($tax_total, 2, '.', ' ').' </th>
					</tr>
					<tr>
						<th colspan="right">Sub Total</th>
						<th colspan="right">'.'USD '.number_format($this->cart->total(), 2, ',', ' ').'</th>
					</tr>
					<tr>
						<th colspan="right">Grand Total included Tax</th>
						<th colspan="right">'.'USD '.number_format($grand_total, 2, ',', ' ').'</th>
					</tr>
					<tr>
						<th colspan="right">Grand Total</th>
						<th colspan="right">'.'USD '.number_format($grand_after_coupon, 2, ',', ' ').'</th>
					</tr>
					<tr>
						<th colspan="right">Coupon Code</th>
						<th><input id="coupon_code" type="text" class="" value="'.$code.'">discount 10%</th>
						<th><button type="button" class=" coupon btn btn_sm btn-info">Apply Coupon</button></th>
						<th colspan="right"></th>
						<th><button type="button" class="save_order btn btn_sm btn-success">Save Order</button></th>
						
					</tr>
				';
		}else{
			$grand_total= $this->cart->total()*$tax->value/100 + $this->cart->total();
			$tax_total= $this->cart->total()*$tax->value/100;
			$output.='
					<tr>
						<th colspan="right">Tax '.number_format($tax->value).'%</th>
						
						<th colspan="right"> USD '.number_format($tax_total, 1, ',', ' ').' </th>
					</tr>
					<tr>
						<th colspan="right">Sub Total</th>
						<th colspan="right">'.'USD '.number_format($this->cart->total(), 1, ',', ' ').'</th>
					</tr>
					<tr>
						<th colspan="right">Grand Total</th>
						<th colspan="right">'.'USD '.number_format($grand_total, 1, ',', ' ').'</th>
					</tr>
					<tr>
						<th colspan="right">Coupon Code</th>
						<th><input id="coupon_code" type="text" class=""></th>
						<th><button type="button" class=" coupon btn btn_sm btn-info">Apply Coupon</button></th>
						<th colspan="right"></th>
						<th><button type="button" class="btn btn_sm btn-success">Save Order</button></th>
						
					</tr>
				';
		}
		

		return $output;
	}
	function show_cart_coupon($code){
		// $data = array(
		// 		'coupon' => $code );
		// 	$this->cart->insert($data);
		$this->session->set_userdata('coupon',$code);
			$output = '';
		$no = 0;
		//var_dump($this->cart->contents());die('zzzz');
		$tax = $this->Tax_m->get_tax();
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= '
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price'], 1, ',', ' ').'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal'], 1, ',', ' ').'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="remove_cart btn btn-danger btn_sm">Cancel</button></td>
				</tr>
			';
			
		}
		$grand_total= $this->cart->total()*$tax->value/100 + $this->cart->total();

		$grand_after_coupon = $grand_total - ($grand_total*0.1);
		$tax_total= $this->cart->total()*$tax->value/100;
		$output.='
				<tr>
					<th colspan="right">Tax '.number_format($tax->value).'%</th>
					<th colspan="right"> USD '.number_format($tax_total, 1, ',', ' ').'</th>
				</tr>
				<tr>
					<th colspan="right">Sub Total</th>
					<th colspan="right">'.'USD '.number_format($this->cart->total(), 1, ',', ' ').'</th>
				</tr>
				<tr>
					<th colspan="right">Grand Total</th>
					<th colspan="right">'.'USD '.number_format($grand_after_coupon, 1, ',', ' ').'</th>
				</tr>
				<tr>
					<th colspan="right">Coupon Code</th>
					<th><input id="coupon_code" type="text" class="" value="'.$code.'"></th>
					<th>Coupon code is right</th>
					<th colspan="right"></th>
					<th><button type="button" class="btn btn_sm btn-success">Save Order</button></th>
					
				</tr>
			';

		return $output;
	}
	function load_cart(){
		echo $this->show_cart();

	}
	function delete_cart(){
		$data =  array(
			'rowid' => $this->input->post('row_id'),
			'qty'   => 0
		);
		$this->cart->update($data);
		//var_dump($this->cart->contents());die('zzzz');
		echo $this->show_cart();
	}
	function check_coupon(){
		$code = $this->input->post('coupon_code');
		$check = $this->Coupon_m->check_coupon($code);
		//var_dump($check);die('111');
		if($check){
			echo $this->show_cart_coupon($code);
		}else{
			echo $this->show_cart();
		}
	}
	function save_order(){
		$code = '';
		if($this->session->has_userdata('coupon')){
			$code = $this->session->userdata('coupon');
		}
		if($code!= ''){
			$tax = $this->Tax_m->get_tax();
			$grand_total= ($this->cart->total()*$tax->value/100) + $this->cart->total();
			$grand_after_coupon = $grand_total - ($grand_total*0.1);
			//$tax_total= $this->cart->total()*$tax->value/100;
		}
		//var_dump(number_format($grand_after_coupon, 2, ',', ' '));die('zzzz');
		foreach ($this->cart->contents() as $items) {

			$cart_data[] = array(
                    'id' => $items['id'],
                    'rowid' => $items['rowid'],
                    'name' => $items['name'],
                    'price' => $items['price'],
                    'qty' => $items['qty'],

                );
			
		}

		$this->Order_m->insert(array(
                    'cart_data' => json_encode($cart_data),
                    'cart_total' => number_format($grand_after_coupon, 2, '.', ' '),
                    'coupon_code' => $code
                ));
	}
}