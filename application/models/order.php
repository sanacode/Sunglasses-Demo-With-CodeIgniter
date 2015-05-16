<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Order extends MY_Model{
	const DB_TABLE = 'order';
	const DB_TABLE_PK = 'idorder';
	public $idorder;
	public $time_add;
    public $name;
    public $address;
    public $gender;
    public $note;
    public $idcustomer;
}