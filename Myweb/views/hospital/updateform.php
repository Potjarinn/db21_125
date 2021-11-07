<form method="get" action="">

    <label>name <input type="text" name="name_H"
        value="<?php echo  $hospitalmodels->name_H;?>"/> </label><br>

    <label>phone <input type="text" name="phone_H"
        value="<?php echo  $hospitalmodels->phone_H;?>"/> </label><br>

    <label>address <input type="text" name="address_H"
        value="<?php echo  $hospitalmodels->address_H;?>"/> </label><br>
        
    <label>county <input type="text" name="county_H"
        value="<?php echo  $hospitalmodels->county_H;?>"/> </label><br>

    <label>province <input type="text" name="province_H"
        value="<?php echo  $hospitalmodels->province_H;?>"/> </label><br>

    <label>hospital_id <input type="text" name="hospital_id"
        value="<?php echo  $hospitalmodels->hospital_id;?>"/> </label><br>
       
    <input type="hidden" name="controller" value="hospital"/>
    <input type="hidden" name="hospitalid" value="<?php echo $hospitalmodels->hospital_id;?>"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>