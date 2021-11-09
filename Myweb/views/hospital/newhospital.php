<form method="get" action="">
    <br>
    <label>Hospital_id<input type="text" name="hospital_id"/> </label><br>
    <label>Name<input type="text" name="name_H"/> </label><br>
    <label>Phone<input type="text" name="phone_H"/> </label><br>
    <label>Address<input type="text" name="address_H"/> </label><br>
    <label>County<input type="text" name="county_H"/> </label><br>
    <label>Province<input type="text" name="province_H"/> </label><br>
    
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhospital">Save</button>
</form>