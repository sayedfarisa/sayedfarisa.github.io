<?php
$s=$_POST['search'];
$path="C:\xampp\htdocs\proj\mars1.jpg";
switch($s)
{
 case "Mars":
     echo"<img src='mars1.jpg' height='px' width='45px')>";
     break;
case "Jupyter":
    echo"Jupyter";
    break;
case "Mercury":
    echo"Mercury";
    break;
case "Saturn":
    echo"Saturn";
    break;
case "Venus":
    echo"Venus";
    break;
case "Neptune":
    echo"Neptune";
    break;
case "Uranus":
    echo"Uranus";
    break;
}
    ?>