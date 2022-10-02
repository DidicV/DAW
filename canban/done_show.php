<?php
  include 'config.php';
  session_start();
  $role = $_SESSION['name'];
  $id = $_SESSION['id'];

  if($role == "admin")
  {
	$sql = "SELECT * FROM kanban WHERE stare=3";
  }
  else
  {
  	$sql = "SELECT * FROM kanban WHERE stare=3 AND (assigned = 0 OR assigned = '$id')";
  }

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
    	$user_id = $row['assigned'];

    	if($user_id==0)
    	{
    		$assign_to = "For all";
    	}
    	else
    	{

    		$res = mysqli_query($conn,"SELECT user_name FROM users WHERE id = '$user_id'");
    	
			$r = mysqli_fetch_row($res);

    		$assign_to = $r[0];
    	}
?>

<tr>
	<td style="border:1px solid black; padding: 2.5%; background: #F6F6F6; border-radius: 5px;" width="370px">

			<b><p> &nbsp  <?php echo $row['txt']; ?></p></b>
			<i><p>&nbsp Added by: <?php echo $row['add_by']; ?></p></i>
			<i><p>&nbsp Assingned to: <?php echo $assign_to; ?></p></i>
			<button class="kanban_todo" id="todo" data-id="<?php echo $row['id']; ?>">To Do</button>
			<button class="kanban_doing" id="doing" data-id="<?php echo $row['id']; ?>">Doing</button>
			<button class="kanban_modf" id="modifica2" data-id="<?php echo $row['txt']; ?>">Modifica</button>
			<button class="kanban_del" id="delete" data-id="<?php echo $row['id']; ?>">Sterge</button>
			<p style="font-size: 0px;">&nbsp</p>
	</td>
</tr> 

<?php } } ?>


