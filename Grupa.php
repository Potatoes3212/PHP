<?php

include_once 'function.php';

$result=grupa();

$numresult= $result->num_rows;

echo

"<table border=1> <th>Группа</th>

<td colspan=2><a href='index.php?p=21&m=1'>Добавить</a></td>";

for ($i=0;$i<$numresult;$i++)

{

$row=$result->fetch_assoc();$idgrupa=$row['idgrupa']; $grupa=$row['grupa'];

$i1=$i+1; echo

"<tr><td>$grupa</td> <td><a

href='index.php?p=21&m=2&id=$idgrupa'>Изменить</a></td> <td><a

href='index.php?p=21&m=3&id=$idgrupa'>Удалить</a></td>";

}

echo "</table>

<p>Количество записей - $numresult<p>";

?>

