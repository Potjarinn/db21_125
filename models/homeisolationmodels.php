<?php
class homeisolationModels{
    public $patient_id;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $address_Home;
    public $county_Home;
    public $province_Home;
    public $color_name;
    public $id_atk;
    public $name_D;
    public $name_H;
    public $doctor_id;
    public $hospital_id;
    public $status_show;
    public $initial_symptoms;
   
    public function __construct($patient_id,$id_card,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home,$color_name,$id_atk,$name_D,$name_H,$doctor_id,$hospital_id,$status_show,$initial_symptoms)
    {
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->NamePeople = $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->address_Home = $address_Home;
        $this->county_Home = $county_Home;
        $this->province_Home = $province_Home;
        $this->color_name = $color_name;
        $this->id_atk = $id_atk;
        $this->name_D = $name_D;
        $this->name_H = $name_H;
        $this->doctor_id = $doctor_id;
        $this->hospital_id = $hospital_id;
        $this->status_show = $status_show;
        $this->initial_symptoms = $initial_symptoms;
    }

    public static function get($patient_id)
    {
        
        require("connection_connect.php");
        $sql = "SELECT p.patient_id, p.id_card, People.NamePeople, People.LastnameP, p.address_Home, p.county_Home, p.province_Home, p.color_name, p.id_atk, p.name_D, p.name_H, p.hospital_id, p.doctor_id, p.status_show, p.initial_symptoms
        FROM People INNER JOIN (SELECT d.patient_id, d.id_card, d.address_Home, d.county_Home, d.province_Home, d.color_name, 
                d.id_atk, d.name_D, Hospital.name_H,Hospital.hospital_id, d.doctor_id, d.status_show, d.initial_symptoms
                FROM Hospital INNER JOIN (SELECT p.patient_id, p.id_card, p.address_Home, p.county_Home, 
                p.province_Home, p.color_name, p.id_atk, Doctor.doctor_id, Doctor.name_D, p.hospital_id, p.status_show, p.initial_symptoms
                FROM Doctor INNER JOIN (SELECT Patient.patient_id, Patient.id_card, Patient.color_name,Patient.id_atk,Homeisolation.address_Home, 
                Homeisolation.county_Home,Homeisolation.province_Home,
                Homeisolation.doctor_id,Homeisolation.hospital_id,Homeisolation.status_show,Homeisolation.initial_symptoms   
                FROM Homeisolation INNER JOIN Patient ON Homeisolation.patient_id = Patient.patient_id) AS p ON Doctor.doctor_id = p.doctor_id) AS d 
                ON d.hospital_id = Hospital.hospital_id) AS p ON People.id_card = p.id_card WHERE patient_id = '$patient_id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $patient_id = $my_row[patient_id];
        $id_card = $my_row[id_card];
        $NamePeople = $my_row[NamePeople];
        $LastnameP = $my_row[LastnameP];
        $address_Home = $my_row[address_Home];
        $county_Home = $my_row[county_Home];
        $province_Home = $my_row[province_Home];
        $color_name = $my_row[color_name];
        $id_atk = $my_row[id_atk];
        $name_D = $my_row[name_D];
        $name_H = $my_row[name_H];
        $doctor_id = $my_row[doctor_id];
        $hospital_id = $my_row[hospital_id];
        $status_show = $my_row[status_show];
        $initial_symptoms = $my_row[initial_symptoms];
        require("connection_close.php");

        return new homeisolationModels($patient_id,$id_card,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home,$color_name,$id_atk,$name_D,$name_H,$doctor_id,$hospital_id,$status_show,$initial_symptoms);
    }

