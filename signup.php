<?php 
$srevername = "localhost";
$username = "root";
$password = "";
$database = "admin";
$con = mysqli_connect($srevername,$username,$password,$database);
if(isset($_POST['submit']))
{
    $name=$_POST['Username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="INSERT INTO user (username,email,pw) values ('$name','$email','$password')";
    if ($con->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        header('location:login.html');
    } else {
        echo "<script>alert('Error:  . $con->error . ');</script>";
    }
    
}
?>