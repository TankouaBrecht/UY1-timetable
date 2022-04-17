<?php
    //that's connection to the database
    include 'db.php';
 $count=0;   
if(isset($_POST['timeVal']) ){
    $value1 = $_POST['timeVal'];
    $value2 = $_POST['dayVal'];
    
    $query_1= "SELECT * FROM course WHERE `time` = '$value1' AND `day` = '$value2'";
    $amphi_choice=mysqli_query($connection,$query_1);

    $query_2= "SELECT * FROM amphi ";
    $select_amphi=mysqli_query($connection,$query_2);
    ?>	
    <option selected>List of vacant amphi</option>
    <?php
    while($row=mysqli_fetch_assoc($select_amphi)){
        $v1 = $row['name'];
        while($data=mysqli_fetch_assoc($amphi_choice)){  
         $v2 = $data['id_amphi'];
        }
      if($v1 != $v2){
            ?>	
            <option value="<?= $row['name']?>"><?= $row['name']?></option>
          <?php
        }

    }

}

// 
if(isset($_POST['ueVal']) ){
    $value1 = $_POST['ueVal'];
    
    $query= "SELECT  * FROM ue  WHERE name = '$value1' ";
    $select_info=mysqli_query($connection,$query);
    while($row=mysqli_fetch_assoc($select_info)){
            $val= $row['class'];
        }

        $query= "SELECT  * FROM teachers WHERE faculty = '$val' ";
        $select_teacher=mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_teacher)){
                ?>	
                <option value="<?= $row['name']?>"><?= $row['name']?></option>
              <?php
            }
}

if( isset($_POST['amphiVal']) ){

  $query_1= "SELECT * FROM course ";
  $ue_choice=mysqli_query($connection,$query_1);

  $query_2= "SELECT * FROM ue ";
  $select_ue=mysqli_query($connection,$query_2);
  ?>	
  <option selected>List of available UE</option>
  <?php
  while($row=mysqli_fetch_assoc($select_ue)){
      $v1 = $row['name'];
      while($data=mysqli_fetch_assoc($ue_choice)){  
       $v2 = $data['id_ue'];
      }
    if($v1 != $v2){
          ?>	
          <option value="<?= $row['name']?>"><?= $row['name']?></option>
        <?php
      }

  }

}
?>