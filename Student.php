<?php

include_once 'function.php';

$result=student();

$numresult= $result->num_rows;

echo

"<table border=1> <th>������</th> <th>��� ��������</th> <th>� �������</th>

<td colspan=2><a href='index.php?p=11&m=1'>��������</a></td>";

for ($i=0;$i<$numresult;$i++)

{

$row=$result->fetch_assoc();$idstudent=$row['idstudent']; $fiostudent=$row['fiostudent']; $idgrupa=$row['idgrupa']; $grupa=$row['grupa']; $nshifr=$row['nshifr'];

$i1=$i+1; echo

"<tr><td>$grupa</td> <td>$fiostudent</td> <td>$nshifr</td>
<td><a href='index.php?p=11&id=$idstudent&m=2'>��������</a></td>

<td><a href='index.php?p=11&id=$idstudent&m=3'>�������</a></td>";

}

echo "</table>

<p>���������� ������� - $numresult"; ?>