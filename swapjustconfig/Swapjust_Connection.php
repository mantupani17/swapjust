<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Swapjust_Connection
 *
 * @author mantu
 */
class Swapjust_Connection {
    //put your code here
    private $conn;
    private $host;
    private $database;
    private $user;
    private $password;
    private $port;
    private $debug;
    function __construct($params=array()){
        $this->conn = false;
        $this->host = 'localhost';
        $this->user ='root';
        $this->password = '';
        $this->database = 'hsy';
        $this->port = '3306';
        $this->debug = true;
        $this->connect();
    }
    function __destruct(){
        $this->disconnect();
        
    }
    //this method is connect to the database
    function connect(){
        if(!$this->conn){
            
                //$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->database.'',  $this->user,  $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'));
                $this->conn = mysql_connect($this->host,  $this->user,  $this->password);
                mysql_select_db($this->database,  $this->conn);
                mysql_set_charset('utf8',  $this->conn);
            
            if(!$this->conn)
            {
                $this->status_fatal = true;
                echo 'Connection BDD failed';
                die();
            }
            else {
                $this->status_fatal = false;   
            }
        }
        return $this->conn;
    }
    //this method is to destroy the database connection
    function disconnect(){
        if($this->conn){
            //$this->conn = null;
            @pg_close($this->conn);
        }
    }
    //this method is used to find the single value data
    function getOne($query)
    {
        $connextion = $this->conn;
        if(!$connextion || $this->status_fatal){
            echo 'getOne -> Connection BDD Failed';
            die();
        }
        $cur = @mysql_query($query,$connextion);
        if($cur == FALSE){
         
           $errorMessage = @pg_last_error($connextion);
            $this->handleError($query,$errorMessage);
        }
        else
        {
            $this->Error = FALSE;
            $this->BadQuery="";
            $temp = mysql_fetch_array($cur,MYSQL_ASSOC);
            $ret = $temp;
        }
        @mysql_free_result($cur);
        return $ret;
        
    }
    //this method is used to get no of records
    function getAll($query)
    {
        $connextion = $this->conn;
        if(!$connextion || $this->status_fatal){
            echo 'getOne -> Connection BDD Failed';
            die();
        }
        mysql_query("SET NAMES 'utf8'");
        $cur = mysql_query($query);
        $ret = array();
        while($data = mysql_fetch_assoc($cur)){
            array_push($ret, $data);
        }
        return $ret;
    }
    //this method is used for insert delete
    function execute($query,$use_slave = false){
        $connextion = $this->conn;
        if(!$connextion || $this->status_fatal){
           return null;
        }
        $cur = @mysql_query($query,$connextion);
        if($cur == FALSE)
        {
            $ErrorMessage = @mysql_last_error($connextion);
            $this->handleError($query, $ErrorMessage);
            
        }
        else {
            $this->Error = FALSE;
            $this->BadQuery = "";
            $this->NumRows = mysql_affected_rows();
            return;
        }
        //@mysql_free_result($cur);
    }
    //this method is used to handle error
    function handleError($query,$str_error){
        $this->Error = TRUE;
        $this->BadQuery = $query;
        if($this->debug){
            echo 'Query :'.$query.'<br/>';
            echo 'Error :'.$str_error.'<br/>';
        }
    }
}
