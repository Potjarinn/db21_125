<?php echo "<br><br>Are you sure to delete this Hospital? <br>
            <br>  รหัสโรงพยาบาล:$hospitalmodels->hospital_id  
            <br>ชื่อโรงพยาบาล:$hospitalmodels->name_H  
            <br>หมายเลขโทรศัพท์:$hospitalmodels->phone_H 
            <br>ที่อยู่โรงพยาบาล:$hospitalmodels->address_H  
            <br>เขต:$hospitalmodels->county_H 
            <br>จังหวัด:$hospitalmodels->province_H<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="hospitalid" value="<?php echo $hospitalmodels->hospital_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
