<?php

class connect {    // Tạo lớp connect
    private $db = null;

    function __construct(){
	global $host,$user,$pass,$dbname;
        $dsn = "mysql:host=$host;dbname=$dbname";
        try{
            $this->db = new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (Exception $ex) {
            die('Error: '. $ex->getMessage);
        }

    }

    function get($sql){
        $result = $this->db->query($sql);
        return $result;
    }

    function getfetch($sql){
        $result = $this->db->query($sql);
        $result = $result->fetch();
        return $result;
    }

    function exec($sql){
        $this->db->exec($sql);
    }

	function lastinsertid(){
		return $this->db->lastInsertId();
	}

}

?>