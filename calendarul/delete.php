<?php

 include 'config.php';
 
if(isset($_POST["id"]))
{


  $id = $_POST['id'];
  //aflam numele cine a sters
  session_start();
  $numele = $_SESSION['user_name'];


  //aflam ce anume a sters
  $sql = "SELECT title FROM events WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_row($result);
  $textul = $row[0];

  $action=$numele.' a sters evenimentul "'.$textul.'" ';

  //inscriem in activitati actiunea
  $sql = "INSERT INTO activitati (activitate, create_date) VALUES ('$action',now())";
  $result = mysqli_query($conn, $sql);


//stergerea
 $connect = new PDO('mysql:host=localhost;dbname=daw', 'root', '');
 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>