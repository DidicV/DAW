<?php
  include 'config.php';

  $sql = "SELECT * FROM kanban WHERE stare=3";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
?>

<tr>
	<td style="border:1px solid black; padding: 2.5%; background: #F6F6F6;" width="370px">

			<b><p> &nbsp  <?php echo $row['txt']; ?></p></b>
			<i><p>&nbsp Added by: <?php echo $row['add_by']; ?></p></i>
			<button style="padding: 5px;" id="todo" data-id="<?php echo $row['id']; ?>">To Do</button>
			<button style="padding: 5px;" id="doing" data-id="<?php echo $row['id']; ?>">Doing</button>
			<button style="padding: 5px;" id="modifica2" data-id="<?php echo $row['txt']; ?>">Modifica</button>
			<button style="padding: 5px;" id="delete" data-id="<?php echo $row['id']; ?>">Sterge</button>
			<p style="font-size: 0px;">&nbsp</p>
	</td>
</tr> 

<?php } } ?>


