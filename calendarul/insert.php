<?php

include 'config.php';

$connect = new PDO('mysql:host=localhost;dbname=daw', 'root', '');

if(isset($_POST["title"]))
{

 $txt = $_POST['title'];

 //aflam numele cine a sters
  session_start();
  $numele = $_SESSION['user_name'];

  $action=$numele.' a adaugat un eveniment "'. $txt .'"';

  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);

//adaugarea 
 $query = "
 INSERT INTO events 
 (title, start_event, end_event) 
 VALUES (:title, :start_event, :end_event)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end']
  )
 );
}


?>
