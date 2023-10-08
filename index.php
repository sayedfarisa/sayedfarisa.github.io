<!DOCTYPE html>
<head>
    <style>
 body{background-image:url('gif.gif'); 
    background-size:cover;
 }

 </style>
<body >
    <a href="Resoures.html">click to visit all resource in the website</a>
    <form action="final.php" method="post">
    <b><h1> <p align="center" style="color: white;font-size:65px;">WELCOME TO SPACE TOURISM</p></h1></b>
        <p><h2 align="center" style="color: white;font-size:55px;">Select the destination from Earth:</h2><br></p><br>

       
<div align="center">
<input type="radio" id="Mercury" name="search" value="Mercury" >
<label for="Mercury" style="color: white;font-size:55px;">Mercury</label><br>
</div>

<div align="center">
<input type="radio" id="Venus" name="search" value="Venus" >
        <label for="Venus" style="color: white;font-size:55px;">Venus</label>
</div>

<div  align="center">
        <input type="radio" id="Mars" name="search" value="Mars" >
        <label for="Mars" style="color: white;font-size:55px;">Mars</label>
</div>

<div align="center">
<input type="radio" id="Jupiter" name="search" value="Jupiter" >
        <label for="Jupiter" style="color: white;font-size:55px;">Jupiter</label>
</div>

<div align="center">
<input type="radio" id="Saturn" name="search" value="Saturn" >
        <label for="Saturn" style="color: white;font-size:55px;">Saturn</label>
</div>


<div align="center">
<input type="radio" id="Uranus" name="search" value="Uranus" >
        <label for="Uranus" style="color: white;font-size:55px;">Uranus</label>
</div>

<div align="center">
<input type="radio" id="Neptune" name="search" value="Neptune" >
       <label for="Neptune" style="color: white;font-size:55px;">Neptune</label>
</div>

<input type="submit" style="color: black;font-size:55px;">
</form>
</body>
</html>

<?php
$s=$_POST['search'];
switch($s)
{
 case "Mars":
    echo'<a href ="mars.html" font-size:120px><img src="rocket.gif">Are you ready</a>';
    break;
case "Mercury":
    echo'<a href ="mercury.html" font-size:120px><body><img src="rocket.gif"></body>.Are you ready</a>';
    break;
case "Saturn":
    echo'<a href ="saturn.html" font-size:120px><img src="rocket.gif">Are you ready</a>';
    break;
case "Venus":
    echo'<a href ="venus.html" font-size:120px><img src="rocket.gif">Are you ready</a>';
    break;
case "Neptune":
    echo'<a href ="neptune.html" font-size:120px><img src="rocket.gif">Are you ready</a>';
    break;
case "Uranus":
    echo'<a href ="uranus.html" font-size:120px><img src="rocket.gif">Are you ready</a>';
    break;
case "Jupiter":
    echo'<a href="j1.html" font-size:120px><img src="rocket.gif">are you ready</a>';
    break;
}
?>