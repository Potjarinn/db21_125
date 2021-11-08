<?php
class patienModels{
    public $patient_id;
    public $id_card;
    public $type_P;
    public $color_name;
    public $id_atk;

    public function __construct($patient_id,$id_card,$type_P,$color_name,$id_atk)
    {
        $this->patient_id = $patient_id;
        $this->id_card = $id_card;
        $this->type_P = $type_P;
        $this->color_name = $color_name;
        $this->id_atk = $id_atk;
    }

    public static function getAll()
    {
        echo yy;
        $patientmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `Patient`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $patient_id = $my_row[patient_id];
            $id_card = $my_row[id_card];
            $type_P = $my_row[type_P];
            $color_name = $my_row[color_name];
            $id_atk = $my_row[id_atk];
            $patientmodelList[] = new patienModels($patient_id,$id_card,$type_P,$color_name,$id_atk);
        echo $patient_id;
        }
        require("connection_close.php");

        return $patientmodelList;
    }

    
}?>