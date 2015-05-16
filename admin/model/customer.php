<?php

class customer extends connect {

    var $idcustomer;
    var $name;
    var $image;
    var $gender;
    var $user;
    var $pass;

    function getlist(){
        $sql = "SELECT * FROM `customer`";
        $result = $this->get($sql);
        return $result;
    }

    function getbyid($id){
        $sql = "SELECT * FROM `customer` WHERE `idcustomer` = '$id'";
        $result = $this->getfetch($sql);
        return $result;
    }
    
    function insert(){
        $sql = "INSERT INTO `customer` values 
                    (NULL,
                    '".$this->name."',
                    '".$this->image."',
                    '".$this->gender."',
                    '".$this->user."',
                    '".$this->pass."'
                    )
                ";
        
        $this->exec($sql);
    }
    
    function update(){
        $sql = "UPDATE `customer` SET 
                     `name`='".$this->name."',
                     `gender`='".$this->gender."',
                     `user`='".$this->user."',
                     `pass`='".$this->pass."' 
                WHERE `idcustomer`='".$this->idcustomer."'
               ";
        $this->exec($sql);
    }
    
    function delete(){
        $sql = "DELETE FROM `customer` WHERE `idcustomer`='".$this->idcustomer."'";
        $this->exec($sql);
    }
    
}


?>