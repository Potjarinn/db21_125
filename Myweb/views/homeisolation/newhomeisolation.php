<form method="get" action="">
    <br>
    <label>เลขบัตรประชาชน<select name="patient_id">
        <option value="">choose</option>
        <?php foreach($patienmodellist4 as $newpatien){
            echo "<option value=$newpatien->patient_id>$newpatien->id_card</option>";
        }?>
        </select></label><br>


    <label>ชื่อ<select name="id_card">
        <option value="">choose</option>
        <?php foreach($peoplemodellist7 as $namep){
            echo "<option value=$namep->id_card>$namep->NamePeople $namep->LastnameP</option>";
        }?>
        </select></label><br>

    <label>ที่อยู่<input type="text" name="address_Home"/> </label><br>
    <label>เขต<input type="text" name="county_Home"/> </label><br>
    <label>จังหวัด<input type="text" name="province_Home"/> </label><br>

    <label>สี<select name="color_name">
        <option value="">choose</option>
        <?php foreach($colormodellist6 as $newcolor){
            echo "<option value=$newcolor->color_name>$newcolor->color_name</option>";
        }?>
        </select></label><br>
    
    <label>รหัสATK<select name="id_atk">
        <option value="">choose</option>
        <?php foreach($atkmodellist5 as $newatk){
            echo "<option value=$newatk->id_atk>$newatk->id_atk</option>";
        }?>
        </select></label><br>

    <label>แพทย์อาสา<select name="doctor_id">
        <option value="">choose</option>
        <?php foreach($doctormodellist3 as $newdoctor){
            echo "<option value=$newdoctor->doctor_id>$newdoctor->name_D</option>";
        }?>
        </select></label><br>

    <label>โรงพยาบาล<select name="hospital_id">
        <option value="">choose</option>
        <?php foreach($hospitalmodellist2 as $newhospital){
            echo "<option value=$newhospital->hospital_id>$newhospital->name_H</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="homeisolation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhomeisolation">Save</button>
</form>
