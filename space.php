<!DOCTYPE html>
<head>
    <style>
 body{background-image:url('en.jpg'); 
    background-size:cover;
}
 </style>
<body >
    
    <form action=" " method="post">
       <br><b><h1> <p align="center" style="color: white;font-size:65px;">WELCOME TO SPACE TOURISM</p></h1></b>
        <h2 align="center" style="color: white;font-size:55px;">Select the destination from Earth?:</h2><br>

        <div  align="center">
        <input type="radio" id="Mars" name="search" value="Mars" >
        <label for="Mars" style="color: white;font-size:55px;">Mars</label>
</div>
<div align="center">
<input type="radio" id="Saturn" name="search" value="Saturn" >
        <label for="Saturn" style="color: white;font-size:55px;">Saturn</label>
</div>
<div align="center">
<input type="radio" id="Jupyter" name="seacrh" value="Jupyter" >
        <label for="Jupyter" style="color: white;font-size:55px;">Jupyter</label>
</div>
<div align="center">
<input type="radio" id="Neptune" name="search" value="Neptune" >
        <label for="Neptune" style="color: white;font-size:55px;">Neptune</label>
</div>
<div align="center">
<input type="radio" id="Venus" name="search" value="Venus" >
        <label for="Venus" style="color: white;font-size:55px;">Venus</label>
</div>
<div align="center">
<input type="radio" id="Uranus" name="search" value="Uranus" >
        <label for="Uranus" style="color: white;font-size:55px;">Uranus</label>
</div>
<div align="center">
<input type="radio" id="Mercury" name="search" value="Mercury" >
<label for="Mercury" style="color: white;font-size:55px;">Mercury</label><br>
</div>

<input type="submit" align="center" style="color: black;font-size:55px;">

</form>
</body>
</html>
<?php
$s=$_POST['search'];
switch($s)
{
 case "Mars":
     echo"<img src='ma.jpg'>";
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