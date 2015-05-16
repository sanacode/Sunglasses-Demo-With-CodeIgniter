<?php

class product extends connect {

    var $idproduct;
    var $name;
    var $model;
    var $detail;
    var $pimage;
    var $price;
    var $sale;
    var $state;

    function getlist(){
        $sql = "SELECT * FROM `product`";
        $result = $this->get($sql);
        return $result;
    }

    function getbyid($id){
        $sql = "SELECT * FROM `product` WHERE `idproduct` = '$id'";
        $result = $this->getfetch($sql);
        return $result;
    }
    
    function insert(){
        $sql = "INSERT INTO `product` values 
                    (NULL,
                    '".$this->name."',
                    '".$this->model."',
                    '".$this->detail."',
                    '".$this->pimage."',
                    '".$this->price."',
                    '".$this->sale."',
                    '".$this->state."'
                    )
                ";
        
        $this->exec($sql);
    }
    
    function update(){
        $sql = "UPDATE `product` SET 
                     `name`='".$this->name."',
                     `model`='".$this->model."',
                     `detail`='".$this->detail."',
                     `price`='".$this->price."',
                     `sale`='".$this->sale."',
                     `state`='".$this->state."' 
                WHERE `idproduct`='".$this->idproduct."'
               ";
        $this->exec($sql);
    }
    
    function delete(){
        $sql = "DELETE FROM `product` WHERE `idproduct`='".$this->idproduct."'";
        $this->exec($sql);
    }
    
}


?>