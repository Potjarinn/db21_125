<br>
พจรินทร์ ประเสริฐศรี 6220503309
<br>new Hospital <a href=?controller=hospital&action=newhospital>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="hospital"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 3>
<tr> <td>hospital_id</td>
<td>name</td>
<td>phone</td>
<td>address</td>
<td>county</td>
<td>province</td>
<td>update</td><td>delete</td> </tr>
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