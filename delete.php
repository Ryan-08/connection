<?php    
    include "conn.php"; 
    $id = $_GET["id"];
    $query = "DELETE FROM `mahasiswa` WHERE `ID` = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "record deleted successfully <br>";
        $conn->close();  
        header("Location:index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    $conn->close();  
?>