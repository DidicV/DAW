<?php 

include 'config.php';

  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $text_BD = $_POST['text_BD'];

  

  //nu permite de a sterge utilizatorul principal si de a il face din admin in user
  if($text_BD==11)
  {
  	$name='admin';

  	$sql = "UPDATE users SET user_name='$user_name',password='$password', name='$name' WHERE id='$text_BD'";
  	$result = mysqli_query($conn, $sql);

   }
   else
   {

   	 $sql = "UPDATE users SET user_name='$user_name',password='$password', name='$name' WHERE id='$text_BD'";
		  $result = mysqli_query($conn, $sql);
   }


?>