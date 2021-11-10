<br><br>new Homeisolation <a href=?controller=homeisolation&action=newhomeisolation>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="homeisolation"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 1>
<tr> <td><b>เลขบัตรประชาชน</td>
<td><b>ชื่อผู้ป่วย</td>
<td><b>ที่อยู่ผู้ป่วย</td>
<td><b>เขต</td>
<td><b>จังหวัด</td>
<td><b>อาการเบื้องต้น</td>
<td><b>รหัสATK</td>
<td><b>ชื่อแพทย์อาสาที่ดูแล</td>
<td><b>ชื่อโรงพยาบาลที่ดูแล</td>
<td><b>Update</td><td><b>Delete</td> </tr>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->NamePeople $homelist->LastnameP</td>
    <td>$homelist->address_Home</td>
    <td>$homelist->county_Home</td> 
    <td>$homelist->province_Home</td>  
    <td>$homelist->initial_symptoms</td> 
    <td>$homelist->id_atk</td> 
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> 
    <td>  <a href=?controller=homeisolation&action=updateforms&patient_id=$homelist->patient_id> update </a> </td>
    <td>  <a href=?controller=homeisolation&action=deleteconfirm&patient_id=$homelist->patient_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>