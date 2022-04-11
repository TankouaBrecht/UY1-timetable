<?php
    //that's connection to the database
    include 'db.php';
    
if(isset($_POST['branchVal']) ){
    $state1 = $_POST['branchVal'];
    $state2 = $_POST['branchLevelVal'];
    $query= "SELECT * FROM channels WHERE channeltitle = '$state1' AND videocount='$state2'";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
     echo "<option>".$row['channelid']."</option>";
    }
 
    exit;
}
?>