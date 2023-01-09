<?php 

include 'config.php';

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $text_BD = $_POST['text_BD'];

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
  

  //nu permite de a sterge utilizatorul principal si de a il face din admin in user
  if($text_BD==11)
  {
  	$name='admin';

  	$sql = "UPDATE users SET user_name='$user_name',password='$password', name='$name', departament='$id_departament', departament_name='$departament_name' WHERE id='$text_BD'";
  	$result = mysqli_query($conn, $sql);

   }
   else
   {

   	 $sql = "UPDATE users SET user_name='$user_name',password='$password', name='$name', departament='$id_departament', departament_name='$departament_name' WHERE id='$text_BD'";
		  $result = mysqli_query($conn, $sql);
   }


?>