
<table style="border: 1px solid black; border-collapse: collapse;">
  <style>
    .actv{border: 1px solid black; border-collapse: collapse; text-align: center;}
  </style>
      <tr>
        <td class="actv">Activitatea</td>
        <td class="actv">Data executiei</td>
        <td class="actv">Eliminare</td>
    </tr>
<?php
  include 'config.php';

  $sql = "SELECT * FROM activitati";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result))
    {
?>

<tr>

  <td class="actv" width="500px"><?php echo $row['activitate']; ?></td>
  <td class="actv" width="100px"><?php echo $row['create_date']; ?></td>

  <td class="actv" width="100px"><button style="padding: 5px;" id="delete_activiti" data-id="<?php echo $row['id']; ?>">Sterge</button></td>


</tr> 


<?php } } ?>