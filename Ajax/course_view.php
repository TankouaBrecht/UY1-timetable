<?php
    //that's connection to the database
    include 'db.php';
 $count=0;   
if(isset($_POST['branchVal']) ){
    $value1 = $_POST['branchVal'];
    $value2 = $_POST['branchLevelVal'];
    $query= "SELECT * FROM ue WHERE `class` = '$value1' AND `level` = '$value2' ORDER BY name ASC ";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
     ?>	
		<tr>
            <td><?=$count?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['libelle'];?></td>
            <td><?=$row['semester'];?></td>
            <td><?=$row['class'];?> <span>L<?=$row['level'];?></span></td>
            <td style="text-transform: capitalize !important;"> Dr <?=$row['teacher'];?></td>
            <td  style="text-align: center !important;">
              <a href="course&action=edit&id=<?=$row['id']?>" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }

}else{
    $query= "SELECT * FROM ue ORDER BY name ASC";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
      $count++;
     ?>	
		<tr>
			<td><?=$count?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['libelle'];?></td>
            <td><?=$row['class'];?> <span>L<?=$row['level'];?></span></td>
            <td><?=$row['semester'];?></td>
            <td style="text-transform: capitalize !important;"> Dr <?=$row['teacher'];?></td>
            <td  style="text-align: center !important;">
              <a href="course&action=edit&id=<?=$row['id']?>" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }
 
    exit;
}
?>