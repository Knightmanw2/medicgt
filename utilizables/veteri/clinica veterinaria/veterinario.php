<?php
echo $_POST['inp1']."<br>";
echo $_POST['inp2']."<br>";
echo $_POST['inp3']."<br>";
echo $_POST['inp4']."<br>";
echo $_POST['inp5']."<br>";
echo $_POST['inp6']."<br>";
$con=mysqli_connect("localhost","root","","veterinaria");


$re="insert into veterinario(id,nombre,telefono,correo,car_familia,car_masc) values('$_POST[inp1]','$_POST[inp2]','$_POST[inp3]','$_POST[inp4]','$_POST[inp5]','$_POST[inp6]')";
mysqli_query($con,$re);
  
header("location:veterinaria.html");
mysqli_close($con);
?>