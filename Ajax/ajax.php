<?php
    //that's connection to the database
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "ytbclone";

    foreach($db as $key => $value) {
        define(strtoupper($key), $value);
    }

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(!$connection) {
        die ("Database Connexion Failed");
    } 
if(isset($_POST['branchVal']) ){
    $state1 = $_POST['branchVal'];
    $state2 = $_POST['branchLevelVal'];
    $query= "SELECT * FROM channels WHERE channeltitle = '$state1' AND videocount='$state2'";
    $select_all=mysqli_query($connection,$query);

    while($row=mysqli_fetch_assoc($select_all)){ 
     echo "<option>".$row['channeltitle']."</option>";
    }
 
    exit;
}
?>