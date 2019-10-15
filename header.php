<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>Tugas UI IMK</title>
        <link rel="shortcut icon" href="./assets/images/lgo1.jpg">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/style.css">

    </head>
    <body >
        <?php
        include './class/student.php';
        $student_obj = new Student();
        ?>  

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                          <li> <img src="./assets/images/ce1.jpg" alt="CE" class="tlogo"> </li>
                        <li><a href=""> </a></li>
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href=""> </a></li>
                        <li class="active"><a href="#">About Us</a></li>
                        <li><a href=""> </a></li>
                        <li class="active"><a href="#">Contact Admin</a></li>
                        <li><a href=""> </a></li>
                        <li class="active"><a href="#">Event</a></li>
            
                    </ul>

                </div>
            </div>
        </nav>