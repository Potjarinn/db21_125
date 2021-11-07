<?php
class patienModels{
    public $patien_id;
    public $id_card;
    public $type_P;
    public $color_name;
    public $id_atk;

    public function __construct($patien_id,$id_card,$type_P,$color_name,$id_atk)
    {
        $this->patien_id = $patien_id;
        $this->id_card = $id_card;
        $this->type_P = $type_P;
        $this->color_name = $color_name;
        $this->id_atk = $id_atk;
    }

    public static function getAll()
    {
        $patienmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Patient`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patien_id = $my_row[patien_id];
            $id_card = $my_row[id_card];
            $type_P = $my_row[type_P];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $patienmodelList[] = new patienModels($patien_id,$id_card,$type_P,$color_name,$id_atk);
        }
        require("connection_close.php");

        return $patienmodelList;
    }

    
}?>