<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Orderdetail extends MY_Model{
    const DB_TABLE = 'orderdetail';
    const DB_TABLE_PK = 'idorderdetail';
    
    public $idorder;
    public $idproduct;
    public $qty;
    public $price;
}