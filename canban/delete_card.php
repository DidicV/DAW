<?php

  include 'config.php';

  $id = $_POST['id'];

  //aflam numele cine a sters
  session_start();
  $numele = $_SESSION['user_name'];

  //aflam ce text a sters
  $sql = "SELECT txt FROM kanban WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_row($result);
  $textul = $row[0];

  //aflam in ce strare se afla cardul
  $sql = "SELECT stare FROM kanban WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_row($result);
  $stare = $row[0];

  if($stare==1)
  {
    $stare="TODO";
  }
  else if($stare==2)
  {
    $stare="DOING";
  }
  else if($stare==3)
  {
    $stare="DONE";
  }

  $action=$numele.' a sters cardul "'.$textul.'" din '.$stare;


  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);

  

  //sterge cardul
  $sql = "DELETE FROM kanban WHERE id='$id'";
  $result = mysqli_query($conn, $sql);



  if ($result) 
  {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
