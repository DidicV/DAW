<?php 

include 'config.php';

$txt= $_POST['txt'];
$text_BD = $_POST['text_BD'];

//aflam numele cine a modificat
  session_start();
  $numele = $_SESSION['user_name'];


  $action=$numele.' a modificat cardul "'.$text_BD.'" in "'.$txt.'"';


  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);

//modificarea cardului
$sql = "UPDATE kanban SET txt='$txt' WHERE txt='$text_BD' ";
$result = mysqli_query($conn, $sql);


?>