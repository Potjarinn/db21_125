
<br>
Welcome HOME
</body></form></html>
<table border = 3>
<tr> <td>เลขบัตรประชาชนผู้ป่วย homeisolation</td>
<td>ชื่อผู้ป่วย Homeisolation</td>
<td>แพทย์อาสา</td>
<td>โรงพยาบาล</td>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->NamePeople $homelist->LastnameP</td>
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> </tr>";
}
echo "</table>";
 ?>