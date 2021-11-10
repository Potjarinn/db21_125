<form method="get" action="">

    <br><br><label>รหัสแพทย์อาสา <input type="text" name="doctor_id"
        value="<?php echo  $doctormodels->doctor_id;?>"/> </label><br>

    <label>ชื่อแพทย์อาสา <input type="text" name="name_D"
        value="<?php echo  $doctormodels->name_D;?>"/> </label><br>

    <label>หมายเลขโทรศัพท์ <input type="text" name="phone_D"
        value="<?php echo  $doctormodels->phone_D;?>"/> </label><br>

    <label>สังกัดโรงพยาบาล <select name="hospital_id">
        <?php foreach($hospitalmodellist as $hospital){
            echo "<option value=$hospital->hospital_id";
            if($hospital->hospital_id==$doctormodels->hospital_id){
                echo "selected='selected'";
            }
            echo ">$hospital->name_H</option>";
        }?>
        </select></label><br>    
    <input type="hidden" name="controller" value="doctor"/>
    <input type="hidden" name="doctorid" value="<?php echo $doctormodels->doctor_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>