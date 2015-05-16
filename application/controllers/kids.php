<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Kids extends CI_Controller{
    public function index(){
        $this->load->model('Product');
        
//        $sql = "SELECT `product`.`idproduct` FROM `product` 
//            INNER JOIN 
//                (`cat_pro` INNER JOIN `categories` ON (`cat_pro`.`idcategories` = `categories`.`idcategories`)) 
//            ON (`product`.`idproduct` = `cat_pro`.`idproduct`) 
//       WHERE `categories`.`idcategories` = '1'
//       ";
//        $query = $this->db->query($sql);
//        $numrows = $query->num_rows();
//        $numrows = ceil($numrows / 3);

        $this->db->select('*');
        $this->db->from('product AS P');
        $this->db->join('cat_pro AS CP','P.idproduct = CP.idproduct','INNER');
        $this->db->join('categories AS C','C.idcategories = CP.idcategories','INNER');
        $this->db->where('C.idcategories','3');
        $query = $this->db->get();
        $numrows = $query->num_rows();
        $numrows = ceil($numrows / 3);
        
        $data['numrows']= $numrows; // Tổng số dòng
        
        $data['cat'] = '3'; // Danh mục 'kids'
        
        $data['catname'] = 'kids'; // Danh mục 'kids'
        
        $data['name_content'] = 'categories'; // Content 'categories'
        
        $this->load->view('index',$data);
    }
}

?>