<?php
ob_start();
session_start();


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

</head>

<body>

    <header>

        <!-- NAVBAR STARTS-->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="box-shadow: none; font-weight: 600;">
            <div class="container">

                <!-- Brand -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/logos/logo.png" height="55" alt="all-in-one-4-her logo">
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mx-auto" id="navbar1">

                        <li class="nav-item pr-4">
                            <a href="aboutus.php" class="nav-link deep-orange-text">Over Ons</a>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="under_construction.html">Roadmap</a>
                        </li>
                        <li class="nav-item dropdown pr-4">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Studeren</a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="language.html">Nederlands Leren</a>
                                <a class="dropdown-item" href="under_construction.html">Diploma Erkenning</a>
                            </div>
                        </li>
                        <li class="nav-item pr-4">
                            <a class="nav-link" href="work.html">Werken</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="under_construction.html">Mentoring</a>
                        </li>
                    </ul>


                    <!-- Right -->
                    <ul class="navbar-nav" id="navbar2">
                    <?php 

                    if (!isset($_SESSION['email'])) {?>

                        <li class="nav-item">
                            <a class="nav-link" href="" data-toggle="modal" data-target="#modalLoginForm">Inloggen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-white rounded mb-0" href="" data-toggle="modal"
                                data-target="#modalSubscriptionForm">Aanmelden</a>
                        </li>
                        <li class="nav-item">

                        </li>

                        <?php } else { ?>

                        <li class="nav-item">
                            <a class="nav-link" href="controlpanel/index.php" ><?php echo $userinfo['firstname'] ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-white rounded mb-0" href="logout.php" >Logout</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle" id="langu" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Nl</a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="langu">
                                <a class="dropdown-item" href="./events_nl.html">En</a>
                                <a class="dropdown-item" href="./events_ar.html">Ar</a>
                            </div>
                        </li>
                        <?php } ?>


                    </ul>
                     
                </div>

            </div>

        </nav>
        <!-- NAVBAR ENDS-->