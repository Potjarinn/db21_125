<form method="get" action="">

    <label>name <input type="text" name="name"
        value="<?php echo  $hospitalmodels->name;?>"/> </label><br>

    <label>phone <input type="text" name="phone"
        value="<?php echo  $hospitalmodels->phone;?>"/> </label><br>

    <label>address <input type="text" name="address"
        value="<?php echo  $hospitalmodels->address;?>"/> </label><br>
        
    <label>county <input type="text" name="county"
        value="<?php echo  $hospitalmodels->counnty;?>"/> </label><br>

    <label>province <input type="text" name="province"
        value="<?php echo  $hospitalmodels->province;?>"/> </label><br>

    <label>hospital_id <select name ="hospital_id">
        <?php foreach($hospitalmodellist as $hospitalmlist)
        {
            echo "<option value=$hospitalmlist->hospital_id ";
            if($hospitalmlist->hospital_id== $hospitalmodels->hospital_id)
            {
                echo " selected='selected'";
            }
           // echo "> $hospitalmlist->name</option>";
        }?>
        </select></label><br>
       
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="hospitalid" value="<?php echo $hospitalmodels->hospital_id; ?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>