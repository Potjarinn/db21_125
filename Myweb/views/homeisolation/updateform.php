<form method="get" action="">
        
    <label>เลขบัตรประชาชน <select name="patient_id">
        <?php foreach($patienmodellist as $patien){
            echo "<option value=$patien->patient_id";
            if($patien->patient_id==$homeisolationmodels->patient_id){
                echo " selected='selected'";
            }
            echo ">$patien->id_card</option>";
        }?>
        </select></label><br>  

    <label>ชื่อ <select name="id_card">
        <?php foreach($peoplemodellist as $namep){
            echo "<option value=$namep->id_card";
            if($namep->id_card==$homeisolationmodels->id_card){
                echo " selected='selected'";
            }
            echo ">$namep->NamePeople $namep->LastnameP</option>";
        }?>
        </select></label><br> 

    <label>ที่อยู่ <input type="text" name="address_Home"
        value="<?php echo  $homeisolationmodels->address_Home;?>"/> </label><br>

    <label>เขต <input type="text" name="county_Home"
        value="<?php echo  $homeisolationmodels->county_Home;?>"/> </label><br>

    <label>จังหวัด <input type="text" name="province_Home"
        value="<?php echo  $homeisolationmodels->province_Home;?>"/> </label><br>

    <label>สี <select name="color_name">
        <?php foreach($colormodellist as $color){
            echo "<option value=$color->color_name";
            if($color->color_name==$homeisolationmodels->color_name){
                echo " selected='selected'";
            }
            echo ">$color->color_name</option>";
        }?>
        </select></label><br> 
    
    <label>รหัสATK <select name="id_atk">
        <?php foreach($atkmodellist as $atk){
            echo "<option value=$atk->id_atk";
            if($atk->id_atk==$homeisolationmodels->id_atk){
                echo " selected='selected'";
            }
            echo ">$atk->id_atk</option>";
        }?>
        </select></label><br> 
        
    <label>แพทย์อาสา <select name="doctor_id">
        <?php foreach($doctormodellist as $doctor){
            echo "<option value=$doctor->doctor_id";
            if($doctor->doctor_id==$homeisolationmodels->doctor_id){
                echo " selected='selected'";
            }
            echo ">$doctor->name_D</option>";
        }?>
        </select></label><br>    

    <label>โรงพยาบาล <select name="hospital_id">
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