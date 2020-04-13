<!doctype html>
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
        li{            
            width: 267px;
        }         
        .myBtn{
            padding: 20px 18px;
        }       
        .item{
            width: 80px;
        }
        .buton{
            width: 120px;
        }
        .edit{
            position: absolute;
            left: 0;
            top: 0;
            padding: 16px 18px;
            height: 100%;
            color: black;
        }   
        .trash{
            right: 0;            
            position: absolute;            
            top: 0;
            padding: 16px 18px;
            height: 100%;
            color: red;
        }          
        .edit:hover{
            background-color: black;
            color: white;
        }
        .trash:hover{
            background-color: red;
            color: white;
        }       
    </style>

    <title>Database</title>
  </head>
  <body>    
    <div class="main">
        <div class="myBtn">                       
            <a href="add.php">
                <button type="button" class="btn btn-primary">
                    Tambahkan Mahasiswa
                </button>
            </a>
        </div>       
        <?php include "my.php";?>               
    </div>   
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    
  </body>
</html>