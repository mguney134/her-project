<?php
session_start();
ob_start();


include '../settings/connect-db.php';

if (!isset($_SESSION['email'])) {

  Header("Location:../404.html");
  exit;

}

$usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
$usercheck->execute(array(
  'user_id' => $_SESSION['user_id']
  ));
$userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);

$organizationcheck=$db->prepare("SELECT * FROM organization where user_id=:user_id");
$organizationcheck->execute(array(
'user_id' => $_SESSION['user_id']
));
$orginfo=$organizationcheck->fetch(PDO::FETCH_ASSOC);
$count1=$organizationcheck->rowCount();
    if ($count1==0) {

      Header("Location:../index.php?status=unauthorized");
      exit;

    }

$talentcheck = $db->prepare("SELECT * FROM emptalent where organization_id=:organization_id");
$talentcheck->execute(array(
    'organization_id' => $orginfo['org_id']
));
$hercheck=$db->prepare("SELECT * FROM her where org_talent_match=:org_talent_match");
$hercheck->execute(array(
    'org_talent_match' => $orginfo['org_id']
    ));
$talentcount = $hercheck->rowCount(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Welcome User <?php echo $orginfo['firstname'] ?></title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="../css/inputs.css" rel="stylesheet" />
    <link href="../css/events.css" rel="stylesheet" />

</head>

<body class="fixed-sn white-skin" cz-shortcut-listen="true">
    <!-- NAVBAR STARTS -->
    <header>
        <!-- Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark aqua-gradient">
            <a class="navbar-brand" href="../home.html">
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
                            <img src="../images/icons/user-organization.png" class="rounded-circle"
                                alt="First sample avatar image" />
                        </div>

                        <div class="card-body pt-0 mt-0">
                            <!-- Name -->
                            <h3 class="mb-4 font-weight-bold">
                                <strong><?php echo $orginfo['firstname']." ".$orginfo['lastname'] ?></strong>
                            </h3>
                            <h5 class="mb-3">-<?php echo $orginfo['organization_name'] ?>-</h5>
                            <hr>
                            <div class="row mx-2">
                                <div class="col-2">

                                </div>
                                <div class="col-8">
                                    <h5 class="text-default font-weight-normal">
                                        Which type of talents are you looking for?
                                    </h5>
                                </div>
                                <div class="col-2">
                                    <button class="btn-floating btn-sm btn-info" type="button" data-toggle="modal"
                                        data-target="#talent">
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


                            <div class="modal fade" id="talent" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-default" id="exampleModalLabel">
                                                Which type of talents are you looking for?
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body  mx-4">
                                        <form action="../settings/action.php" method="POST" >
                                                <div class="row">
                                                    <div class="col-md-12 select-outline Org">

                                                        <select class="mdb-select md-form md-outline Org" id="sector1" name="sector">
                                                            
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
                                                        <div class="md-form md-outline my-1 Org">
                                                            <input type="text" id="jobTitle" class="form-control" name="job"/>
                                                            <label for="jobTitle" class="font-weight-normal">Job
                                                                Title</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <input hidden type="text"  value="<?php echo $orginfo['org_id'] ?>" class="form-control" name="org_id"/>
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-info btn-sm"
                                                data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" name="orgtalentadd" class="btn btn-sm btn-info">
                                                Save
                                            </button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card profile-card mt-4">
                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text cyan lighten-2">
                                Matched Talents
                            </div>

                            <section class="p-md-3 mx-md-3 text-center">
                                <p class="h4-responsive">You have <a class="badge badge-info"
                                        href="org-talents.php"><?php echo $talentcount; ?></a>
                                    talent(s) matched</p>







                            </section>
                        </div>
                        <!-- Panel -->
                    </div>
                    <div class="card profile-card mt-4">
                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text cyan lighten-2">
                                Search for Talents
                            </div>

                            <!-- Search IN ALL talents STARTS-->
                            <div class="row m-4">
                                <div class="input-group md-form form-sm form-2">
                                    <input class="form-control my-0 py-1 info-border" type="text"
                                        placeholder="Search in all talents by Name" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text teal lighten-3" id="basic-text1"><i
                                                class="fas fa-search text-grey" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Filter IN ALL talents STARTS-->

                        </div>
                        <!-- Panel -->
                    </div>

                </div>
                <!-- Profile Ends -->
                 <!-- Tabbed Nav starts -->
                