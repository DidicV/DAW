<?php

include 'config.php';

$output = '';

//CAUTATREA IN BAZA DE DATE UNDE SUNT COMBINATII INTRODUSE
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "SELECT * FROM activitati  WHERE activitate LIKE '%".$search."%' ORDER BY id DESC";
}
else
{
	$query = "SELECT * FROM activitati ORDER BY id DESC";
}

$result = mysqli_query($conn, $query);



//AFISAREA ACTIVITATILOR
if(mysqli_num_rows($result) > 0)
{
	$output .= '
					<table style="border: 1px solid black; border-collapse: collapse;">
						<tr>
							<th class="actv_head">Action</th>
							<th class="actv_head">Date</th>
							<th class="actv_head">Delete</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr class="actv">
				<td class="actv" style="width: 700px; text-align: center;" >'.$row["activitate"].'</td>
				<td class="actv" style="width: 200px; text-align: center;">'.$row["create_date"].'</td>
				<td class="actv" style="width: 100px; text-align: center;"> <button class="delete_bt" id="delete_activiti" data-id='.$row["id"].' >Sterge </button> </td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Nu sunt asa date';
}
?>






