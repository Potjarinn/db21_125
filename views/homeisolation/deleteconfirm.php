<?php echo "<br><br>Are you sure to delete this Homeisolation? <br>
            <br>เลขบัตรประชาชน:$homeisolationmodels->id_card  
            <br>ชื่อผู้ป่วย:$homeisolationmodels->NamePeople $homeisolationmodels->LastnameP
            <br>ที่อยู่ผู้ป่วย:$homeisolationmodels->address_Home
            <br>เขต:$homeisolationmodels->county_Home  
            <br>จังหวัด:$homeisolationmodels->province_Home    
            <br>อาการเบื้อต้น:$homeisolationmodels->initial_symptoms 
            <br>รหัสATK:$homeisolationmodels->id_atk  
            <br>ชื่อแพทย์อาสาที่ดูแล:$homeisolationmodels->name_D 
            <br>ชื่อโรงพยาบาลที่ดูแล:$homeisolationmodels->name_H<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patientid" value="<?php echo $homeisolationmodels->patient_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>