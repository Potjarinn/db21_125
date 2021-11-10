<br>
<br>
Welcome to our homepage
<br><br>
การจับคู่ผู้ป่วย Home isolation กับแพทย์อาสาและโรงพยาบาล
<br><br>
</body></form></html>
<table border = 3>
<tr> <td><b>เลขบัตรประชาชนผู้ป่วย homeisolation</td>
<td><b>ชื่อผู้ป่วย Homeisolation</td>
<td><b>ชื่อแพทย์อาสาที่ดูแล</td>
<td><b>ชื่อโรงพยาบาลที่ดูแล</td>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->NamePeople $homelist->LastnameP</td>
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> </tr>";
}
echo "</table>";
 ?>