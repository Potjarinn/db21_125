<?php
class atkModels{
    public $id_atk;
    public $date_atk;
    public $time_atk;
    public $results;
    public $id_b;
    public $id_staff_checkpoint;

    public function __construct($id_atk,$date_atk,$time_atk,$results,$id_b,$id_staff_checkpoint)
    {
        $this->id_atk = $id_atk;
        $this->date_atk= $date_atk;
        $this->time_atk = $time_atk;
        $this->results = $results;
        $this->id_b = $id_b;
        $this->id_staff_checkpoint = $id_staff_checkpoint;
    }

    public static function getAll()
    {
        $atkmodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `ATKtest`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_atk = $my_row[id_atk];
            $date_atk = $my_row[date_atk];
            $time_atk = $my_row[time_atk];
            $results = $my_row[results];
            $id_b = $my_row[id_b];
            $id_staff_checkpoint = $my_row[id_staff_checkpoint];
            $atkmodelList[] = new patienModels($id_atk,$date_atk,$time_atk,$results,$id_b,$id_staff_checkpoint);
        }
        require("connection_close.php");

        return $atkmodelList;
    }

    
}?>