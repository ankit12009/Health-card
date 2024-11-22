<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "admin";
    $con = mysqli_connect($server, $user, $password, $db);
    if (isset($_POST['submit'])){
        $fname= $_POST['fname'];
        $lname = $_POST["lname"];
        $dob=$_POST['dob'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $saddress=$_POST['street'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pin=$_POST['zip'];
        $ptype=$_POST['ptype'];
        $cstart=$_POST['cstart'];
        $cend=$_POST['cend'];
        $dname=$_POST['dname'];
        $ddob=$_POST['ddob'];
        $drelation=$_POST['drelation'];
        $dnameA=$_POST['dnameA'];
        $ddobA=$_POST['ddobA'];
        $drelationA=$_POST['drelationA'];
        $gid=$_FILES['id']['name'];
        $pincome=$_FILES['income']['name'];
        $mrecord=$_FILES['mupload']['name'];
        $pmethod=$_POST['pmethod'];
        $pfrequency=$_POST['pfrequency'];
        // $sql="insert into buyer('fname','lname','dob','email','phone','saddress','city','state','pin','ptype','cstart','cend','dname','ddob','drelation','dnameA','ddobA','drelationA','gid','pincome','mrecord','pmethod','pfrequency','id') 
        // value ('$fname','$lname','$dob','$email','$phone','$street','$city','$state','$zip','$ptype','$cstart','$cend','$dname','$ddob','$drealation','$dnameA','$ddobA','$drelationA','$id','$income','$muplode','$pmethod','$pfrequency')";
        // // 
        // if ($con->query($sql) === TRUE) {
        //     echo "<script>alert('Fuck you');</script>";
        //     header('location:index2.html');
        // } else {
        //     echo "<script>alert('Error:  . $con->error . ');</script>";
        // }
        $sql="INSERT INTO buyer(fname,lname,dob,email,phone,saddress,city,states,pin,ptype,cstart,cend,dname,ddob,drelation,dnameA,ddobA,drelationA,pmethod,pfrequency) values ('$fname','$lname','$dob','$email','$phone','$saddress','$city','$state','$pin','$ptype','$cstart','$cend','$dname','$ddobA','$drelation','$dnameA','$ddob','$drelationA','$pmethod','$pfrequency')";
        if ($con->query($sql) === TRUE) {
                echo "<script>alert('Fuck you');</script>";
                // if ($con->query($sql) === TRUE) {
                // header('location:index2.html');}
            } else {
                echo "<script>alert('Error:  . $con->error . ');</script>";
            }
        // echo "$fname,$lname,$dob,$email,$phone,$street,$city,$state,$zip,$ptype,$cstart,$cend,
        // $dname,$ddob";
        // echo "$drealation,$dname,$ddobA,$drelationA,$id";
        //  echo "$income,$muplode,$pmethod,$pfrequency";
    }