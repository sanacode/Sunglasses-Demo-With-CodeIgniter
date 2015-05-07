<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Finished extends CI_Controller{

    public function index(){

        $this->load->model('Order');

        $t = $this->cart->contents();
        if(!$t){
            redirect('/');
        }else{
            if (isset($_POST['cus'])) {

                // Thêm dữ liệu vào Order
                $this->load->model('Order');
                $order = new Order();
                $order->idcustomer = 3; //$this->Customer->idcustomer;
                $order->name = $_POST['hoten'];
                $order->address = $_POST['address'];
                $order->gender = $_POST['gender'];
                $order->time_add = date('Y-m-d H:i:s');
                $order->note = $_POST['note'];
                $order->save();

                // Lấy thông tin khách hàng vừa mua
                $customer = $order->getfetch($order->idorder);
                $data['customer'] = $customer->result_array();

                // Thêm dữ liệu vào Orderdetail
                foreach($this->cart->contents() as $items){
                    $od[] = array(
                        'idproduct' => $items['id'],
                        'idorder' => $order->idorder,
                        'qty' => $items['qty'],
                        'price' => $items['subtotal']
                    );
                }
                $this->db->insert_batch('orderdetail', $od); // Thêm chi tiết sản phẩm mua

                //$this->cart->destroy();

            }


            $data['name_content'] = 'finished';
            $this->load->view('index',$data);
        }
    }
}