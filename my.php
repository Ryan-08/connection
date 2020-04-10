<?php
    include "conn.php";        
    $sql = "SELECT mahasiswa.ID, mahasiswa.nama, nim, jenis_kelamin, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id";
    $result = $conn->query($sql);   
    
    if ($result->num_rows > 0){
        // output data of each row
            while($row = $result->fetch_assoc()) { ?>   
                <ul class="list-group list-group-horizontal-sm">                 
                    <li class="list-group-item item"><?php echo $row["ID"]?></li>
                    <li class="list-group-item"><?php echo $row["nama"]?></li>
                    <li class="list-group-item"><?php echo $row["nim"]?></li>
                    <li class="list-group-item item"><?php echo $row["jenis_kelamin"]?></li>
                    <li class="list-group-item"><?php echo $row["nama_dosen"]?></li>     
                    <li class="list-group-item buton">
                        <a class="edit" href="edit.php?id=<?php echo $row['ID']?>">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                        <a class="trash" href="delete.php?id=<?php echo $row['ID']?>">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </li>     
                </ul>
    <?php   }
        }            
        $conn->close();  ?> 