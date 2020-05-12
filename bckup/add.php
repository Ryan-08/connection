<!DOCTYPE html>
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

    <title>Insert Data</title>
</head>
<body>
<div class="main">
<a href="index.php">Home</a>
<h3>Insert Data Student</h3>
        <form action="insert.php" method="get">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Name" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Student id</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="stdid" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Teacher</label>
                <select class="custom-select custom-select-lg col-md-6" name="select">
                    <option selected>Choose Teacher</option> 
                    <?php include "displayTeacher.php";?>                                         
                </select>
            </div>
            <div class="form-group row">                        
                <input type="submit" name="Submit" class="btn btn-primary" value="Add Data"></input>
            </div>
        </form>
    </div>   
</body>
</html>