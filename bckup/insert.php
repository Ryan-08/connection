<?php
    include "conn.php"; 
    if(isset($_GET['Submit'])) {            
        $name = $_GET['Name'];
        $NIM = $_GET['stdid'];
        $JK = $_GET['gender'];
        $doswal = $_GET['select'];

        $sql = "SELECT id FROM `teacher` WHERE `name` LIKE '$doswal'";    
        $result = $conn->query($sql);       
        if ($result->num_rows > 0){        
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
            }
            $sql = "INSERT INTO student(id,name,student_id,gender, teacher_id) VALUES(NULL,'$name','$NIM','$JK', '$id')";   

            if ($conn->query($sql) === TRUE) {                                
                header("Location:index.php");
                
            } else {
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