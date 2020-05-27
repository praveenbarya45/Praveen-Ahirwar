<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];

$qual=$_POST['qual'];

$conn= mysqli_connect('localhost','root','','student');
    
$sql=mysqli_query($conn,"insert into test(fname,lname,gender,dob,address,qual) values('$fname','$lname','$gender','$dob','$address','$qual')");

if($sql)
{
    echo "Registered Successfully!!!";
}
else
{
    echo "Try Again";
}
   
?>
