<?php

  include 'config.php';


  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $name = $_POST['name'];


  if($user_name && $password)
  {
    $sql = "INSERT INTO users (user_name,password,name) VALUES ('$user_name','$password','$name')";
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
