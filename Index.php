<!DOCTYPE html> <html>

<head>

<meta http-equiv="Content-Type"content="text/html;charset=UTF-8"><title>Информация о студентах</title>

</head>

<body>

<h1>Информация о студентах</h1>

<p><a href='index.php?p=1'>Студенты</a>&nbsp&nbsp<a href='index.php?p=2'>Группы</a><p>

<?php $p=$_REQUEST['p'];
if (($p==0)||($p==1)) include_once 'student.php';

if ($p==11)

include_once 'studentform.php';

if ($p==12)

include_once 'studentpost.php';

if ($p==2)

include_once 'grupa.php';

if ($p==21)

include_once 'grupaform.php';

if ($p==22)

include_once 'grupapost.php';

// echo "<p>$fiostudent<p>"; ?>

<p>&copy Мартюшев Сергей Миронович<p> </body></html>
<?php

error_reporting( E_ERROR );

function dbconnect()

{

$db = new mysqli('localhost', 'mysql', 'mysql','student');

if (mysqli_connect_errno())

{

$error=mysqli_connect_error(); $errorno=mysqli_connect_errno();

exit ("<p>Подключение невозможно: $errorno - $error<p>");

}
else

{

return $db;

}

}

function student()

{

$query =

"SELECT grupa.grupa, student.idstudent, student.idgrupa, student.fiostudent, student.nshifr

FROM student INNER JOIN grupa ON student.idgrupa = grupa.idgrupa ORDER BY grupa.grupa, student.fiostudent";

$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function studentid($id)

{

$query =

"SELECT idstudent, fiostudent, idgrupa, nshifr FROM student

WHERE idstudent=$id";

$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function studentins($fiostudent, $idgrupa, $nshifr)

{

$query =

"INSERT INTO student (fiostudent, idgrupa, nshifr) VALUES ('$fiostudent', $idgrupa, '$nshifr')";
$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function studentupd($idstudent, $fiostudent, $idgrupa, $nshifr)

{

$query =

"UPDATE student SET fiostudent='$fiostudent', idgrupa=$idgrupa, nshifr='$nshifr'

WHERE idstudent=$idstudent";

$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function studentdel($idstudent)

{

$query =

"DELETE FROM student WHERE idstudent=$idstudent";

$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function grupa()

{

$query =

"SELECT idgrupa, grupa FROM grupa

ORDER BY grupa ASC";
$handle=dbconnect();

$result = $handle->query($query);return $result;
}

function grupaid($id)

{

$query =

"SELECT idgrupa, grupa FROM grupa

WHERE idgrupa=$id";

$handle=dbconnect();

$result = $handle->query($query);return $result;

}

function grupains($grupa)

{

$query =

"INSERT INTO grupa (grupa) VALUES ('$grupa')";

$handle=dbconnect();

$result = $handle->query($query);

}

function grupaupd($idgrupa, $grupa)

{

$query =

"UPDATE grupa SET grupa='$grupa' WHERE idgrupa=$idgrupa";

$handle=dbconnect();

$result = $handle->query($query);

}

function grupadel($idgrupa)

{

$query =

"DELETE FROM grupa WHERE idgrupa=$idgrupa";
$handle=dbconnect();

$result = $handle->query($query);

}

?>