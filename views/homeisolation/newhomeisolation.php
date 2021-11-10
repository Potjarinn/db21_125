<form method="get" action="">
    <br>
    <label>เลขบัตรประชาชน<select name="patient_id">
        <option value="">choose</option>
        <?php foreach($patienmodellist4 as $newpatien){
            echo "<option value=$newpatien->patient_id>$newpatien->id_card</option>";
        }?>
        </select></label><br>


    <label>ชื่อผู้ป่วย<select name="id_card">
        <option value="">choose</option>
        <?php foreach($peoplemodellist7 as $namep){
            echo "<option value=$namep->id_card>$namep->NamePeople $namep->LastnameP</option>";
        }?>
        </select></label><br>

    <label>ที่อยู่ผู้ป่วย<input type="text" name="address_Home"/> </label><br>
    <label>เขต<input type="text" name="county_Home"/> </label><br>
    <label>จังหวัด<input type="text" name="province_Home"/> </label><br>
    <label>อาการเบื้องต้น<input type="text" name="initial_symptoms"/> </label><br>
    

    <label>ชื่อแพทย์อาสาที่ดูแล<select name="doctor_id">
        <option value="">choose</option>
        <?php foreach($doctormodellist3 as $newdoctor){
            echo "<option value=$newdoctor->doctor_id>$newdoctor->name_D</option>";
        }?>
        </select></label><br>

    <label>ชื่อโรงพยาบาลที่ดูแล<select name="hospital_id">
        <option value="">choose</option>
        <?php foreach($hospitalmodellist2 as $newhospital){
            echo "<option value=$newhospital->hospital_id>$newhospital->name_H</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="homeisolation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhomeisolation">Save</button>
</form>