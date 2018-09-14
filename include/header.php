<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 8/22/18
 * Time: 4:55 PM
 */
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fa/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script>
        function go(link,num) {
            var temp=document.getElementById('video-main').src;
            var id_new=temp.split("/embed/");
            document.getElementById('video-main').src=link;
            document.getElementById(num).src='http://img.youtube.com/vi/'+id_new[1]+'/0.jpg';
            document.getElementById(num).setAttribute("onclick","go('https://www.youtube.com/embed/"+id_new[1]+"',"+num+")");
        }

    </script>


    <title>DWIT News</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png"/>

</head>
<body>
<header class="white-border-bottom">
<div class="container-header">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xl-12 col-12">
                <div class="nav-image text-center">
                    <img src="images/dwit-news-logo.png" id="logo">
                    <span class="date"><strong><?php echo date("D, d M, Y");?></strong></span>
               </div>
                <div class="navbar-button">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" id="#content-navbar" data-target=".navbar-content"> <i class="material-icons">&#xe5d2;</i></button>
                </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 navbar-content blue-border-top blue-border-bottom" id="content-navbar">
                <ul class="navbar-item ">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="college.php">College</a>
                    </li>
                    <li>
                        <a href="opinion.php">Opinion</a>
                    </li>
                    <li>
                        <a href="review.php">Review</a>
                    </li>
                    <li>
                        <a href="sports.php">Sports</a>
                    </li>
                    <li>
                        <a href="nepali.php">Nepali</a>
                    </li>
                    <li>
                        <a href="events.php">Events</a>
                    </li>
                    <li>
                        <a href="technology.php">Technology</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>

                </ul>
            </div>
        </div>
</div>
</header>

