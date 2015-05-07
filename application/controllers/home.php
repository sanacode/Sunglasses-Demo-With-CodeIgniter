<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Home extends CI_Controller{
	function index(){
		$this->load->model('Product');
		//$data = $this->Product->getlist();

        //$data->name_content='home';
        $data['name_content']='home';
		$this->load->view('index',$data);

	}
}