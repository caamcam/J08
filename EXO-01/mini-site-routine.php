<!DOCTYPE html>  
<html>
<head>
<title>mini-site-routine</title>
<ul id="nav">
       <li> <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EXO-01/mini-site-routine.php?page=1">Accueil</a> </li>
    </br><li> <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EXO-01/mini-site-routine.php?page=2">Page 2 </a> </li>
</br><li><a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EXO-01/mini-site-routine.php?page=3">Page 3</a> </li>
</ul>
<?php 
if ($_GET[page]==1) {
echo "<h1> Accueil ! </h1>" 
;}
if ($_GET[page]==2) {
    echo "<h1> Page 2 ! </h1>" 
    ;}
if ($_GET[page]==3) {
    echo "<h1> Page 3 ! </h1>" 
    ;}
?>


</head>