<form method="get" action="">

    <label>name <input type="text" name="name_H"
        value="<?php echo  $hospitalmodels->name;?>"/> </label><br>

    <label>phone <input type="text" name="phone_H"
        value="<?php echo  $hospitalmodels->phone;?>"/> </label><br>

    <label>address <input type="text" name="address_H"
        value="<?php echo  $hospitalmodels->address;?>"/> </label><br>
        
    <label>county <input type="text" name="county_H"
        value="<?php echo  $hospitalmodels->counnty;?>"/> </label><br>

    <label>province <input type="text" name="province_H"
        value="<?php echo  $hospitalmodels->province;?>"/> </label><br>

    <label>hospital_id <input type="text" name="hospital_id"
        value="<?php echo  $hospitalmodels->hospital_id;?>"/> </label><br>
       
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index"> Back </button>
    <button type="submit" name="action" value="update"> Update </button>
</form>