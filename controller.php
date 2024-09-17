<?php

  include './model.php';

  class Controller {

    public function insertUser($name = 'Juan', $last_name = 'Gonzalez'){
      $model = new PostUser();
      $data = $model->insertUser($name, $last_name);
      return $data;
    }
  }

  //Recibimos los datos para registar user
  if(isset($_GET['insert_user'])){

    // Obtener los datos del formulario
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];

    $controller = new Controller();
    $data = $controller->insertUser($name,$lastname);
    echo json_encode($data);
  }