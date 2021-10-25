<?php
  // Include Connection
  include 'config.php';

  $id = $_POST['id'];

  //nu permite de a sterge utilizatorul principal
  if($id!=11)
  {


      $sql = "DELETE FROM users WHERE id='$id'";
      $result = mysqli_query($conn, $sql);

      if ($result)
      {
        echo 1;
      }
      else 
      {
        echo "Error: {$sql}" . mysqli_error($conn);
      }

  }


?>
