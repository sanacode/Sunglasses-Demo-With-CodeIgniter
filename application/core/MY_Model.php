<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class MY_Model extends CI_Model{
	const DB_TABLE = 'product';
	const DB_TABLE_PK = 'idproduct';

	// Thêm sản phẩm
	private function insert(){
		$this->db->insert($this::DB_TABLE,$this);
		$this->{$this::DB_TABLE_PK} = $this->db->insert_id();
	}

	// Cập nhật sản phẩm
	private function update(){
		$this->db->update($this::DB_TABLE,$this,$this::DB_TABLE_PK);
	}

	// Lưu sản phẩm
	public function save() {
		if (isset($this->{$this::DB_TABLE_PK})) {
		    $this->update();
		}else{
		    $this->insert();
		}
	}

	// Show sản phẩm getlist
	public function getlist($limit = 0, $offset = 0) {
	    if ($limit) {
	        $query = $this->db->get($this::DB_TABLE,$limit,$offset);
	    }else{
	        $query = $this->db->get($this::DB_TABLE);
	    }
	    return $query;
	}

	// Show sản phẩm có id
	public function getfetch($id){
		$query = $this->db->get_where($this::DB_TABLE, array($this::DB_TABLE_PK => $id));
		return $query;
	}
    
    public function deletedb($id){
        $query = $this->db->delete($this::DB_TABLE,array($this::DB_TABLE_PK => $id));
    }

}