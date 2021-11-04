<?php
  
  include 'config.php';

  $txt = $_POST['txt'];


  //aflam numele cine a sters
  session_start();
  $numele = $_SESSION['user_name'];


  $action=$numele.' a adaugat un card DONE "'. $txt .'"';

  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);


  $sql = "INSERT INTO kanban (txt,stare,add_by) VALUES ('$txt',3,'$numele')";
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
