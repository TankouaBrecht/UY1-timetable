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
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY faculty desc');
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
    protected function postTeacher($table, $obj){
        $req = 'INSERT INTO '.$table.' (`name`, `email`, `adress`, `phone`, `gender`, `picture`,`faculty`) 
        VALUES (:name, :email, :adress, :phone, :sex, :pic, :fac)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":name", $obj['name']);
        $stmt->bindParam(":email", $obj['email']);
        $stmt->bindParam(":adress", $obj['adress']);
        $stmt->bindParam(":phone", $obj['phone']);
        $stmt->bindParam(":sex", $obj['sex']);
        $stmt->bindParam(":pic", $obj['pic']);
        $stmt->bindParam(":fac", $obj['fac']);
        $stmt->execute();
    }

    protected function postCourse($table, $obj){
        $req = 'INSERT INTO '.$table.' (`name`, `libelle`, `semester`, `class`, `level`,`teacher`) 
        VALUES (:name, :libelle, :semester, :class, :level, :teacher)';
        $stmt = self::$_bdd->prepare($req);
        $stmt->bindParam(":name", $obj['name']);
        $stmt->bindParam(":libelle", $obj['libelle']);
        $stmt->bindParam(":semester", $obj['semester']);
        $stmt->bindParam(":class", $obj['class']);
        $stmt->bindParam(":level", $obj['level']);
        $stmt->bindParam(":teacher", $obj['teacher']);
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
    protected function updateTeachers($table,$name,$adress,$phone,$email,$faculty,$pic,$sex,$id){
        $req = self::$_bdd->prepare("UPDATE `$table` SET `name`='$name',`adress`='$adress',`phone`='$phone',`email`='$email',`faculty`='$faculty',`picture`='$pic',`gender`='$sex' WHERE `id`='$id' ");
        $req->execute();
        $req->closeCursor(); 
    }

    protected function updateCourses($table,$name,$libelle,$semester,$class,$level,$teacher,$id){
        $req = self::$_bdd->prepare("UPDATE `$table` SET `name`='$name',`libelle`='$libelle',`semester`='$semester',`class`='$class',`level`='$level',`teacher`='$teacher' WHERE `id`='$id' ");
        $req->execute();
        $req->closeCursor(); 
    }
}
?>