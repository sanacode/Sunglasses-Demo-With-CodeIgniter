<?php

class order extends connect {

    var $idorder;
    var $time_add;
    var $note;

    function getlist(){
        $sql = "SELECT * FROM `order`";
        $result = $this->get($sql);
        return $result;
    }

    function getbyid($id){
        $sql = "SELECT * FROM `order` WHERE `idorder` = '$id'";
        $result = $this->getfetch($sql);
        return $result;
    }
    
    function insert(){
        $sql = "INSERT INTO `order` values 
                    (NULL,
                    '".$this->time_add."',
                    '".$this->note."'
                    )
                ";
        
        $this->exec($sql);
    }
    
    function update(){
        $sql = "UPDATE `order` SET 
                     `name`='".$this->time_add."',
                     `state`='".$this->note."' 
                WHERE `idorder`='".$this->idorder."'
               ";
        $this->exec($sql);
    }
    
    function delete(){
        $sql = "DELETE FROM `order` WHERE `idorder`='".$this->idorder."'";
        $this->exec($sql);
    }
    
}


?>