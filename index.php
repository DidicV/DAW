<!DOCTYPE html>
<html>
<head>
	<title>Login system</title>
	<link rel="stylesheet" type="text/css" href="lib/stil_logare.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Logare</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" autocomplete="off"><br>

     	<label>Parola</label>
     	<input type="password" name="password" placeholder="Password" autocomplete="off"><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>