<?php 

include 'config.php';

$txt= $_POST['txt'];
$textBD = $_POST['textBD'];


//aflam numele cine a modificat
  session_start();
  $numele = $_SESSION['user_name'];


  $action=$numele.' a modificat cardul "'.$textBD.'" in "'.$txt.'"';


  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);

//modificarea cardului
$sql = "UPDATE kanban SET txt='$txt' WHERE txt='$textBD' ";
$result = mysqli_query($conn, $sql);


?>