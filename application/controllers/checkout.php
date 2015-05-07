<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Checkout extends CI_Controller{

    public function index(){
    		$cart = $this->cart->contents();
    		if (empty($cart)) {
    			redirect('/');
    		}
            $data['name_content'] = 'checkout';
            $this->load->view('index',$data);
        }
}