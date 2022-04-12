<?php
abstract class Model{
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=timetable;charset=utf8', 'root','');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBdd(){
        if(self::$_bdd == null){
            $this->setBdd();
            return self::$_bdd;
        }
    }
    
    // SELECT method
    protected function getAll($table, $obj){
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY name desc');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor(); 
    }

    protected function getbyId($table, $colum, $id, $obj){
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE ".$colum." = '$id' ");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor(); 
    }

    protected function getbydoubleId($table, $colum1, $id1, $colum2, $id2, $obj){
        $var = [];
        $req = self::$_bdd->prepare("SELECT * FROM ".$table." WHERE ".$colum1." = '$id1' AND ".$colum2." = '$id2' ");
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC)){
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor(); 
    }

    
    // INSERT INTO method
    protected function postAll($table, $obj){
        $req = 'INSERT INTO '.$table.' (`name`, `email`, `adress`, `phone`, `gender`, `picture`) 
        VALUES (:name, :email, :adress, :phone, :sex, :pic)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":name", $obj['name']);
        $stmt->bindParam(":email", $obj['email']);
        $stmt->bindParam(":adress", $obj['adress']);
        $stmt->bindParam(":phone", $obj['phone']);
        $stmt->bindParam(":sex", $obj['sex']);
        $stmt->bindParam(":pic", $obj['pic']);
        $stmt->execute();
    }


    // DELETE methode
    protected function delbyId($table, $colum, $id){
        $req = self::$_bdd->prepare("DELETE FROM ".$table." WHERE ".$colum." = '$id' ");
        $req->execute();
        $req->closeCursor(); 
    }

    protected function updatebyId($table,$colum,$val,$colum2,$id){
        $req = self::$_bdd->prepare("UPDATE  ".$table." SET  ".$colum." = '$val' WHERE ".$colum2." = '$id' ");
        $req->execute();
        $req->closeCursor(); 
    }
    protected function updateAll($name,$t1,$t2,$t3,$class,$tenue,$id){
        $req = self::$_bdd->prepare("UPDATE `students` SET `name`='$name',`tranche1`='$t1',`tranche2`='$t2',`tranche3`='$t3',`class`='$class',`tenue`='$tenue' WHERE `id`='$id' ");
        $req->execute();
        $req->closeCursor(); 
    }
}
?>