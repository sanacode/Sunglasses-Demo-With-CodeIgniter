<?php

class categories extends connect {

    var $idcategories;
    var $catname;
    var $image;
    var $detail;
    var $public;
    var $position;
    var $idparent;

    function getlist(){
        $sql = "SELECT * FROM `categories`";
        $result = $this->get($sql);
        return $result;
    }
    
    function getbyid($id){
        $sql = "SELECT * FROM `categories` WHERE `idcategories` = '$id'";
        $result = $this->getfetch($sql);
        return $result;
    }
    
    function insert(){
        $sql = "INSERT INTO `categories` values 
                    (NULL,
                    '".$this->catname."',
                    '".$this->image."',
                    '".$this->detail."',
                    '".$this->public."',
                    '".$this->position."',
                    '".$this->idparent."'
                    )
                ";
        
        $this->exec($sql);
    }
    
    function update(){
        $sql = "UPDATE `categories` SET 
                     `catname`='".$this->catname."',
                     `image`='".$this->image."',
                     `detail`='".$this->detail."',
                     `public`='".$this->public."',
                     `position`='".$this->position."',
                     `idparent`='".$this->idparent."' 
                WHERE `idcategories`='".$this->idcategories."'
               ";
        $this->exec($sql);
    }
    
    function delete(){
        $sql = "DELETE FROM `categories` WHERE `idcategories`='".$this->idcategories."'";
        $this->exec($sql);
    }
    
}


?>