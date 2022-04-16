<?php
    //that's connection to the database
    include 'db.php';
 $count=0;   

    $query= "SELECT * FROM amphi ORDER BY name ASC";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
      $count++;
     ?>	
		<tr>
			<td><?=$count?></td>
            <td><?=$row['name'];?></td>
            <td><?=$row['capacity'];?></td>
            <td  style="text-align: center !important;">
              <a href="amphi&action=edit&id=<?=$row['id']?>" class="btn btn-info" style="margin-right: 5px;" ><i class="fa fa-pencil"></i></a>
              <a href="" class="btn btn-danger" ><i class="fa fa-trash"></i></a>
            </td>
		</tr>
      <?php	
    }
    exit;
?>