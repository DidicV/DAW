<table style="border: 1px solid black; border-collapse: collapse;">
  <style>
    .usr{border: 1px solid black; border-collapse: collapse; text-align: center; background-color: white;}
  </style>

            <tr>
              <th class="actv_head">Nume</th>
              <th class="actv_head">Parola</th>
              <th class="actv_head">Stare</th>
              <th class="actv_head">Departament</th>
              <th class="actv_head">Modifica</th>
              <th class="actv_head">Sterge</th>
            </tr>

<?php



  include 'config.php';

  //aflam id-ul 
  session_start();
  $id_admin = $_SESSION['id'];

  //in caz ca e adminul principal se afiseaza parola lui iar daca este admin simplu nu poate sa vada parola 
  if($id_admin==11)
  {

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

  }
  else
  {
    $sql = "SELECT * FROM users WHERE id != 11";
    $result = mysqli_query($conn, $sql);
  }





  if (mysqli_num_rows($result) > 0)
  {
    while ($row = mysqli_fetch_assoc($result))
    {

?>


<?php  

      if($row['id']==11)
      {

      
?>


<tr style="border: 2px solid black;">

  <td class="usr" width="200px"><?php echo $row['user_name']; ?></td>
  <td class="usr"  width="200px"><?php echo $row['password']; ?></td>
  <td class="usr"  width="100px"><?php echo $row['name']; ?></td>
  <td class="usr"  width="100px"><?php echo $row['departament_name']; ?></td>
  <td class="usr"  width="100px"><button class="modify_btn" id="modifica_user" data-id="<?php echo $row['id'];?>">Modifica</button></td>
    <td class="usr"  width="100px"></td>


</tr> 


<?php  

}

else
{


?>

<tr style="border: 2px solid black;">

	<td class="usr" width="200px"><?php echo $row['user_name']; ?></td>
	<td class="usr"  width="200px"><?php echo $row['password']; ?></td>
	<td class="usr"  width="100px"><?php echo $row['name']; ?></td>
  <td class="usr"  width="100px"><?php echo $row['departament_name']; ?></td>
	<td class="usr"  width="100px"><button class="modify_btn" id="modifica_user" data-id="<?php echo $row['id'];?>">Modifica</button></td>
	<td class="usr"  width="100px"><button class="delete_btn" id="delete_user" data-id="<?php echo $row['id']; ?>">Sterge</button></td>

</tr> 



<?php


}
}
} 

?>
</table>

