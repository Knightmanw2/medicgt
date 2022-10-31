<?php

$con=mysqli_connect("localhost","root","","test");

echo $_POST['txtusuario']."<br>";
echo $_POST['txtpassword']."<br>";

$re="INSERT INTO `login` (`usuario`, `password`) VALUES ('$_POST[txtusuario]', '$_POST[txtpassword]')";
mysqli_query($con,$re);

header("location:login.html");
mysqli_close($con);

?>