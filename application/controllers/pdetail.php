<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Pdetail extends CI_Controller{
    public function index(){
        $this->view();
    }
    
    public function view($name,$id){
        if(!$id){
            redirect('/');
        }else{
            $this->load->model('Product');
            $query = $this->Product->getfetch($id);
            $query = $query->result_array();
            $data['query'] = $query;
            if (!$data) {
                redirect('/');
            }
        }
        //$data->name_content='pdetail';
        $data['name_content']='pdetail';
        $this->load->view('content/pdetail.tpl.php',$data,TRUE);
        $this->load->view('index');
    }
    
    
}

?>