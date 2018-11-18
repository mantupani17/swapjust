<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Handshakeyou
 */
class Database {
    private  $conn;
    private  $host;
    private $user;
    private $password;
    private $database;
    private  $port;
    private $debug;
    
    function _construct($params =array()){
        $this->conn=false;
        $this -> host ='localhost';
        $this ->user = 'root';
        $this ->password='';
        $this->port ='3306';
        $this ->debug=true;
        $this->database='hsy';
        $this->connect();
    }
    function _destruct(){
        $this->disconnect();
    }
    function connect(){
        if(!$this->conn){
            try{
                $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'', $this->user, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            } catch (Exception $ex) {
                    die('Error :'.$ex->getMessage());
            }
            if(!$this->conn)
            {
                $this->status_fatal = true;
                echo 'connection BDD failed';
                die();
            }
            else{
                $this->status_fatal = false;
            }
            
        }
        return $this->conn;
    }
	function disconnect(){
            if($this->conn){
                $this->conn = null;
            }
        }
        function getOne($querry){
            $result = $this->conn->prepare($querry);
            $ret = $result->execute();
            if(!$ret){
                echo 'PDO::ErrorInfo():';
                echo '<br/>';
                echo 'error SQL :'.$querry;
                die();
            }
            $result ->setFetchMode(PDO::FETCH_ASSOC);
            $response = $result->fetch();
            return $response;
        }
        function getAll($querry){
            $result = $this->conn->prepare($querry);
            $ret = $this->execute();
            if(!$ret){
                echo 'PDO::ErrorInfo():';
                echo '<br/>';
                echo 'error SQL :'.$querry;
                die();
            }
            $result ->setFetchMode(PDO::FETCH_ASSOC);
            $response = $result->fetchAll();
            return $response;
        }
        function execute($querry){
            if(!$response= $this->conn->exec($querry)){
                echo 'PDO::ErrorInfo():';
                echo '<br/>';
                echo 'error SQL :'.$querry;
                die(); 
            }
            return $response;
        }
}
?>
<?php
 
    ?>

