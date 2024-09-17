<?php 

  include './connection.php';

  class PostUser extends Connection{
    private $conn;

    public function __construct(){
        $this->conn = $this->connect();
    }

    public function insertUser($name, $lastname){
      $sql = "INSERT INTO user (
        name,
        lastname
      ) VALUES ('$name','$lastname')";

      $is_register = 0;

      if ($this->conn->query($sql) === TRUE) {
          $is_register = 1;
      }
    
    // Cerrar conexión
    // $this->conn->close();

      return $is_register;
    }

  }