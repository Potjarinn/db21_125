<form method="get" action="">
    <br>
    <label>รหัสแพทย์อาสา<input type="text" name="doctor_id"/> </label><br>
    <label>ชื่อแพทย์อาสา<input type="text" name="name_D"/> </label><br>
    <label>หมายเลขโทรศัพท์<input type="text" name="phone_D"/> </label><br>
    <label>โรงพยาบาล<select name="hospital_id">
        <option value="">choose</option>
        <?php foreach($hospitalmodellist2 as $newhospital){
            echo "<option value=$newhospital->hospital_id>$newhospital->name_H</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="doctor"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="adddoctor">Save</button>
</form>