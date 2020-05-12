<?php
    include "conn.php";        
    $sql = "SELECT student.id AS stdid, student.name, student_id, gender, teacher.name AS teacher 
            FROM student INNER JOIN teacher ON 
            student.teacher_id = teacher.id ORDER BY student_id";
    $result = $conn->query($sql);   
    
    if ($result->num_rows > 0){
        // output data of each row
       ?> <table style="width:100%;">
        <tr>
        <th >No.</th>
        <th >Name</th>
        <th >Student Id</th>
        <th >Gender</th>
        <th >Teacher</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
        $i = 1;
            while($row = $result->fetch_assoc()) { ?>   
                <tr >
                    <td class="cntr"><?php echo $i?></td>
                    <td ><?php echo $row["name"]?></td>
                    <td ><?php echo $row["student_id"]?></td>
                    <td class="cntr"><?php echo $row["gender"]?></td>
                    <td ><?php echo $row["teacher"]?></td>
                    <td class="cntr">
                        <a class="edit" href="edit.php?id=<?php echo $row['stdid']?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>                            
                        </a>
                    </td>
                    <td class="cntr">
                        <a class="trash" href="delete.php?id=<?php echo $row['stdid']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>                            
                        </a>
                    </td>     
                </tr>                                
    <?php   ++$i;
            }
    echo "</table>";
        }   
        else{
            echo "<h3 style='text-align:center;'>Empty Database</h3>";
        }         
    ?> 