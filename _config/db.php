<?php
class db{
    var $host = 'localhost'; 
    var $user = 'root'; 
    var $pass = '';
    var $db = 'adminhima2-prod';
    var $port = '3306';

    var $conn = null;

    function __construct(){ 
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db); 
        if (mysqli_connect_error()){ 
            echo 'Gagal Koneksi Database : '.mysqli_connect_error(); 
        }
    }

    function Conn(){
        return $this->conn;
    }
}

?>