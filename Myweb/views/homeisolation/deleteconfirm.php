<?php echo "<br>Are you sure to delete this Homeisolation? <br>
            <br>IDcard:$homeisolationmodels->id_card  
            <br>Name:$homeisolationmodels->NamePeople
            <br>Lastname:$homeisolationmodels->LastnameP
            <br>Address:$homeisolationmodels->address_Home
            <br>County:$homeisolationmodels->county_Home  
            <br>Province:$homeisolationmodels->province_Home    
            <br>Color:$homeisolationmodels->color_name 
            <br>IDatk:$homeisolationmodels->id_atk  
            <br>Doctor:$homeisolationmodels->name_D 
            <br>Hospital:$homeisolationmodels->name_D<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patientid" value="<?php echo $homeisolationmodels->patient_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
