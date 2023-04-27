<?php

$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connect.php';
    error_reporting(0);

    $userType=$_POST['userType'];
    $ID=$_POST['ID'];
    $password=$_POST['password'];

    if($userType=='faculty'){
        $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $invalid=0;
                session_start();
                $_SESSION['ID']=$ID;
                header('location:dashboard.php');
            }
        }
    }

    elseif($userType=='student'){
        $sql="SELECT * from student_t where studentID='$ID' and password='$password'";
        $result=mysqli_query($con,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num>0){
                $invalid=0;
                session_start();
                $_SESSION['ID']=$ID;
                header('location:studentDashboard.php');
            }
        }
    }

    else{
        $invalid=1;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login | SPMS 4.0</title>
    <link rel="stylesheet" href="login.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- Background video -->
    <video autoplay muted loop id="myVideo">
        <source src="Independent University, Bangladesh (IUB).mp4" type="video/mp4">
    </video>

    <style>
        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            opacity: 0.5; /* adjust opacity level here */
            z-index: -1;
        }
    </style>

    <style>
        /* Change text size to 20px */
        body {
            font-size: 20px;
        }

    </style>

</head>
<img>

<?php
if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<div style="text-align: center;">
    <img " src="../assets/img/faces/spms_maha.png" alt="spmsv4.0 logo">
    <br>
    <br>
    <span style="color: white; font-size: larger; font-family: 'Century Gothic'">Student Performance Monitoring System 4.0</span>
</div>

<div style="position: relative; top: 250px" class="login-box">
    <h2>Login</h2>

    <form action="login.php" method="post">
        <div style="position: relative; left: 24%" >
            <select name="userType" data-size="5" title="User" >
                <option disabled selected>User Type</option>
                <option value="student">Student</option>
                <option value="faculty">Faculty</option>
                <option value="department head">Department Head</option>
                <option value="dean">Dean</option>
            </select>
        </div>
        <br>
        <br>
        <div class="user-box">
            <input type="text" name="ID" required="">
            <label>Enter Your ID</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Enter Your Password</label>
        </div>
        <a style="width: 30%" >
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input style="left: 29%; position: relative" type="submit" name="submit" value="Login" class="submitButton">
        </a>
    </form>
</div>
</body>
</html>
