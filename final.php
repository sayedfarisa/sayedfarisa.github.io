
<?php
$s=$_POST['search'];
switch($s)
{
 case "Mars":
    echo'<a href ="mars.html" font-size:120px><img src="rocket.gif" height="1500" >Are you ready</a>';
    break;
case "Mercury":
    echo'<a href ="mercury.html" font-size:120px><body><img src="rocket.gif" height="1300"></body>.Are you ready</a>';
    break;
case "Saturn":
    echo'<a href ="saturn.html" font-size:120px><img src="rocket.gif" height="1300">Are you ready</a>';
    break;
case "Venus":
    echo'<a href ="venus.html" font-size:120px><img src="rocket.gif" height="1300">Are you ready</a>';
    break;
case "Neptune":
    echo'<a href ="neptune.html" font-size:120px><img src="rocket.gif" height="1300">Are you ready</a>';
    break;
case "Uranus":
    echo'<a href ="uranus.html" font-size:120px><img src="rocket.gif" height="1300">Are you ready</a>';
    break;
case "Jupiter":
    echo'<a href="j1.html" font-size:120px><img src="rocket.gif" height="1300">are you ready</a>';
    break;
}
?>