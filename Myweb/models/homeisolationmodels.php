<?php
class homeisolationModels{
    public $patien_id;
    public $id_card;
    public $address_Home;
    public $color_name;
    public $id_atk;
    public $name_D;
    public $name_H;
    //public $doctor_id;
    //public $hospital_id;
   //$doctor_id,$hospital_id
    public function __construct($patien_id,$id_card,$address_Home,$color_name,$id_atk,$name_D,$name_H)
    {
        $this->patien_id = $patien_id;
        $this->id_card = $id_card;
        $this->address_Home = $address_Home;
        $this->color_name = $color_name;
        $this->id_atk = $id_atk;
        $this->name_D = $name_D;
        $this->name_H = $name_H;
       // $this->doctor_id = $doctor_id;
        //$this->hospital_id = $hospital_id;
    }

    public static function get($patien_id)
    {
        //, d.doctor_id, Hospital.hospital_id
        require("connection_connect.php");
        $sql = "SELECT d.patien_id,d.id_card,d.address_Home, d.color_name, d.id_atk, d.name_D, Hospital.name_H
        FROM Hospital INNER JOIN (SELECT  p.patien_id, p.id_card,p.address_Home, p.color_name, p.id_atk, p.hospital_id, Doctor.name_D, Doctor.doctor_id
        FROM Doctor INNER JOIN (SELECT * FROM Homeisolation INNER JOIN Patient ON Homeisolation.patien_id = Patient.patient_id) AS p 
        ON Doctor.doctor_id = p.doctor_id) AS d ON Hospital.hospital_id = d.hospital_id
        WHERE patien_id = $patien_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $patien_id = $my_row[patien_id];
        $id_card = $my_row[id_card];
        $address_Home = $my_row[address_Home];
        $color_name = $my_row[color_name];
        $id_atk = $my_row[id_atk];
        $name_D = $my_row[name_D];
        $name_H = $my_row[name_H];
        //$doctor_id = $my_row[doctor_id];
        //$hospital_id = $my_row[hospital_id];
        require("connection_close.php");

        return new homeisolationModels($patien_id,$id_card,$address_Home,$color_name,$id_atk,$name_D,$name_H);
    }

    public static function getAll()
    {
        $homeisolationmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT d.patien_id,d.id_card,d.address_Home, d.color_name, d.id_atk, d.name_D, Hospital.name_H
        FROM Hospital INNER JOIN (SELECT  p.patien_id, p.id_card,p.address_Home, p.color_name, p.id_atk, p.hospital_id, Doctor.name_D, Doctor.doctor_id
        FROM Doctor INNER JOIN (SELECT * FROM Homeisolation INNER JOIN Patient ON Homeisolation.patien_id = Patient.patient_id) AS p 
        ON Doctor.doctor_id = p.doctor_id) AS d ON Hospital.hospital_id = d.hospital_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patien_id = $my_row[patien_id];
            $id_card = $my_row[id_card];
            $address_Home = $my_row[address_Home];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $name_D = $my_row[name_D];
            $name_H = $my_row[name_H];
            //$doctor_id = $my_row[doctor_id];
            //$hospital_id = $my_row[hospital_id];
            $homeisolationmodelList[] = new homeisolationModels($patien_id,$id_card,$address_Home,$color_name,$id_atk,$name_D,$name_H);
        }
        require("connection_close.php");

        return $homeisolationmodelList;
    }

    public static function search($key)
    {
        $homeisolationmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT d.patien_id,d.id_card,d.address_Home, d.color_name, d.id_atk, d.name_D, Hospital.name_H
        FROM Hospital INNER JOIN (SELECT  p.patien_id, p.id_card,p.address_Home, p.color_name, p.id_atk, p.hospital_id, Doctor.name_D, Doctor.doctor_id
        FROM Doctor INNER JOIN (SELECT * FROM Homeisolation INNER JOIN Patient ON Homeisolation.patien_id = Patient.patient_id) AS p 
        ON Doctor.doctor_id = p.doctor_id) AS d ON Hospital.hospital_id = d.hospital_id
        where (d.patien_id like '%$key%' or d.id_card like '%$key%' or d.address_Home like '%$key%' or 
        d.color_name like '%$key%' or d.id_atk like '%$key%' or d.name_D like '%$key%' or Hospital.name_H like '%$key%')";//or d.doctor_id like '%$key%' or Hospital.hospital_id like '%$key%'
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patien_id = $my_row[patien_id];
            $id_card = $my_row[id_card];
            $address_Home = $my_row[address_Home];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $name_D = $my_row[name_D];
            $name_H = $my_row[name_H];
            //$doctor_id = $my_row[doctor_id];
            //$hospital_id = $my_row[hospital_id];
            $homeisolationmodelList[] = new homeisolationModels($patien_id,$id_card,$address_Home,$color_name,$id_atk,$name_D,$name_H);
        }
        require("connection_close.php");
        return $homeisolationmodelList;
       
    }


    public static function Add($patien_id,$address_Home,$color_name,$id_atk,$doctor_id,$hospital_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Homeisolation`(`patien_id`, `address_Home`, `color_name`, `id_atk`, `doctor_id`, `hospital_id`) 
        VALUES ('$patien_id','$address_Home','$color_name','$id_atk','$doctor_id','$hospital_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($patien_id,$address_Home,$color_name,$id_atk,$doctor_id,$hospital_id,$patienid)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Homeisolation` SET `patien_id`='$patien_id',`address_Home`='$address_Home',`color_name`='$color_name',
        `id_atk`='$id_atk',`doctor_id`='$doctor_id',`hospital_id`='$hospital_id' WHERE patien_id='$patienid' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($patien_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Homeisolation` WHERE patien_id = $patien_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>