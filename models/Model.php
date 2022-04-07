<?php
abstract class Model{
    private static $_bdd;

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=school_manage;charset=utf8',
        'root','');
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
        $req = 'INSERT INTO '.$table.' (`name`, `tranche1`, `tranche2`, `tranche3`, `class`, `tenue`) 
        VALUES (:name, :t1, :t2, :t3, :class, :tenue)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":name", $obj['name']);
        $stmt->bindParam(":t1", $obj['t1']);
        $stmt->bindParam(":t2", $obj['t2']);
        $stmt->bindParam(":t3", $obj['t3']);
        $stmt->bindParam(":class", $obj['class']);
        $stmt->bindParam(":tenue", $obj['tenue']);
        $stmt->execute();
    }

    protected function postHistory($table, $obj){
        $req = 'INSERT INTO '.$table.' (`videoid`, `videotitle`, `channelid`, `channeltitle`, `username`, `thumburl`, `date`) 
        VALUES (:vid, :vtitle, :cid, :ctitle, :username, :thumburl, :dpublish)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":vid", $obj['vid']);
        $stmt->bindParam(":vtitle", $obj['vtitle']);
        $stmt->bindParam(":cid", $obj['cid']);
        $stmt->bindParam(":ctitle", $obj['ctitle']);
        $stmt->bindParam(":username", $obj['username']);
        $stmt->bindParam(":thumburl", $obj['turl']);
        $stmt->bindParam(":dpublish", $obj['dpublish']);
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