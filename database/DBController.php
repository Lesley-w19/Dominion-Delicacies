<?php

class DBController{

    // Database connection proertires

    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $db_name = "dominion";


    // check connection 
    public $conn = null;

    // call constructor
    public function __construct()
    {
        $this-> conn = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);

        if($this->conn->connect_error){
            echo "Fail to connect to the database" .$this->conn->connect_error;
        }      
        
    }

  

    public function __destruct(){
        // to end connection to the database when not in use
        $this->closeConnection();
    }

    // for mysqli closing connection

    protected function closeConnection(){
        if($this->conn != null){
            $this->conn->close();
        }
    }
}  









?>