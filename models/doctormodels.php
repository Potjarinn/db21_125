<?php
class doctorModels{
    public $doctor_id;
    public $name_D;
    public $phone_D;
    public $name_H;

    public function __construct($doctor_id,$name_D,$phone_D,$name_H)
    {
        $this->doctor_id = $doctor_id;
        $this->name_D = $name_D;
        $this->phone_D = $phone_D;
        $this->name_H = $name_H;
    }

    public static function get($doctor_id)
    {
        require("connection_connect.php");
        $sql = "SELECT doctor_id,name_D,phone_D,name_H
        FROM Hospital INNER JOIN Doctor ON Hospital.hospital_id = Doctor.hospital_id 
        WHERE doctor_id = $doctor_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $doctor_id = $my_row[doctor_id];
        $name_D = $my_row[name_D];
        $phone_D = $my_row[phone_D];
        $name_H = $my_row[name_H];
        require("connection_close.php");

        return new doctorModels($doctor_id,$name_D,$phone_D, $name_H);
    }

    public static function getAll()
    {
        $doctormodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT doctor_id,name_D,phone_D,name_H
        FROM Hospital INNER JOIN Doctor ON Hospital.hospital_id = Doctor.hospital_id";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $doctor_id = $my_row[doctor_id];
            $name_D = $my_row[name_D];
            $phone_D = $my_row[phone_D];
            $name_H = $my_row[name_H];
            $doctormodelList[] = new doctorModels($doctor_id,$name_D,$phone_D,$name_H);
        }
        require("connection_close.php");

        return $doctormodelList;
    }

    public static function search($key)
    {
        $doctormodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT doctor_id,name_D,phone_D,name_H 
        FROM Hospital INNER JOIN Doctor ON Hospital.hospital_id = Doctor.hospital_id
        where (doctor_id like '%$key%' or name_D like '%$key%' or 
        phone_D like '%$key%' or name_H like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $doctor_id = $my_row[doctor_id];
            $name_D = $my_row[name_D];
            $phone_D = $my_row[phone_D];
            $name_H = $my_row[name_H];
            $doctormodelList[] = new doctorModels($doctor_id,$name_D,$phone_D,$name_H);
        }
        require("connection_close.php");
        return $doctormodelList;
       
    }


    public static function Add($doctor_id,$name_D,$phone_D,$hospital_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Doctor`(`doctor_id`, `name_D`, `phone_D`, `hospital_id`) 
        VALUES ('$doctor_id','$name_D','$phone_D','$hospital_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($doctor_id,$name_D,$phone_D,$hospital_id,$doctorid)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Doctor` SET `doctor_id`='$doctor_id',`name_D`='$name_D',
        `phone_D`='$phone_D',`hospital_id`='$hospital_id' WHERE doctor_id='$doctorid' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($doctor_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Doctor` WHERE doctor_id = $doctor_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>