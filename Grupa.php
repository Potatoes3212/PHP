<?php

include_once 'function.php';

$result=grupa();

$numresult= $result->num_rows;

echo

"<table border=1> <th>������</th>

<td colspan=2><a href='index.php?p=21&m=1'>��������</a></td>";

for ($i=0;$i<$numresult;$i++)

{

$row=$result->fetch_assoc();$idgrupa=$row['idgrupa']; $grupa=$row['grupa'];

$i1=$i+1; echo

"<tr><td>$grupa</td> <td><a

href='index.php?p=21&m=2&id=$idgrupa'>��������</a></td> <td><a

href='index.php?p=21&m=3&id=$idgrupa'>�������</a></td>";

}

echo "</table>

<p>���������� ������� - $numresult<p>";

?>

