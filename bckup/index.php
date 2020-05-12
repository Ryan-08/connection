<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{padding: 100px;} table, th, td {border: 1px solid black; border-collapse: collapse;} th, .cntr{text-align: center;}     
        .myBtn{padding: 20px 18px;} .edit{padding: 3px 8px; color: black;} .trash{padding: 3px 8px; color: red;}          
        .edit:hover{color: grey;} .trash:hover{color: #990000;}       
    </style>

    <title>CRUD</title>
  </head>
  <body>    
    <div class="main">        
        <div class="myBtn">                       
            <a href="add.php">
                <button type="button" class="btn btn-primary">
                    ADD Student
                </button>
            </a>               
        </div>            
        <?php include "displayAll.php";?>               
    </div>   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    
  </body>
</html>