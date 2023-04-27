<?php
 session_start();
 require 'connect.php';
 $con=mysqli_connect("localhost","root","","spmsv4_core");

if(isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"]>0){
        $file = fopen($fileName,"r");

        while(($column = fgetcsv($file, 10000, ",")) !== FALSE){
            $sqlInsert = "Insert into backlogdata (backlog_id, id, faculty_id, semester, section, year, course, marks, timestamp) values
             (NULL, '" .$column[0]."','" .$column[1]."','" .$column[2]."','" .$column[3]."','" .$column[4]."','" .$column[5]."','" .$column[6]."',NOW())";
             $result = mysqli_query($con, $sqlInsert);

             $query2 = "INSERT INTO student_t (studentID, enrollmentSemester,enrollmentYear )  
             VALUES ('" .$column[0]."', '" .$column[2]."', '" .$column[4]."')";
              $result2 = mysqli_query($con, $query2);
         
             $query3 = "INSERT INTO registration_t (sectionID, studentID)  
             VALUES ('" .$column[3]."', '" .$column[0]."')";
             $result3 = mysqli_query($con, $query3);

             $query4 = "INSERT INTO course_t ( courseID)  
             VALUES ('" .$column[5]."')";
              $result4 = mysqli_query($con, $query4);

             $query5 = "INSERT INTO section_t (sectionID , semester,courseID,year )  
             VALUES ('" .$column[3]."','" .$column[2]."','" .$column[5]."', '" .$column[4]."')";
            $result5 = mysqli_query($con, $query5);

            $query6 = "INSERT INTO student_course_performance_t (totalMarksObtained )  
            VALUES ('" .$column[6]."')";
             $result6 = mysqli_query($con, $query6);
            

            if(!empty($result) && !empty($result2) && !empty($result3) && !empty($result4) && !empty($result5)  && !empty($result6)){
                echo "CSV data imported into database";
            }
            else{
                echo "problem importing";
            }
        }
    }
}


 ?>


<form class = "form-horizontal" action="" method="post" 
name = "uploadCSV" enctype="multipart/form-data">

<div>
<label>chose CSV File</label>
<input type="file" name="file" accept=".csv">
<button type="submit" name="import">Import</button>
</div>

</form>

<?php

//display uploaded  csv

$sqlSelect = " SELECT * from backlogdata ";

$result = mysqli_query($con, $sqlSelect);


if(mysqli_num_rows($result)>0){
    ?>

    <table>
        <thead>
            <tr>
                <th> backlog_id </th>
                <th> ID </th>
                <th> FACULTY ID </th>
                <th> semester </th>
                <th> section </th>
                <th> year </th>
                <th> course </th>
                <th> marks </th>
                <th> timestamp </th>
            </tr>
        </thead>

        <?php
        while($row = mysqli_fetch_array($result)){
            ?>
        <tbody>
            <tr>
                <td><?php echo $row ['backlog_id'];?></td>
                <td><?php echo $row ['id'];?></td>
                <td><?php echo $row ['faculty_id'];?></td>
                <td><?php echo $row ['semester'];?></td>
                <td><?php echo $row ['section'];?></td>
                <td><?php echo $row ['year'];?></td>
                <td><?php echo $row ['course'];?></td>
                <td><?php echo $row ['marks'];?></td>
                <td><?php echo $row ['timestamp'];?></td>
            </tr>
        </tbody>
        <?php } ?>
      
        </table>
        <?php }




?>