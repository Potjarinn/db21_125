<form method="get" action="">

    <label>IDcard <input type="text" name="patien_id">
        <?php foreach($patienmodellist as $patien){
            echo "<option value=$patien->patien_id";
            if($patien->patien_id==$homeisolationmodels->patien_id){
                echo "selected='selected'";
            }
            echo ">$patien->id_card</option>";
        }?>
        </select></label><br>  

    <label>Address <input type="text" name="address_Home"
        value="<?php echo  $homeisolationmodels->address_Home;?>"/> </label><br>

    <label>Color <input type="text" name="color_name"
        value="<?php echo  $homeisolationmodels->phone_D;?>"/> </label><br>
    
    <label>IDatk <select name="id_atk">
        <?php foreach($patienmodellist as $atk){
            echo "<option value=$atk->id_atk";
            if($atk->id_atk==$homeisolationmodels->id_atk){
                echo "selected='selected'";
            }
           // echo ">$atk->name_H</option>";
        }?>
        </select></label><br> 
        
    <label>Doctor <select name="doctor_id">
        <?php foreach($doctormodellist as $doctor){
            echo "<option value=$doctor->hospital_id";
            if($doctor->doctor_id==$homeisolationmodels->doctor_id){
                echo "selected='selected'";
            }
            echo ">$doctor->name_D</option>";
        }?>
        </select></label><br>    

    <label>Hospital <select name="hospital_id">
        <?php foreach($hospitalmodellist as $hospital){
            echo "<option value=$hospital->hospital_id";
            if($hospital->hospital_id==$homeisolationmodels->hospital_id){
                echo "selected='selected'";
            }
            echo ">$hospital->name_H</option>";
        }?>
        </select></label><br>    
    <input type="hidden" name="controller" value="homeisolation"/>
    <input type="hidden" name="patienid" value="<?php echo $homeisolationmodels->patien_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>