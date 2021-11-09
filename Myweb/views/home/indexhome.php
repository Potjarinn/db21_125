
</body></form></html>
<table border = 3>
<tr> <td>IDcard</td>
<td>Name</td>
<td>Lastname</td>
<td>Address</td>
<td>County</td>
<td>Province</td>
<td>Color</td>
<td>IDatk</td>
<td>Doctor</td>
<td>Hospital</td>
<td>Update</td><td>Delete</td> </tr>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->NamePeople</td>
    <td>$homelist->LastnameP</td>
    <td>$homelist->address_Home</td>
    <td>$homelist->county_Home</td> 
    <td>$homelist->province_Home</td>  
    <td>$homelist->color_name</td> 
    <td>$homelist->id_atk</td> 
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> </tr>";
}
echo "</table>";
 ?>