    public static function getAll()
    {
        $homeisolationmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT p.patient_id, p.id_card, People.NamePeople, People.LastnameP, p.address_Home, p.county_Home, p.province_Home, p.color_name, p.id_atk, p.name_D, p.name_H, p.hospital_id, p.doctor_id, p.status_show, p.initial_symptoms
        FROM People INNER JOIN (SELECT d.patient_id, d.id_card, d.address_Home, d.county_Home, d.province_Home, d.color_name, 
                d.id_atk, d.name_D, Hospital.name_H,Hospital.hospital_id, d.doctor_id, d.status_show, d.initial_symptoms
                FROM Hospital INNER JOIN (SELECT p.patient_id, p.id_card, p.address_Home, p.county_Home, 
                p.province_Home, p.color_name, p.id_atk, Doctor.doctor_id, Doctor.name_D, p.hospital_id, p.status_show, p.initial_symptoms
                FROM Doctor INNER JOIN (SELECT Patient.patient_id, Patient.id_card, Patient.color_name,Patient.id_atk,Homeisolation.address_Home, 
                Homeisolation.county_Home,Homeisolation.province_Home,
                Homeisolation.doctor_id,Homeisolation.hospital_id,Homeisolation.status_show,Homeisolation.initial_symptoms   
                FROM Homeisolation INNER JOIN Patient ON Homeisolation.patient_id = Patient.patient_id) AS p ON Doctor.doctor_id = p.doctor_id) AS d 
                ON d.hospital_id = Hospital.hospital_id) AS p ON People.id_card = p.id_card";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $address_Home = $my_row[address_Home];
            $county_Home = $my_row[county_Home];
            $province_Home = $my_row[province_Home];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $name_D = $my_row[name_D];
            $name_H = $my_row[name_H];
            $doctor_id = $my_row[doctor_id];
            $hospital_id = $my_row[hospital_id];
            $status_show = $my_row[status_show];
            $initial_symptoms = $my_row[initial_symptoms];
            $homeisolationmodelList[] = new homeisolationModels($patient_id,$id_card,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home,$color_name,$id_atk,$name_D,$name_H,$doctor_id,$hospital_id,$status_show,$initial_symptoms);
        }
        require("connection_close.php");

