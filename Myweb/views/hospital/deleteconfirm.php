<?php echo "<br>Are you sure to delete this Hospital? <br>
            <br>  Hospital_id:$hospitalmodels->hospital_id  
            <br>Name:$hospitalmodels->name_H  
            <br>Phone:$hospitalmodels->phone_H 
            <br>Address:$hospitalmodels->address_H  
            <br>County:$hospitalmodels->county_H 
            <br>Province:$hospitalmodels->province_H<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="hospitalid" value="<?php echo $hospitalmodels->hospital_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
