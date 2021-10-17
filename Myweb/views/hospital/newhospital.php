<form method="get" action="">
    <br>
    <label>province<input type="text" name="province_H"/> </label><br>
    <label>name<input type="text" name="name_H"/> </label><br>
    <label>phone<input type="text" name="phone_H"/> </label><br>
    <label>address<input type="text" name="address_H"/> </label><br>
    <label>county<input type="text" name="county_H"/> </label><br>
    <label>hospital_id<input type="text" name="hospital_id"/> </label><br>
    
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhospital">Save</button>
</form>