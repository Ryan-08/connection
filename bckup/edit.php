<?php
include "conn.php";
$id = $_GET['id'];

$sql = "SELECT student.id, student.name AS stdName, student_id,gender, teacher.name AS teacher 
        FROM student INNER JOIN teacher ON student.teacher_id = teacher.id WHERE student.id = $id";
$result = $conn->query($sql);

while($user_data = $result->fetch_assoc())
{
    $id = $user_data['id'];
    $name = $user_data['stdName'];
    $stdid = $user_data['student_id'];
    $gender = $user_data['gender'];
    $teacher = $user_data['teacher'];
}

    $male_status = 'unchecked';
    $female_status = 'unchecked';    
    if ($gender == 'male') {

        $male_status = 'checked';

    }
    else if ($gender == 'female') {

        $female_status = 'checked';

    }    
?>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{
            padding: 100px;
        }          
    </style>

    <title>Sunting Data</title>
</head>
<body>
<div class="main">
<a href="index.php">Home</a>
<h3>Edit Data Student</h3>
        <form action="update.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Name" value="<?php echo $name;?>" autocomplete="off">                    
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Student id</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="stdid" <?php echo "value=", $stdid;?> autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1" <?php echo $male_status;?>>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" <?php echo $female_status;?>>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Teacher</label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option>Choose Teacher</option> 
                    <?php
                        include "conn.php";        
                        $sql = "SELECT name FROM teacher";
                        $result = $conn->query($sql);       
                        if ($result->num_rows > 0){
                            // output data of each row
                                while($row = $result->fetch_assoc()) { 
                                    if($row["name"]==$teacher) {
                                         echo '<option selected>', $row['name'],'</option>';                                        
                                    }
                                    else{
                                        echo '<option>', $row["name"],'</option>';                                        
                                    }
                                }
                            }            
                            ?>                                          
                </select>
            </div>
            <div class="form-group row">  
                <input type="hidden" class="form-control" name="myID" <?php echo "value=", $id;?>>                      
                <input type="submit" name="Edit" class="btn btn-primary" value="Sunting"></input>
            </div>
        </form>
    </div>   
</body>
</html>