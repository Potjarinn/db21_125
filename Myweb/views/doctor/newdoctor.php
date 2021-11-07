<form method="get" action="">
    <br>
    <label>doctor_id<input type="text" name="doctor_id"/> </label><br>
    <label>name<input type="text" name="name_D"/> </label><br>
    <label>phone<input type="text" name="phone_D"/> </label><br>
    <label>hospital<select name="hospital_id">
        <?php foreach($hospitalmodellist2 as $newhospital){
            echo "<option value=$newhospital->hospital_id>$newhospital->name_H</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="doctor"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="adddoctor">Save</button>
</form>