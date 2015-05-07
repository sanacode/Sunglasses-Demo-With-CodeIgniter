<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Customer extends MY_Model{
	const DB_TABLE = 'customer';
	const DB_TABLE_PK = 'idcustomer';
	public $idcustomer;
	public $name;
    public $image;
    public $gender;
    public $user;
    public $pass;
}