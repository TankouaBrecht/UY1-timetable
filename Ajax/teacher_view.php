<?php
    //that's connection to the database
    include 'db.php';
 $count=0;   
if(isset($_POST['branchVal']) ){
    $value1 = $_POST['branchVal'];

    $query= "SELECT * FROM teachers WHERE `faculty` = '$value1' ORDER BY name ASC ";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
     ?>	
		<tr style="text-transform: capitalize !important;">
		      	<td><?=$count?></td>
            <td>Dr <?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['adress'];?></td>
            <td><?=$row['phone'];?></td>
            <td><?=$row['gender'];?></td>
            <td><?=$row['faculty'];?></td>
            <td  style="text-align: center !important;">
              <a href="" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }

}else{
    $query= "SELECT * FROM teachers";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
      $count++
     ?>	
		<tr style="text-transform: capitalize !important;">
		      	<td><?=$count?></td>
            <td>Dr <?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['adress'];?></td>
            <td><?=$row['phone'];?></td>
            <td><?=$row['gender'];?></td>
            <td><?=$row['faculty'];?></td>
            <td  style="text-align: center !important;">
              <a href="teacher&action=edit&id=<?=$row['id']?>" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }
 
    exit;
}
?>