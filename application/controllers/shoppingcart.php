<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Shoppingcart Extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //Load Library and model.
        $this->load->model('Product');
    }

    public function index(){
        
        if(isset($_POST['buy'])){
            $idproduct = $this->input->post('idproduct');
            $query = $this->Product->getfetch($idproduct);
            foreach ($query->result_array() as $row) {
                
                // Loại kí tự đặc biệt
                $name = $row['name'];
                $name = str_replace(array('&',"'",'"'),'-',$name);

                $pimage = $row['pimage'];
                $data = array(
                   'id'      => $row['idproduct'],
                   'qty'     => $_POST['qty'],
                   'price'   => $row['price'],
                   'name'    => "$name",
                   'pimage'    => "$pimage"
                );
            }

            $this->cart->insert($data);

        }
        $data['name_content'] = 'shoppingcart';
        $this->load->view('index',$data);
    }
    
    public function update_cart(){
        $arraycart = $this->input->post('cart'); // Lấy mảng cart[id][rowid]
 
        /* Nó sẽ tạo ra mảng:
        Array(
            [0] => Array(
                    [rowid] => 1679091c5a880faf6fb5e6087eb1b2dc
                    [qty] => 1
                )
        
            [1] => Array(
                    [rowid] => c4ca4238a0b923820dcc509a6f75849b
                    [qty] => 3
                )
        
        )*/
 
        $this->cart->update($arraycart);
        redirect('shoppingcart');
    }
    
    public function clear_cart(){
        if(isset($_POST['clearcart'])){
            $this->cart->destroy();
        }
        redirect('shoppingcart');
    }
    
    public function remove($rowid){

        if ($rowid === "all"){
            $this->cart->destroy();
        } else{
            $data = array('rowid' => $rowid, 'qty' => 0);
            $this->cart->update($data);
        }

        redirect('shoppingcart');
        
    }
}