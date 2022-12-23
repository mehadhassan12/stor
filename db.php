<html>

<style>body{background-color: blanchedalmond;text-align: center;}</style>
     <body>
<?php 


$con =mysqli_connect("localhost","root","","project4");

if(mysqli_connect_errno())
{
    echo"Failed to connect to Mysql:" .mysqli_connect_error();
}

$name=$_POST["t1"];
echo"<br>";
$email=$_POST["t2"];
echo"<br>";
$phone=$_POST["t3"];
echo"<br>";
$request=$_POST["t4"];

 $sql="INSERT INTO hhh
 (name,email,phone,request)
 VALUES('$name','$email','$phone','$request')";
  
mysqli_query($con,$sql);
echo"  تم ارسال طلبك  سنتواصل معك";
mysqli_close($con);
?>