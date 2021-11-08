<?php
class colorModels{
    public $color;
   
    public function __construct($color_name)
    {
        $this->color_name = $color_name;
    }

    public static function getAll()
    {
        $colormodelList  = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `color`";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $color_name = $my_row[color_name];
            $colormodelList[] = new colorModels($color_name);
     
        }
        require("connection_close.php");

        return $colormodelList;
    }

    
}?>