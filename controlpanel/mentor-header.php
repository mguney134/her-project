<?php
session_start();
ob_start();


include '../settings/connect-db.php';

if (!isset($_SESSION['email'])) {

    Header("Location:../404.html");
    exit;
}

$usercheck = $db->prepare("SELECT * FROM users where user_id=:user_id");
$usercheck->execute(array(
    'user_id' => $_SESSION['user_id']
));
$userinfo = $usercheck->fetch(PDO::FETCH_ASSOC);

$mentorcheck = $db->prepare("SELECT * FROM mentor where user_id=:user_id");
$mentorcheck->execute(array(
    'user_id' => $_SESSION['user_id']
));
$mentorinfo = $mentorcheck->fetch(PDO::FETCH_ASSOC);
$count1 = $mentorcheck->rowCount();
if ($count1 == 0) {

    Header("Location:../index.php?status=unauthorized");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Welcome <?php echo $mentorinfo['firstname'] ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="../css/style.min.css" rel="stylesheet" />
    <link href="../css/inputs.css" rel="stylesheet" />
    <link href="../css/events.css" rel="stylesheet" />

    </style>
</head>

<body class="fixed-sn white-skin" cz-shortcut-listen="true">
    <!-- NAVBAR STARTS -->
    <header>
        <!-- Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark blue-gradient">
            <a class="navbar-brand" href="../index.php">
                <img src="../images/logos/logo.png" height="30" alt="all-in-one-4-her logo" />
            </a>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <i class="nav-item fas fa-user mr-3 text-white pt-1"></i>
                <a class="nav-item text-white" href="../logout.php">Log Out</a>
            </ul>

        </nav>
        <!-- Navbar -->
    </header>

    <!-- CONTAINER STARTS-->
    <div class="container-fluid">
        <!-- Section: Team v.1 starts-->
        <section class="section team-section mt-5">
            <!-- Grid row -->
            <div class="row text-center">
                <!-- Profile Starts -->
                <div class="col-md-3 mb-4">
                    <!-- Card -->
                    <div class="card profile-card mt-4">
                        <!-- Avatar -->
                        <div class="avatar mt-n5 mb-4">
                            <img src="../images/icons/user-mentor.png" class="rounded-circle" alt="First sample avatar image" />
                        </div>

                        <div class="card-body pt-0 mt-0">
                            <!-- Name -->
                            <h3 class="mb-3 font-weight-bold"><strong><?php echo $mentorinfo['firstname'] . " " . $mentorinfo['lastname'] ?></strong></h3>
                            <h6 class="font-weight-bold cyan-text mb-4">

                                I can mentor <span class="badge badge-primary"><?php echo $mentorinfo['mentees'] ?></span> HER(s)
                            </h6>
                            <div class="text-right">
                                <a class="btn-floating btn-sm btn-primary" data-toggle="modal" data-target="#addMentees"><i class="fas fa-edit"></i></a>
                            </div>

                        </div>
                    </div>
                    <div class="card profile-card mt-4">
                        <div class="card">
                            <div class="card-header white-text primary-color">
                                Your Mentees
                            </div>
                            <div class=" mx-5 my-4">

                                <?php
                                $hercheck = $db->prepare("SELECT * FROM her where mentor_id=:mentor_id");
                                $hercheck->execute(array(
                                    'mentor_id' => $mentorinfo['mentor_id']
                                ));

                                $hercheck2 = $db->prepare("SELECT * FROM her where mentor_id=:mentor_id");
                                $hercheck2->execute(array(
                                    'mentor_id' => $mentorinfo['mentor_id']
                                ));


                                if (!empty($herinfo2 = $hercheck->fetch(PDO::FETCH_ASSOC))) {
                                    while ($herinfo = $hercheck2->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <div class="card text-center mx-4 py-1 my-1">
                                            <div class="row">
                                                <div class="col-5 px-0">
                                                    <img src="../images/icons/HER.png" width="50px" />

                                                </div>
                                                <div class="col-7 px-0 text-left py-1">
                                                    <h5 class="mb-1 pt-1">
                                                        <a href="mentor-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>"><span class="badge badge-primary"><?php echo $herinfo['firstname'].' '.$herinfo['lastname']  ?></span></a>
                                                    </h5>

                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>
                                    <h5 class="font-weight-bold">
                                        No one yet!
                                    </h5>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Profile Ends -->