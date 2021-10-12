<?php
class hospitalModels{
    public $hospital_id;
    public $name;
    public $phone;
    public $address;
    public $county;
    public $province;

    public function __construct($hospital_id,$name,$phone,$address,$county,$province)
    {
        $this->hospital_id = $hospital_id;
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->county = $county;
        $this->province = $province;
    }

    public static function get($hospital_id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `Hospital`";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $hospital_id = $my_row[hospital_id];
        $name = $my_row[name];
        $phone = $my_row[phone];
        $address = $my_row[address];
        $county = $my_row[county];
        $province = $my_row[province];
        require("connection_close.php");

        return new hospitalModels($hospital_id,$name,$phone,$address,$county,$province);
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
            $name = $my_row[name];
            $phone = $my_row[phone];
            $address = $my_row[address];
            $county = $my_row[county];
            $province = $my_row[province];
            $hospitalmodelList[] = new hospitalModels($hospital_id,$name,$phone,$address,$county,$province);
        }
        require("connection_close.php");

        return $hospitalmodelList;
    }


    public static function Add($hospital_id,$name,$phone,$address,$county,$province)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Hospital`(`hospital_id`, `name`, `phone`, `address`, `county`, `province`) 
        VALUES ('$hospital_id','$name','$phone',$address,'$county','$province')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    public static function update($hospital_id,$name,$phone,$address,$county,$province,$hospitalid)
    {
        require("connection_connect.php");
        $sql = "UPDATE `Hospital` SET `hospital_id`='$hospital_id',`name`='$name',`phone`='$phone',
        `address`=$address,`county`='$county',`province`='$province' WHERE hospital_id='$hospitalid' ";
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