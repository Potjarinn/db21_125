<form method="get" action="">
    <br>
    <label>รหัสโรงพยาบาล<input type="text" name="hospital_id"/> </label><br>
    <label>ชื่อโรงพยาบาล<input type="text" name="name_H"/> </label><br>
    <label>หมายเลขโทรศัพท์<input type="text" name="phone_H"/> </label><br>
    <label>ที่อยู่โรงพยาบาล<input type="text" name="address_H"/> </label><br>
    <label>เขต<input type="text" name="county_H"/> </label><br>
    <label>จังหวัด<input type="text" name="province_H"/> </label><br>
    
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhospital">Save</button>
</form>