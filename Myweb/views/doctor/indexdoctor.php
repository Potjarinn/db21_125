<br>
พจรินทร์ ประเสริฐศรี 6220503309
<br>new Doctor <a href=?controller=doctor&action=newdoctor>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="doctor"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 3>
<tr> <td>doctor_id</td>
<td>name</td>
<td>phone</td>
<td>hospital</td>
<td>update</td><td>delete</td> </tr>
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