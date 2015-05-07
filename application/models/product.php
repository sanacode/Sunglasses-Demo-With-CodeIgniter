<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Product extends MY_Model{
	const DB_TABLE = 'product';
	const DB_TABLE_PK = 'idproduct';
	public $idproduct;
	public $name;
}