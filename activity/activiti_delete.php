<?php
  // Include Connection
  include 'config.php';

  $id = $_POST['id'];

  $sql = "DELETE FROM activitati WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  if($result) 
  {
    echo 1;
  }
  else 
  {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
