<br>
พจรินทร์ ประเสริฐศรี 6220503309
<br>new Homeisolation <a href=?controller=homeisolation&action=newhomeisolation>Click</a><br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="homeisolation"/>
    <button type="submit" name="action" value="search">
Search</button>
</body></form></html>
<table border = 3>
<tr> <td>IDcard</td>
<td>Address</td>
<td>Color</td>
<td>IDatk</td>
<td>Doctor</td>
<td>Hospital</td>
<td>update</td><td>delete</td> </tr>
<?php foreach( $homeisolationmodellist as  $homelist)
{
    echo "<tr> <td>$homelist->id_card</td>
    <td>$homelist->address_Home</td> 
    <td>$homelist->color_name</td> 
    <td>$homelist->id_atk</td> 
    <td>$homelist->name_D</td> 
    <td>$homelist->name_H</td> 
    <td>  <a href=?controller=homeisolation&action=updateforms&patien_id=$homelist->patien_id> update </a> </td>
    <td>  <a href=?controller=homeisolation&action=deleteconfirm&patien_id=$homelist->patien_id> delete</a> </td></tr>";
}
echo "</table>";
 ?>