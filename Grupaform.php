<?php

include_once 'function.php';

$m=$_REQUEST['m'];

if ($m==1)

{

echo "<h2>�������� ������</h2>

<form action='index.php' method=post> <input type='hidden' name='m' value=1> <input type='hidden' name='p' value=22> <table border=0>

<tr> <th>������</th>

<td><input type='text' name='grupa'></td> </tr>

<tr>

<td colspan=2 align=center><input type='submit' value='���������'></td>

</tr>

</table>

</form>";

}

if ($m==2)

{

$idgrupa=$_REQUEST['id'];

$result=grupaid($idgrupa);

$row=$result->fetch_assoc();

$grupa=$row['grupa'];

echo "<h2>�������� ������</h2>
<form action='index.php' method=post> <input type='hidden' name='m' value=2>

<input type='hidden' name='id' value=$idgrupa> <input type='hidden' name='p' value=22> <table border=0>

<tr> <th>������</th>

<td><input type='text' name='grupa' value='$grupa'></td> </tr>

<tr>

<td colspan=2 align=center><input type='submit' value='���������'></td>

</tr>

</table>

</form>";

}

if ($m==3)

{

$idgrupa=$_REQUEST['id'];

echo "<h2>������� ������</h2> <form action='index.php' method=post>

<input type='hidden' name='m' value=3>

<input type='hidden' name='id' value=$idgrupa> <input type='hidden' name='p' value=22> <table border=0>

<tr>

<th>������� ������ � ������?</th> </tr>

<tr>

<td align=center><input type='submit' value='��'></td> </tr>

</table>

</form>";

}

?>