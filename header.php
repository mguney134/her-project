<?php
session_start();
ob_start();


include 'settings/connect-db.php';

if (isset($_SESSION['user_id'])) {
    $usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
    $usercheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
    $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);

}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>All-in-one4HER</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-16x16.png" sizes="16x16" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="css/style-main.min.css" rel="stylesheet" />
    <link href="css/sidemenu.css" rel="stylesheet" />

</head>

<body data-spy="scroll" data-target="#sidemenu" data-offset="15">
    <header>
        <!-- NAVBAR STARTS-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar"
            style="box-shadow: none; font-weight: 600;">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/logos/logo.png" height="55" alt="all-in-one-4-her logo">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mx-auto" id="navbar1">

                        <li class="nav-item pr-4">
                            <a href="aboutus.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="under_construction.html">Roadmap</a>
                        </li>
                        <li class="nav-item dropdown pr-4">
                            <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink-333"
                                aria-haspopup="true" aria-expanded="false"
                                data-toggle="dropdown">Study</a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="./university_education.php">University
                                    Education</a>
                                <a class="dropdown-item" href="./language.php">Language Learning</a>
                                <a class="dropdown-item " href="./diploma_recognition.php">Diploma
                                    Recognition</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown pr-4">
                            <a class="nav-link dropdown-toggle  waves-effect waves-light" id="navbarDropdownMenuLink-333" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Work</a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item waves-effect waves-light" href="./work_roadmap_to_a_job.php">Roadmap to a job</a>
                                <a class="dropdown-item waves-effect waves-light" href="./work_sectors.php">Sectors</a>
                                <a class="dropdown-item  waves-effect waves-light" href="./work_organizatios.php">Organizations</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="under_construction.html">Mentoring</a>
                        </li>
                    </ul>

                    <!-- Right -->
                    <ul class="navbar-nav" id="navbar2">
                    <?php 

                    if (!isset($_SESSION['user_id'])) {?>

                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginForm">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-white rounded mb-0" href="" data-toggle="modal"
                                data-target="#modalSubscriptionForm">Sign Up</a>
                        </li>

                        <?php } else { ?>

                        <li class="nav-item">
                            <a class="nav-link" href="controlpanel/index.php" >My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-white rounded mb-0" href="logout.php" >Logout</a>
                        </li>
                        
                        <?php } ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="langu" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">En</a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="langu">
                                <a class="dropdown-item" href="nl/aboutus_nl.php">Nl</a>
                                <a class="dropdown-item" href="ar/aboutus_ar.php">Ar</a>
                            </div>
                        </li>

                    </ul>
                    <!-- <div class="ml-2" style="margin-right: -100px;">
                        <a class="ml-auto" href="https://all-in-one4her.eu/"><img src="images/en.png"></a>
                        <a href="aboutus_nl.html"><img src="images/nd.png"></a>
                    </div> -->
                </div>

            </div>

        </nav>
        <!-- NAVBAR ENDS-->