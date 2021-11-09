
<br>new Hospital <a href=?controller=hospital&action=newhospital>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 1>
<tr> <td>รหัสโรงพยาบาล</td>
<td>ชื่อโรงพยาบาล</td>
<td>หมายเลขโทรศัพท์</td>
<td>ที่อยู่โรงพยาบาล</td>
<td>เขต</td>
<td>จังหวัด</td>
<td>Update</td><td>Delete</td> </tr>
<?php foreach( $hospitalmodellist as  $hospitallist)
{
    echo "<tr> <td>$hospitallist->hospital_id</td>
    <td>$hospitallist->name_H</td>
    <td>$hospitallist->phone_H</td>
    <td>$hospitallist->address_H</td> 
    <td>$hospitallist->county_H</td> 
    <td>$hospitallist->province_H</td> 
    <td>  <a href=?controller=hospital&action=updateforms&hospital_id=$hospitallist->hospital_id> update </a> </td>
    <td>  <a href=?controller=hospital&action=deleteconfirm&hospital_id=$hospitallist->hospital_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>