<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Contact extends CI_Controller{
	function index(){
		$this->load->model('Product');

        $data['name_content']='contact';
		$this->load->view('index',$data);

	}
}