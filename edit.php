<?php
// Display selected user data based on id
// Getting id from url
include "conn.php";
$id = $_GET['id'];

$sql = "SELECT mahasiswa.ID, mahasiswa.nama, nim,jenis_kelamin, dosen_wali.nama AS nama_dosen FROM mahasiswa INNER JOIN dosen_wali ON mahasiswa.id_doswal = dosen_wali.id WHERE mahasiswa.ID = $id";
$result = $conn->query($sql);

while($user_data = $result->fetch_assoc())
{
    $id = $user_data['ID'];
    $nama = $user_data['nama'];
    $nim = $user_data['nim'];
    $jk = $user_data['jenis_kelamin'];
    $doswal = $user_data['nama_dosen'];
}

    $male_status = 'unchecked';
    $female_status = 'unchecked';    
    if ($jk == 'L') {

        $male_status = 'checked';

    }
    else if ($jk == 'P') {

        $female_status = 'checked';

    }
    $conn->close();  
?>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{
            padding: 100px;
        }          
    </style>

    <title>Document</title>
</head>
<body>
<div class="main">
<a href="index.php">Home</a>
<h3>Edit Mahasiswa</h3>
        <form action="update.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nama" <?php echo "value=", $nama?>>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nim" <?php echo "value=", $nim?>>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio1" value="1" <?php echo $male_status?>>
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jk" id="inlineRadio2" value="2" <?php echo $female_status?>>
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dosen Wali</label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option selected>Pilih Dosen</option> 
                    <?php include "dosen.php";?>                                         
                </select>
            </div>
            <div class="form-group row">  
                <input type="hidden" class="form-control" name="myID" <?php echo "value=", $id?>>                      
                <input type="submit" name="Edit" class="btn btn-primary"></input>
            </div>
        </form>
    </div>   
</body>
</html>