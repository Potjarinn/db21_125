
<br>
Welcome HOME
</body></form></html>
<table border = 3>
<tr> <td>IDcard</td>
<td>Name</td>
<td>Lastname</td>
<td>Doctor</td>
<td>Hospital</td>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->NamePeople</td>
    <td>$homelist->LastnameP</td>
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> </tr>";
}
echo "</table>";
 ?>