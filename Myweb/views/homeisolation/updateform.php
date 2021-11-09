<form method="get" action="">
        
    <label>IDcard <select name="patient_id">
        <?php foreach($patienmodellist as $patien){
            echo "<option value=$patien->patient_id";
            if($patien->patient_id==$homeisolationmodels->patient_id){
                echo " selected='selected'";
            }
            echo ">$patien->id_card</option>";
        }?>
        </select></label><br>  

    <label>Name <input type="text" name="NamePeople"
        value="<?php echo  $homeisolationmodels->NamePeople;?>"/> </label><br>

    <label>Lastname <input type="text" name="LastnameP"
        value="<?php echo  $homeisolationmodels->LastnameP;?>"/> </label><br>

    <label>Address <input type="text" name="address_Home"
        value="<?php echo  $homeisolationmodels->address_Home;?>"/> </label><br>

    <label>County <input type="text" name="county_Home"
        value="<?php echo  $homeisolationmodels->county_Home;?>"/> </label><br>

    <label>Province <input type="text" name="province_Home"
        value="<?php echo  $homeisolationmodels->province_Home;?>"/> </label><br>

    <label>Color <select name="color_name">
        <?php foreach($colormodellist as $color){
            echo "<option value=$color->color_name";
            if($color->color_name==$homeisolationmodels->color_name){
                echo " selected='selected'";
            }
            echo ">$color->color_name</option>";
        }?>
        </select></label><br> 
    
    <label>IDatk <select name="id_atk">
        <?php foreach($atkmodellist as $atk){
            echo "<option value=$atk->id_atk";
            if($atk->id_atk==$homeisolationmodels->id_atk){
                echo " selected='selected'";
            }
            echo ">$atk->id_atk</option>";
        }?>
        </select></label><br> 
        
    <label>Doctor <select name="doctor_id">
        <?php foreach($doctormodellist as $doctor){
            echo "<option value=$doctor->doctor_id";
            if($doctor->doctor_id==$homeisolationmodels->doctor_id){
                echo " selected='selected'";
            }
            echo ">$doctor->name_D</option>";
        }?>
        </select></label><br>    

    <label>Hospital <select name="hospital_id">
        <?php foreach($hospitalmodellist as $hospital){
            echo "<option value=$hospital->hospital_id";
            if($hospital->hospital_id==$homeisolationmodels->hospital_id){
                echo " selected='selected'";
            }
            echo ">$hospital->name_H</option>";
        }?>
        </select></label><br>  
        
        
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patientid" value="<?php echo $homeisolationmodels->patient_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>