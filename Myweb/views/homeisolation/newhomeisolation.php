<form method="get" action="">
    <br>
    <?php foreach($patienmodellist4 as $newpatien){
            echo $newpatien->patient_id;
        }?>
       

    
    <label>IDcard<select name="patient_id">
        <?php foreach($patienmodellist4 as $newpatien){
            echo "<option value=$newpatien->patient_id>$newpatien->id_card</option>";
        }?>
        </select></label><br>

    <label>Address<input type="text" name="address_Home"/> </label><br>
    <label>County<input type="text" name="county_Home"/> </label><br>
    <label>Province<input type="text" name="province_Home"/> </label><br>
    <label>Color<input type="text" name="color_name"/> </label><br>
    
    <label>IDatk<select name="id_atk">
        <?php foreach($atkmodellist5 as $newatk){
            echo "<option value=$newatk->id_atk>$newatk->id_atk</option>";
        }?>
        </select></label><br>

    <label>Doctor<select name="doctor_id">
        <?php foreach($doctormodellist3 as $newdoctor){
            echo "<option value=$newdoctor->doctor_id>$newdoctor->name_D</option>";
        }?>
        </select></label><br>

    <label>Hospital<select name="hospital_id">
        <?php foreach($hospitalmodellist2 as $newhospital){
            echo "<option value=$newhospital->hospital_id>$newhospital->name_H</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="homeisolation"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhomeisolation">Save</button>
</form>