        return $homeisolationmodelList;
    }

    public static function getAllshow()
    {
        $homeisolationmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT p.patient_id, p.id_card, People.NamePeople, People.LastnameP, p.address_Home, p.county_Home, p.province_Home, p.color_name, p.id_atk, p.name_D, p.name_H, p.hospital_id, p.doctor_id, p.status_show, p.initial_symptoms
        FROM People INNER JOIN (SELECT d.patient_id, d.id_card, d.address_Home, d.county_Home, d.province_Home, d.color_name, 
                d.id_atk, d.name_D, Hospital.name_H,Hospital.hospital_id, d.doctor_id, d.status_show, d.initial_symptoms
                FROM Hospital INNER JOIN (SELECT p.patient_id, p.id_card, p.address_Home, p.county_Home, 
                p.province_Home, p.color_name, p.id_atk, Doctor.doctor_id, Doctor.name_D, p.hospital_id, p.status_show, p.initial_symptoms
                FROM Doctor INNER JOIN (SELECT Patient.patient_id, Patient.id_card, Patient.color_name,Patient.id_atk,Homeisolation.address_Home, 
                Homeisolation.county_Home,Homeisolation.province_Home,
                Homeisolation.doctor_id,Homeisolation.hospital_id,Homeisolation.status_show,Homeisolation.initial_symptoms   
                FROM Homeisolation INNER JOIN Patient ON Homeisolation.patient_id = Patient.patient_id) AS p ON Doctor.doctor_id = p.doctor_id) AS d 
                ON d.hospital_id = Hospital.hospital_id) AS p ON People.id_card = p.id_card
                WHERE p.status_show = 1 ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $address_Home = $my_row[address_Home];
            $county_Home = $my_row[county_Home];
            $province_Home = $my_row[province_Home];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $name_D = $my_row[name_D];
            $name_H = $my_row[name_H];
            $doctor_id = $my_row[doctor_id];
            $hospital_id = $my_row[hospital_id];
            $status_show = $my_row[status_show];
            $initial_symptoms = $my_row[initial_symptoms];
            $homeisolationmodelList[] = new homeisolationModels($patient_id,$id_card,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home,$color_name,$id_atk,$name_D,$name_H,$doctor_id,$hospital_id,$status_show,$initial_symptoms);
        }
        require("connection_close.php");

        return $homeisolationmodelList;
    }

    public static function search($key)
    {
        $homeisolationmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT p.patient_id, p.id_card, People.NamePeople, People.LastnameP, p.address_Home, p.county_Home, p.province_Home, 
        p.color_name, p.id_atk, p.name_D, p.name_H, p.hospital_id, p.doctor_id, p.status_show, p.initial_symptoms
        FROM People INNER JOIN (SELECT d.patient_id, d.id_card, d.address_Home, d.county_Home, d.province_Home, d.color_name, 
                d.id_atk, d.name_D, Hospital.name_H,Hospital.hospital_id, d.doctor_id, d.status_show, d.initial_symptoms
                FROM Hospital INNER JOIN (SELECT p.patient_id, p.id_card, p.address_Home, p.county_Home, 
                p.province_Home, p.color_name, p.id_atk, Doctor.doctor_id, Doctor.name_D, p.hospital_id, p.status_show, p.initial_symptoms
                FROM Doctor INNER JOIN (SELECT Patient.patient_id, Patient.id_card, Patient.color_name,Patient.id_atk,Homeisolation.address_Home, 
                Homeisolation.county_Home,Homeisolation.province_Home,
                Homeisolation.doctor_id,Homeisolation.hospital_id,Homeisolation.status_show,Homeisolation.initial_symptoms   
                FROM Homeisolation INNER JOIN Patient ON Homeisolation.patient_id = Patient.patient_id) AS p ON Doctor.doctor_id = p.doctor_id) AS d 
                ON d.hospital_id = Hospital.hospital_id) AS p ON People.id_card = p.id_card
        where (p.patient_id like '%$key%' or p.id_card like '%$key%' or People.NamePeople like '%$key%' or People.LastnameP like '%$key%' or 
        p.address_Home like '%$key%' or p.county_Home like '%$key%' or p.province_Home like '%$key%' or p.color_name like '%$key%' or p.id_atk like '%$key%' or 
        p.name_D like '%$key%' or p.name_H like '%$key%'or p.doctor_id like '%$key%' or p.hospital_id like '%$key%' or p.status_show like '%$key%'
        or p.initial_symptoms like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $address_Home = $my_row[address_Home];
            $county_Home = $my_row[county_Home];
            $province_Home = $my_row[province_Home];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $name_D = $my_row[name_D];
            $name_H = $my_row[name_H];
            $doctor_id = $my_row[doctor_id];
            $hospital_id = $my_row[hospital_id];
            $status_show = $my_row[status_show];
            $initial_symptoms = $my_row[initial_symptoms];
            $homeisolationmodelList[] = new homeisolationModels($patient_id,$id_card,$NamePeople,$LastnameP,$address_Home,$county_Home,$province_Home,$color_name,$id_atk,$name_D,$name_H,$doctor_id,$hospital_id,$status_show,$initial_symptoms);
        }
        require("connection_close.php");
        return $homeisolationmodelList;
       
    }


    public static function Add($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id,$initial_symptoms)
    {
       
        require("connection_connect.php");
        $sql = "INSERT INTO `Homeisolation`(`patient_id`, `address_Home`, `county_Home`, `province_Home`, `doctor_id`, `hospital_id`, `status_show`, `initial_symptoms`) 
        VALUES ('$patient_id','$address_Home','$county_Home','$province_Home','$doctor_id','$hospital_id','1','$initial_symptoms')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }


    public static function update($patient_id,$address_Home,$county_Home,$province_Home,$doctor_id,$hospital_id,$patientid,$initial_symptoms)
    {
    
        require("connection_connect.php");
        $sql = "UPDATE Homeisolation
        SET patient_id = '$patient_id' , address_Home = '$address_Home', county_Home = '$county_Home' , province_Home = '$province_Home' , doctor_id= '$doctor_id', hospital_id = '$hospital_id', initial_symptoms = '$initial_symptoms'
        WHERE patient_id = '$patientid'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($patient_id)
    {
        require("connection_connect.php");
        $sql = "UPDATE Homeisolation SET Homeisolation.status_show = '0' WHERE Homeisolation.patient_id = '$patient_id'";
       // $sql = "DELETE FROM `Homeisolation` WHERE patient_id = '$patient_id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>