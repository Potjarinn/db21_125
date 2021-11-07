<?php echo "<br>Are you sure to delete this student <br>
            <br>IDcard:$homeisolaationmodels->id_card  
            <br>Address:$homeisolaationmodels->address_Home  
            <br>Color:$homeisolaationmodels->color_name 
            <br>IDatk:$homeisolaationmodels->id_atk  
            <br>Doctor:$homeisolaationmodels->name_D 
            <br>Hospital:$homeisolaationmodels->name_D<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patienid" value="<?php echo $homeisolaationmodels->patien_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="delete">Delete</button>
</form>
