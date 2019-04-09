<?php

include_once 'function.php';

$m=$_REQUEST['m'];

if ($m==1)

{

echo "<h2>Добавить студента</h2>

<form action='index.php' method=post> <input type='hidden' name='m' value=1> <input type='hidden' name='p' value=12> <table border=0>

<tr>

<th>ФИО студента</th>

<td><input type='text' name='fiostudent'></td> </tr>

<tr>

<th>№ зачетки</th>

<td><input type='text' name='nshifr'></td> </tr>

<th>Группа</th><td> <select name='idgrupa'>

<option selected value='0'>Не выбрано</option>";

$result=grupa();

$numresult= grupa()->num_rows;
for ($i=0;$i<$numresult;$i++)

{

$row=$result->fetch_assoc();$idgrupa=$row['idgrupa']; $grupa=$row['grupa'];

echo

"<option value='$idgrupa'>$grupa</option>";

}

echo "</select></td></tr> <tr>

<td colspan=2 align=center><input type='submit' value='Сохранить'></td>

</tr>

</table>

</form>";

}

if ($m==2)

{

$idstudent=$_REQUEST['id'];

$result=studentid($idstudent);

$row=$result->fetch_assoc();

$fiostudent=$row['fiostudent']; $nshifr=$row['nshifr']; $idgrupasel=$row['idgrupa'];

echo "<h2>Изменить студента</h2> <form action='index.php' method=post> <input type='hidden' name='m' value=2>

<input type='hidden' name='id' value=$idstudent>
<input type='hidden' name='p' value=12> <table border=0>

<tr>

<th>ФИО студента</th>

<td><input type='text' name='fiostudent' value='$fiostudent'></td> </tr>

<tr>

<th>№ зачетки</th>

<td><input type='text' name='nshifr' value='$nshifr'></td> </tr>

<th>Группа</th><td> <select name='idgrupa'>

<option value='0'>Не выбрано</option>";

$result=grupa();

$numresult= grupa()->num_rows;

for ($i=0;$i<$numresult;$i++)

{

$row=$result->fetch_assoc();$idgrupa=$row['idgrupa']; $grupa=$row['grupa'];

if ($idgrupasel==$idgrupa)

echo "<option value='$idgrupa' selected>$grupa</option>"; else

echo "<option value='$idgrupa'>$grupa</option>";

}

echo "</select></td></tr> <tr>

<td colspan=2 align=center><input type='submit' value='Сохранить'></td>

</tr>

</table>

</form>";

}

if ($m==3)

{

$idstudent=$_REQUEST['id'];

echo "<h2>Удалить студента</h2> <form action='index.php' method=post> <input type='hidden' name='m' value=3>

<input type='hidden' name='id' value=$idstudent> <input type='hidden' name='p' value=12>

<table border=0> <tr>

<th>Удалить данные о студенте?</th> </tr>

<tr>

<td align=center><input type='submit' value='Да'></td> </tr>

</table>

</form>";

}

?>