<form method="get" action="">
    <br>
    <label>province<input type="text" name="province"/> </label><br>
    <label>name<input type="text" name="name"/> </label><br>
    <label>phone<input type="text" name="phone"/> </label><br>
    <label>address<input type="text" name="address"/> </label><br>
    <label>county<input type="text" name="county"/> </label><br>
    <label>hospital_id<select name ="hospital_id">
        <?php foreach($hospitalmodellist as $hospitalMlist)
        {
            echo "<option value=$hospitalMlist->hospital_id > $hospitalMlist->name</option>";
        }?>
        </select></label><br>
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addhospital">Save</button>
</form>