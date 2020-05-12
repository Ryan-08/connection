<?php
    include "conn.php";     
    if(isset($_POST['Edit'])) {     
        $id = $_POST['myID'];       
        $name = $_POST['Name'];
        $stdid = $_POST['stdid'];
        $gender = $_POST['gender'];
        $teacher = $_POST['select'];

        $sql = "SELECT id FROM `teacher` WHERE `name` LIKE '$teacher'";    
        $result = $conn->query($sql);       
        if ($result->num_rows > 0){        
            while($row = $result->fetch_assoc()) {
                $teacherId = $row["id"];
            }
            $sql = "UPDATE student SET name = '$name', student_id = '$stdid', gender = '$gender', teacher_id = '$teacherId' WHERE student.ID='$id'";   

            if ($conn->query($sql) === TRUE) {                                
                header("Location:index.php");            
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;                
            }  
        }    
        else{
            echo "Error";
        }                             
    }
    else{
        echo "Empty Data";
    }    
?>