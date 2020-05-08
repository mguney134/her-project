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
                            <div class="row">
                                <h5 class="mx-5 deep-purple-text">
                                    Which type of talents are you looking for?
                                </h5>

                            </div>

                            <div class="row">
                                <div class="col">
                                    <?php
                                    $talentcheck = $db->prepare("SELECT * FROM emptalent where employer_id=:employer_id");
                                    $talentcheck->execute(array(
                                        'employer_id' => $employerinfo['employer_id']
                                    ));


                                    if (!empty($talentinfo = $talentcheck->fetch(PDO::FETCH_ASSOC))) {
                                        while ($talentinfo = $talentcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <h6 class="text-center">
                                                <span><?php echo $talentinfo['sector'] ?></span>-<span><?php echo $talentinfo['job'] ?></span>
                                            </h6>
                                        <?php }
                                    } else { ?>
                                        <h6 class="text-center">
                                            No one yet!
                                        </h6>
                                    <?php } ?>

                                </div>

                            </div>

                            <div class="text-right">
                                <button class="btn-floating btn-sm btn-purple" type="button" data-toggle="modal" data-target="#talent">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
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
                                        <div class="modal-body  mx-4">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12 select-outline Employer">

                                                        <select class="mdb-select md-form md-outline Employer " id="sector1">
                                                            <option selected="" disabled value="Sector">Choose Sector</option>
                                                            <?php
                                                            $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                                            $sectorcheck->execute();
                                                            while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                                                <option  value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <label for="sector1">Sector</label>

                                                    </div>
                                                </div>


                                                <div class="form-row my-2">
                                                    <div class="col">
                                                        <div class="md-form md-outline  Employer my-1">
                                                            <input type="text" id="jobTitle" class="form-control" name="job" />
                                                            <label for="jobTitle" class="font-weight-normal">Job Title</label>
                                                        </div>
                                                    </div>
                                                </div>
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
                            </div>

                        </div>
                    </div>
                    <!-- Search for Talent card starts -->
                    <!-- <div class="card profile-card mt-4">
            <div class="card-body pt-0 mt-0">
              
              <h4 class="mb-4 mt-4 font-weight-bold">
                <strong>Matched Talents</strong>
              </h4>
              <h5 class="mb-3">Joe Doe</h5>
              <hr>
              <div class="row text-center">
                <div class="col text-center">
                  <h5 class="mt-5 deep-purple-text mx-4">
                    Search for talents
                  </h5>
                </div>
              </div>
              <div class="row mx-4">
                <div class="input-group md-form form-sm form-1 pl-0">
                  <div class="input-group-prepend">
                    <span class="input-group-text purple lighten-3" id="basic-text1"><i class="fas fa-search text-white"
                        aria-hidden="true"></i></span>
                  </div>
                  <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
                </div>

              </div>
            </div>
          </div> -->
                    <!-- Search for Talent card ends -->
                </div>
                <!-- Profile Ends -->