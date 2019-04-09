<?php

include_once 'function.php';

$m=$_REQUEST['m'];

if ($m==1)

{

$fiostudent=$_REQUEST['fiostudent']; $nshifr=$_REQUEST['nshifr']; $idgrupa=$_REQUEST['idgrupa'];

if (empty($fiostudent)||empty($nshifr)||($idgrupa==0))

{

echo "<h3>Введены НЕ все данные</h3>" ;

}