<?php echo "<br>Are you sure to delete this Doctor? <br>
            <br>  doctor_id:$doctormodels->doctor_id  
            <br>name:$doctormodels->name_D  
            <br>phone:$doctormodels->phone_D  
            <br>hospital:$doctormodels->name_H<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="doctor"/>
    <input type="hidden" name="doctorid" value="<?php echo $doctormodels->doctor_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
