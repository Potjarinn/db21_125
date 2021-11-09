
<br>new Doctor <a href=?controller=doctor&action=newdoctor>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="doctor"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 1>
<tr> <td>รหัสแพทย์อาสา</td>
<td>ชื่อแพทย์อาสา</td>
<td>หมายเลขโทรศัพท์</td>
<td>สังกัดโรงพยาบาล</td>
<td>Update</td><td>Delete</td> </tr>
<?php foreach( $doctormodellist as  $doctorlist)
{
    echo "<tr> <td>$doctorlist->doctor_id</td>
    <td>$doctorlist->name_D</td>
    <td>$doctorlist->phone_D</td> 
    <td>$doctorlist->name_H</td> 
    <td>  <a href=?controller=doctor&action=updateforms&doctor_id=$doctorlist->doctor_id> update </a> </td>
    <td>  <a href=?controller=doctor&action=deleteconfirm&doctor_id=$doctorlist->doctor_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>