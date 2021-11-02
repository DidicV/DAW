<?php

include 'config.php';



$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM activitati WHERE activitate LIKE '%".$search."%'

	";
}
else
{
	$query = "
	SELECT * FROM activitati ORDER BY id";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Action</th>
							<th>Date</th>
							<th>Delete</th>

						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td style="width: 700px; text-align: center;" >'.$row["activitate"].'</td>
				<td style="width: 200px; text-align: center;">'.$row["create_date"].'</td>

				<td style="width: 100px; text-align: center;"> <button id="delete_activiti" data-id='.$row["id"].' >Sterge </button> </td>


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






