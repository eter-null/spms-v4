<?php
session_start();
include 'connect.php';

if(isset($_POST['submit'])){

    $sectionNum=$_POST['sectionNum'];
    $courseID=$_POST['courseID'];
    $semester=$_POST['semester'];
    $year=$_POST['year'];

    //Getting section ID from database
    $result=mysqli_query($con,"SELECT sec.sectionID AS sectionID
  FROM section_t AS sec
  WHERE sec.sectionNum='$sectionNum' AND sec.courseID='$courseID' 
  AND sec.semester='$semester' AND sec.year='$year'");
    $row=mysqli_fetch_assoc($result);
    $_SESSION['sectionID']=$row['sectionID'];

    header('location:createpdf.php');

}?>