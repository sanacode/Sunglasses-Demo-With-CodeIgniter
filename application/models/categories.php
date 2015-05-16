<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Categories extends MY_Model{
	const DB_TABLE = 'categories';
	const DB_TABLE_PK = 'idcategories';
	public $idcategories;
	public $catname;
}