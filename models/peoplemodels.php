<?php
class peopleModels{
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $Address;
    public $County;
    public $Province;
    public $Phone;

    public function __construct($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone)
    {
        $this->id_card = $id_card;
        $this->NamePeople= $NamePeople;
        $this->LastnameP = $LastnameP;
        $this->Address = $Address;
        $this->County = $County;
        $this->Province = $Province;
        $this->Phone = $Phone;
    }

    public static function getAll()
    {
        $peoplemodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `People`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];
            $Address = $my_row[Address];
            $County = $my_row[County];
            $Province = $my_row[Province];
            $Phone = $my_row[Phone];
            $peoplemodelList[] = new peopleModels($id_card,$NamePeople,$LastnameP,$Address,$County,$Province,$Phone);
     
        }
        require("connection_close.php");

        return $peoplemodelList;
    }

    
}?>