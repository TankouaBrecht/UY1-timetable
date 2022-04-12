<?php
    //that's connection to the database
    include 'db.php';
    
if(isset($_POST['branchVal']) && isset($_POST['branchLevelVal']) ){
    $value1 = $_POST['branchVal'];
    $value2 = $_POST['branchLevelVal'];
    $query= "SELECT * FROM teachers ORDER BY name ASC ";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
     ?>	
		<tr>
			<td><?=$row['id'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['adress'];?></td>
            <td><?=$row['phone'];?></td>
            <td><?=$row['gender'];?></td>
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
     ?>	
		<tr>
			<td><?=$row['id'];?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['adress'];?></td>
            <td><?=$row['phone'];?></td>
            <td><?=$row['gender'];?></td>
            <td  style="text-align: center !important;">
              <a href="" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }
 
    exit;
}
?>