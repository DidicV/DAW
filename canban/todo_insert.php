<?php

  include 'config.php';

  $txt = $_POST['txt'];
  $assign_to_id = $_POST['assign_to_id'];

  //aflam numele 
  session_start();
  $numele = $_SESSION['user_name'];

  if($assign_to_id==-1)
  {
    $assign_to_id = $_SESSION['id'];
  }

  $action=$numele.' a adaugat un card TODO "'. $txt .'"';


  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);



  $sql = "INSERT INTO kanban (txt,stare,add_by,assigned) VALUES ('$txt',1,'$numele','$assign_to_id')";
  $result = mysqli_query($conn, $sql);

  if ($result)
  {
    echo 1;
  }
  else
  {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
