<?php
    include "conn.php";        
    $sql = "SELECT name FROM teacher";
    $result = $conn->query($sql);       
    if ($result->num_rows > 0){
        // output data of each row
            while($row = $result->fetch_assoc()) { ?>                   
                <option><?php echo $row["name"]?></option>                                                   
    <?php   }
        } ?> 