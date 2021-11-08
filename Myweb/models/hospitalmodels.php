<?php
class hospitalModels{
    public $hospital_id;
    public $name_H;
    public $phone_H;
    public $address_H;
    public $county_H;
    public $province_H;

    public function __construct($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H)
    {
        $this->hospital_id = $hospital_id;
        $this->name_H = $name_H;
        $this->phone_H = $phone_H;
        $this->address_H = $address_H;
        $this->county_H = $county_H;
        $this->province_H = $province_H;
    }

    public static function get($hospital_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `Hospital` WHERE hospital_id = $hospital_id";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $hospital_id = $my_row[hospital_id];
        $name_H = $my_row[name_H];
        $phone_H = $my_row[phone_H];
        $address_H = $my_row[address_H];
        $county_H = $my_row[county_H];
        $province_H = $my_row[province_H];
        require("connection_close.php");

        return new hospitalModels($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H);
    }

    public static function getAll()
    {
        $hospitalmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Hospital`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $hospital_id = $my_row[hospital_id];
            $name_H = $my_row[name_H];
            $phone_H = $my_row[phone_H];
            $address_H = $my_row[address_H];
            $county_H = $my_row[county_H];
            $province_H = $my_row[province_H];
            $hospitalmodelList[] = new hospitalModels($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H);
        echo $hospital_id;
        }
        require("connection_close.php");

        return $hospitalmodelList;
    }

    public static function search($key)
    {
        $hospitalmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Hospital` where (hospital_id like '%$key%' or name_H like '%$key%' or phone_H like '%$key%' or 
        address_H like '%$key%' or county_H like '%$key%' or province_H like '%$key%')";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $hospital_id = $my_row[hospital_id];
            $name_H = $my_row[name_H];
            $phone_H = $my_row[phone_H];
            $address_H = $my_row[address_H];
            $county_H = $my_row[county_H];
            $province_H = $my_row[province_H];
            $hospitalmodelList[] = new hospitalModels($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H);
        }
        require("connection_close.php");
        return $hospitalmodelList;
       
    }


    public static function Add($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Hospital`(`hospital_id`, `name_H`, `phone_H`, `address_H`, `county_H`, `province_H`) 
        VALUES ('$hospital_id','$name_H','$phone_H','$address_H','$county_H','$province_H')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($hospital_id,$name_H,$phone_H,$address_H,$county_H,$province_H,$hospitalid)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Hospital` SET `hospital_id`='$hospital_id',`name_H`='$name_H',`phone_H`='$phone_H',
        `address_H`='$address_H',`county_H`='$county_H',`province_H`='$province_H' WHERE hospital_id='$hospitalid' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($hospital_id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM `Hospital` WHERE hospital_id = $hospital_id";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}?>