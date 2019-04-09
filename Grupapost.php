<?php

include_once 'function.php';

$m=$_REQUEST['m'];

if ($m==1)

{

$grupa=$_REQUEST['grupa'];

if (empty($grupa))

{

echo "<h3>Введены НЕ все данные</h3>" ;

}

else

{

grupains($grupa);

echo "<script>location.href='index.php?p=2'</script>";

}

}

if ($m==2)

{

$idgrupa=$_REQUEST['id'];

$grupa=$_REQUEST['grupa'];

if (empty($grupa))

{

echo "<h3>Введены НЕ все данные</h3>" ;

}

else

{

grupaupd($idgrupa, $grupa);

echo "<script>location.href='index.php?p=2'</script>";

}

}
if ($m==3)

{

$idgrupa=$_REQUEST['id'];

grupadel($idgrupa);

echo "<script>location.href='index.php?p=2'</script>";

}

?>