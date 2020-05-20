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

$employercheck = $db->prepare("SELECT * FROM employer where user_id=:user_id");
$employercheck->execute(array(
    'user_id' => $_SESSION['user_id']
));
$employerinfo = $employercheck->fetch(PDO::FETCH_ASSOC);
$count1 = $employercheck->rowCount();
if ($count1 == 0) {

    Header("Location:../index.php?status=unauthorized");
    exit;
}

$talentcheck = $db->prepare("SELECT * FROM emptalent where employer_id=:employer_id");
$talentcheck->execute(array(
    'employer_id' => $employerinfo['employer_id']
));

//$hercheck=$db->prepare("SELECT * FROM her where talent_match=:talent_match");
//$hercheck->execute(array(
 //   'talent_match' => $employerinfo['employer_id']
  //  ));

$hercheck=$db->prepare("SELECT * FROM her");
$hercheck->execute();
$talentcount = $hercheck->rowCount();   

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Welcome <?php echo $employerinfo['firstname'] ?></title>
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
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark purple-gradient">
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
    <!-- NAVBAR ENDS -->
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
                            <img src="../images/icons/user-employer.png" class="rounded-circle" alt="First sample avatar image" />
                        </div>

                        <div class="card-body pt-0 mt-0">
                            <!-- Name -->
                            <h3 class="mb-4 font-weight-bold">
                                <strong><?php echo $employerinfo['firstname'] . " " . $employerinfo['lastname'] ?></strong>
                            </h3>
                            <h5 class="mb-3">-<?php echo $employerinfo['company'] ?>-</h5>
                            <hr>
                            <div class="row mx-2">
                                <div class="col-2">

                                </div>
                                <div class="col-8">
                                    <h5 class="text-secondary font-weight-normal">
                                        Which type of talents are you looking for?
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <button class="btn-floating btn-sm btn-purple" type="button" data-toggle="modal" data-target="#talent">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <?php
                                    while ($talentinfo = $talentcheck->fetch(PDO::FETCH_ASSOC)) {?>
                                            <h6 class="text-center">
                                                <span><?php echo $talentinfo['sector'] ?></span>-<span><?php echo $talentinfo['job'] ?></span>
                                            </h6>
                                    <?php }
                                    if (!empty($talentinfo = $talentcheck->fetch(PDO::FETCH_ASSOC))) { ?>
                                        <h6 class="text-center">
                                            Not one yet!
                                        </h6>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card profile-card mt-4">
                        <!-- Panel -->
                        <div class="card">
                            <div class="card-header white-text purple lighten-2">
                                Matched Talents
                            </div>
                            <section class="p-md-3 mx-md-3 text-center ">
                                <p class="h4-responsive">You have <a class="badge badge-secondary" href="employer-talents.php"><?php echo $talentcount; ?></a>
                                    talent(s) matched</p>
                            </section>
                            <!--matched her starts-->
                            <!--?php 
                                
                                $hercheck2=$db->prepare("SELECT * FROM her where talent_match=:talent_match");
                                $hercheck2->execute(array(
                                    'talent_match' => $employerinfo['employer_id']
                                    ));
                                if (!empty($herinfo2=$hercheck->fetch(PDO::FETCH_ASSOC))) { 
                                while($herinfo=$hercheck2->fetch(PDO::FETCH_ASSOC)) { ?>
                                <div class="px-2">
                                <div class="card text-center mb-2 ">
                                    <div class="row ">
                                        <div class="col-4 px-0 text-center ">
                                            <img src="../images/icons/HER.png" width="50px" />
                                        </div>
                                        <div class="col-8 px-0 text-left d-flex align-items-center">
                                            <h5 class="mb-1 pt-1">
                                            <?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                </div-->
                                <!--?php } 
                                }else{ ?>
                                <h5 class="font-weight-bold">
                                    No one yet!
                                    </h5>
                                <!--?php } ?-->
                        </div>
                        <!-- Panel -->
                    </div>
                </div>
                <!-- Profile Ends -->
                <div class="modal fade" id="talent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-secondary" id="exampleModalLabel">
                                    Which type of talents are you looking for?
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="../settings/action.php" method="POST">
                                <div class="modal-body  mx-4">
                                    <div class="row">
                                        <div class="col-md-12 select-outline Employer">
                                            <select class="mdb-select md-form md-outline Employer " id="sector1" name="sector">
                                                <option selected="" disabled value="Sector">Choose Sector</option>
                                                <?php
                                                $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                                $sectorcheck->execute();
                                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                            <label for="sector1">Sector</label>
                                        </div>
                                    </div>
                                    <div class="form-row my-2">
                                        <div class="col">
                                            <div class="md-form md-outline  Employer my-1">
                                                <input type="text" id="jobTitle" class="form-control" name="job"/>
                                                <label for="jobTitle" class="font-weight-normal">Job Title</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input hidden type="text" class="form-control" value="<?php echo $employerinfo['employer_id'] ?>" name="employer_id" />
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-purple btn-sm" data-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" name="talentadd" class="btn btn-sm btn-purple">
                                        Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

               