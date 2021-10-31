<?php echo "<br>Are you sure to delete this student <br>
            <br>  hospital_id:$hospitalmodels->hospital_id  
            <br>name:$hospitalmodels->name_H  
            <br>phone:$hospitalmodels->phone_H 
            <br>address:$hospitalmodels->address_H  
            <br>county:$hospitalmodels->county_H 
            <br>province:$hospitalmodels->province_H<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="hospitalid " value="<?php echo $hospitalmodels->hospital_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
