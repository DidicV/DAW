<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "daw";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);



session_start(); 


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Introdu login");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Introdu parola");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	$_SESSION['departament'] = $row['departament'];
            	$_SESSION['departament_name'] = $row['departament_name'];
            	header("Location: main.php");
		        exit();
            }else{
				header("Location: index.php?error=Login sau parola incorecta");
		        exit();
			}
		}else{
			header("Location: index.php?error=Login sau parola incorecta");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

?>