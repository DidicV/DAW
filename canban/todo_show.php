<?php
  include 'config.php';

  $sql = "SELECT * FROM kanban WHERE stare=1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
?>

<tr>
	<td style="border:1px solid black; padding: 2.5%; background: #F6F6F6; border-radius: 5px;"  width="370px">

			<b><p> &nbsp  <?php echo $row['txt']; ?></p></b>
			<i><p>&nbsp Added by: <?php echo $row['add_by']; ?></p></i>
			<button class="kanban_doing" id="doing" data-id="<?php echo $row['id']; ?>">Doing</button>
			<button class="kanban_done" id="done" data-id="<?php echo $row['id']; ?>">Done</button>
			<button class="kanban_modf" id="modifica" data-id="<?php echo $row['txt']; ?>">Modifica</button>
			<button class="kanban_del" id="delete" data-id="<?php echo $row['id']; ?>">Sterge</button>
			<p style="font-size: 0px;">&nbsp</p>
	</td>
</tr> 


<?php } } ?>


