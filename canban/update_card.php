<?php 

include 'config.php';

$txt= $_POST['txt'];
$text_BD = $_POST['text_BD'];
$assign_to_id = $_POST['assign_to_id'];


//aflam numele cine a modificat
  session_start();
  $numele = $_SESSION['user_name'];

  if($assign_to_id==-1)
  {
  	$assign_to_id = $_SESSION['id'];
  }


  $action=$numele.' a modificat cardul "'.$text_BD.'" in "'.$txt.'"';


  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);

//modificarea cardului

$sql = "UPDATE kanban SET txt='$txt',assigned='$assign_to_id' WHERE txt='$text_BD' ";
$result = mysqli_query($conn, $sql);


?>