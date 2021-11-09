<?php echo "<br>Are you sure to delete this Homeisolation? <br>
            <br>เลขบัตรประชาชน:$homeisolationmodels->id_card  
            <br>ชื่อ:$homeisolationmodels->NamePeople
            <br>นามสกุล:$homeisolationmodels->LastnameP
            <br>ที่อยู่:$homeisolationmodels->address_Home
            <br>เขต:$homeisolationmodels->county_Home  
            <br>จังหวัด:$homeisolationmodels->province_Home    
            <br>สี:$homeisolationmodels->color_name 
            <br>รหัสATK:$homeisolationmodels->id_atk  
            <br>แพทย์อาสา:$homeisolationmodels->name_D 
            <br>โรงพยาบาล:$homeisolationmodels->name_D<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patientid" value="<?php echo $homeisolationmodels->patient_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
