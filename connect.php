<?php

session_start();

class connection{
    private $host = "localhost";
    private $un = "root";
    private $pass = "";
    private $db = "rgistration";
    public $connect;

    public function __construct(){
        $this->connect = mysqli_connect($this->host,$this->un,$this->pass,$this->db);
        if($this->connect->connect_error){
            die("Database Error".$this->connect->connect_error);
        }
    }

    public function query($query){
        return $this->connect->query($query);
    }

    public function login($data){
        $query = $this->connect->query($data);
        if($query->num_rows>0){
            while($row = mysqli_fetch_assoc($query)){
                $_SESSION["id"] = $row["id"];
                $_SESSION["name"] = $row["Name"];
                $_SESSION["email"] = $row["Email"];
                $_SESSION["pass"] = $row["Password"];
                $_SESSION["img"] = $row["image"];
            }
            header("Location:product_admin/product_home.php");
        }
    }

}
$obj = new connection();
?>