<?php

  include 'config.php';


  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $id_departament = $_POST['id_departament'];

  if($id_departament == 1)
  {
    $departament_name = "Testing";
  }
  elseif ($id_departament == 2) 
  {
    $departament_name = "Development";
  }
  elseif ($id_departament == 3)
  {
    $departament_name = "HR";
  }

  elseif ($id_departament == 4) 
  {
    $departament_name = "DevOps";
  }

  elseif ($id_departament == 5) 
  {
    $departament_name = "Heads";
  }

  if($user_name && $password)
  {
    $sql = "INSERT INTO users (user_name,password,name,departament,departament_name) VALUES ('$user_name','$password','$name','$id_departament','$departament_name')";
    $result = mysqli_query($conn, $sql);
  }


  if($result)
  {
    echo 1;
  }
  else
  {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
  
?>
