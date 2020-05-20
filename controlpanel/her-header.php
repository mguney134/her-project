<?php
ob_start();
session_start();

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

$hercheck = $db->prepare("SELECT * FROM her where user_id=:user_id");
$hercheck->execute(array(
  'user_id' => $_SESSION['user_id']
));
$herinfo = $hercheck->fetch(PDO::FETCH_ASSOC);

$bgcheck = $db->prepare("SELECT * FROM background where user_id=:user_id");
$bgcheck->execute(array(
  'user_id' => $_SESSION['user_id']
));


$motivationcheck = $db->prepare("SELECT * FROM motivation where her_id=:her_id");
$motivationcheck->execute(array(
  'her_id' => $herinfo['her_id']
));
$motivationinfo = $motivationcheck->fetch(PDO::FETCH_ASSOC);

$moppcheck = $db->prepare("SELECT * FROM mopp where her_id=:her_id");
$moppcheck->execute(array(
  'her_id' => $herinfo['her_id']
));
$moppinfo = $moppcheck->fetch(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Welcome <?php echo $herinfo['firstname'] ?></title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../images/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../images/favicon/favicon-16x16.png" sizes="16x16" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style-other.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/inputs.css" rel="stylesheet" />
  <link rel="stylesheet" href="../css/events.css" rel="stylesheet" />




</head>


<body class="fixed-sn white-skin" cz-shortcut-listen="true">
  <!-- NAVBAR STARTS -->
  <header>
    <!-- Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark peach-gradient">
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
              <img src="../images/icons/user-her.png" class="rounded-circle" alt="First sample avatar image" />
            </div>

            <div class="card-body pt-0 mt-0">
              <!-- Name -->
              <h3 class="mb-3 font-weight-bold"><strong><?php echo $herinfo['firstname'] ?></strong></h3>

              <a class="btn btn-deep-orange  btn-md waves-effect waves-light" href="generate-cv.php">Generate CV</a>
              <br>
              <br>

              <div class="form-check form-check-inline" data-toggle="popover-hover" data-content="By ticking this box, you give your consent that your CV can be seen by registered
                                employers. Otherwise it will not be visible.">

                <input type="checkbox" class="publishcv form-check-input" id="publishcv" name="publish_cv" <?php echo $herinfo['publish_cv'] == 1 ? 'checked' : '' ?>>
                <label class="form-check-label" for="publishcv">Publish my CV for employers</label>
              </div>


            </div>
          </div>

          <div class="card profile-card mt-4">
            <!-- Panel -->
            <div class="card">

              <div class="card-header white-text deep-orange lighten-2 text-center  position-relative py-2 pl-3 pr-2">
                <h6 class="d-inline font-weight-normal">
                  Motivation
                </h6>

                <a><i class="fas fa-edit white-text d-inline float-right " data-toggle="modal" data-target="#editMotivation"></i></a>
              </div>



              <div class="row mx-2">

                <?php if (empty($motivationinfo['study']) && empty($motivationinfo['work'])) { ?>
                  <div class="col-lg-12 my-3">
                    <div class="card text-center">
                      <h5 class="mx-4 my-3 font-weight-bold">No records yet.</h5>
                    </div>
                  </div>
                <?php } ?>
                <div class="col-lg-12 my-3">
                <?php if (!empty($motivationinfo['sector'])) { ?>
                <h5 class="mx-4 my-3 font-weight-bold">Sectors</h5>
                    <?php

                    $sector = explode(",", $motivationinfo['sector']);
                    for ($i = 0; $i <  count($sector); $i++) {
                      $key1 = key($sector);
                      $val1 = $sector[$key1];
                      if ($val1 <> ' ') { ?>
                        <span ><?php echo $val1 ?></span><br>
                    <?php }
                      next($sector);
                    }
                    } ?>
                </div>
                <!--studyseeker starts-->
                <?php if (isset($motivationinfo['study'])) { ?>
                  <div class="col-lg-6 my-3">
                    <div class="card text-center">

                      <div>
                        <i class="far fa-compass fa-2x deep-orange-text px-4 py-2"></i>

                      </div>
                      <div class="card-body pt-1">
                        <h5 style="font-size: 1.1rem;" class="card-text">I am a <span class="font-weight-bold">Studyseeker</span>
                        </h5>
                      </div>
                      <div class="mb-2">
                        <?php

                        $studies = explode(",", $motivationinfo['study']);
                        for ($i = 0; $i <  count($studies); $i++) {
                          $key = key($studies);
                          $val = $studies[$key];
                          if ($val <> ' ') { ?>
                            <span class=" badge badge-warning"><?php echo $val ?></span><br>
                        <?php }
                          next($studies);
                        }
                        ?>

                      </div>

                    </div>
                  </div>
                <?php } ?>
                <!--studyseeker ends-->

                <!--jobseeker starts-->
                <?php if (isset($motivationinfo['work'])) { ?>
                  <div class="col-lg-6 my-3">
                    <div class="card text-center">

                      <div>
                        <i class="far fa-compass fa-2x deep-orange-text px-4 py-2"></i>

                      </div>
                      <div class="card-body pt-1">
                        <h5 style="font-size: 1.1rem;" class="card-text">I am a <span class="font-weight-bold">Jobseeker</span>
                        </h5>
                      </div>
                      <div class="mb-2">
                        <?php

                        $works = explode(",", $motivationinfo['work']);
                        for ($i = 0; $i <  count($works); $i++) {
                          $key1 = key($works);
                          $val1 = $works[$key1];
                          if ($val1 <> ' ') { ?>
                            <span class="badge badge-warning"><?php echo $val1 ?></span><br>
                        <?php }
                          next($works);
                        }
                        ?>

                      </div>

                    </div>
                  </div>
                <?php } ?>
                <!--jobseeker ends-->
              </div>
            </div>
            <!-- Panel -->
          </div>
          <div class="card profile-card mt-4">
            <!-- Panel -->
            <div class="card pb-3">
              <div class="card-header white-text deep-orange lighten-2 text-center py-2 position-relative pl-3 pr-2">
                <h6 class="d-inline font-weight-normal">
                  Member of piloting
                </h6>

                <a><i class="fas fa-edit white-text d-inline float-right " data-toggle="modal" data-target="#editMopp"></i></a>
              </div>

              <?php
              $mentorcheck = $db->prepare("SELECT * FROM mentor where mentor_id=:mentor_id");
              $mentorcheck->execute(array(
                'mentor_id' => $herinfo['mentor_id']
              ));
              $mentorinfo = $mentorcheck->fetch(PDO::FETCH_ASSOC);
              ?>

              <!-- If there is organization added --->
              <div class="row mx-2 my-3">
                <?php

                $moppcheck = $db->prepare("SELECT * FROM mopp where her_id=:her_id");
                $moppcheck->execute(array(
                  'her_id' => $herinfo['her_id']

                ));

                $moppinfo = $moppcheck->fetch(PDO::FETCH_ASSOC);

                $count = $moppcheck->rowCount();

                if (!empty($moppinfo['organisation_name'])) {
                  $orgs = explode(",", $moppinfo['organisation_name']);

                  $ii = count($orgs);

                  for ($i = 0; $i < $ii; $i++) {

                    switch ($orgs[$i]) {
                      case "VDAB Limburg": ?>
                        <div class="col-4">
                          <img src="../images/logos/motivation/vdab-limburg.png" width="100%">
                        </div>
                        <div class="col-8">
                        <h5 class="mx-4 my-3 font-weight-bold">VDAB Limburg</h5>
                        </div>
                      <?php break;
                      case "FEDASIL": ?>
                        <div class="col-4">
                          <img src="../images/logos/motivation/fedasil.png" width="100%">
                        </div>
                        <div class="col-8">
                        <h5 class="mx-4 my-3 font-weight-bold">FEDASIL</h5>
                        </div>
                      <?php break;
                      case "Agentschap Integratie & Inburgering Leuven": ?>
                        <div class="col-4">
                          <img src="../images/logos/motivation/integratie-leuven.png" width="100%">
                        </div>
                        <div class="col-8">
                        <h5 class="mx-4 my-3 font-weight-bold">Agentschap Integratie & Inburgering Leuven</h5>
                        </div>
                      <?php break;
                      case "Motivation United": ?>
                        <div class="col-4">
                          <img src="../images/logos/motivation/motivation-united.png" width="100%">
                        </div>
                        <div class="col-8">
                        <h5 class="mx-4 my-3 font-weight-bold">Motivation United</h5>
                        </div>
                      <?php break;
                      case "All-in-one4HER": ?>
                        <div class="col-4">
                          <img src="../images/logos/motivation/all-in-one-4-her.png" width="100%">
                        </div>
                        <div class="col-8">
                        <h5 class="mx-4 my-3 font-weight-bold">All-in-one4HER</h5>
                        </div>
                  <?php break;
                    }
                  }
                } else { ?>
                  <!-- If there is organization NOT added --->
                  <div class="col-lg-12 my-3">
                    <div class="card text-center">
                      <h5 class="mx-4 my-3 font-weight-bold">You haven't added an organisation yet.</h5>
                    </div>
                  </div>
                <?php } ?>
              </div>

              <div class="card-header white-text deep-orange lighten-2 text-center mt-3 py-2">
                <h6 class="font-weight-normal mb-0">
                  Mentoring / Coaching
                </h6>
              </div>

              <div class="mx-5 text-left my-3">
                <div class="form-check">
                  <input type="hidden" value="0" name="mentoring">
                  <input type="checkbox" class="mentoringsupport form-check-input" id="mentoringsupport" name="mentoring" <?php echo $herinfo['mentoringsupport'] == 1 ? 'checked' : '' ?>>
                  <label class="form-check-label" data-toggle="popover-hover" data-content="You are matched with a mentor in your sector for 3-6 months" for="mentoringsupport">I want mentoring support. </label>

                </div>
                <div class="form-check">
                  <input type="hidden" value="0" name="coaching">
                  <input type="checkbox" class="careercoaching form-check-input" id="careercoaching" name="coaching" <?php echo $herinfo['careercoaching'] == 1 ? 'checked' : '' ?>>
                  <label class="form-check-label" data-toggle="popover-hover" data-content="You have 4 sessions of professional career coaching within 2-3 months" for="careercoaching">I want career coaching support. </label>

                </div>
              </div>

              <?php
              if ($herinfo['mentoringsupport'] == 1) { ?>

                <!--matched mentor starts-->
                <?php if (isset($herinfo['mentor_id'])) { ?>
                  <div class="card text-center mx-4 py-1 my-1">
                    <div class="row">
                      <div class="col-5 px-0">
                        <img src="../images/icons/mentor.png" width="50px" />
                        <p class="m-0"><span class="font-weight-bold"><small>Your Mentor</small></span>
                        </p>
                      </div>
                      <div class="col-7 px-0 text-left py-1">
                        <h5 class="mb-1 pt-1"><?php echo $mentorinfo['firstname'] . " " . $mentorinfo['lastname'] ?></h5>
                        <p class="font-weight-bold m-0"><small>
                            <?php
                            $usercheck = $db->prepare("SELECT * FROM users where user_id=:user_id");
                            $usercheck->execute(array(
                              'user_id' => $mentorinfo['user_id']
                            ));
                            $userinfo = $usercheck->fetch(PDO::FETCH_ASSOC);
                            ?>
                            <?php echo $userinfo['email'] ?>
                            <span><?php echo $mentorinfo['tel'] ?></span> </small></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--matched mentor ends-->
                <!--No Mentor starts-->
                <?php if (!isset($herinfo['mentor_id'])) { ?>
                  <div class="card text-center mx-4 py-1 my-1">
                    <div class="row">
                      <div class="col-5 px-0">
                        <img src="../images/icons/mentor.png" width="50px" />
                        <p class="m-0"><span class="font-weight-bold"><small>Your Mentor</small></span>
                        </p>
                      </div>
                      <div class="col-7 px-0 text-left py-1">
                        <h5 class="mb-1 pt-1">Not matched yet</h5>

                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--No Mentor ends-->

              <?php }
              ?>
              <?php
              if ($herinfo['careercoaching'] == 1) { ?>

                <!--matched coach starts-->
                <?php if (isset($herinfo['coach_id'])) { ?>
                  <div class="card text-center mx-4 py-1 my-1">
                    <div class="row">
                      <div class="col-5 px-0">
                        <img src="../images/icons/mentor.png" width="50px" />
                        <p class="m-0"><span class="font-weight-bold"><small>Your Coach</small></span>
                        </p>
                      </div>
                      <div class="col-7 px-0 text-left py-1">
                        <h5 class="mb-1 pt-1"><?php echo $mentorinfo['firstname'] . " " . $mentorinfo['lastname'] ?></h5>

                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--matched coach ends-->

                <!--No coach starts-->
                <?php if (!isset($herinfo['coach_id'])) { ?>
                  <div class="card text-center mx-4 py-1 my-1">
                    <div class="row">
                      <div class="col-5 px-0">
                        <img src="../images/icons/mentor.png" width="50px" />
                        <p class="m-0"><span class="font-weight-bold"><small>Your Coach</small></span>
                        </p>
                      </div>
                      <div class="col-7 px-0 text-left py-1">
                        <h5 class="mb-1 pt-1">Not matched yet</h5>

                      </div>
                    </div>
                  </div>
                <?php } ?>
                <!--No coach ends-->

              <?php }
              ?>



            </div>
            <!-- Panel -->

          </div>

        </div>

        <!-- Profile Ends -->
        <!-- Member of Pilot Add-->
        <div class="modal fade" id="editMopp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Member of Pilot Practice?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <?php if (empty($moppinfo['her_id'])) { ?>
                <form action="../settings/action.php" method="POST">
                  <div class="mx-5 my-3">
                    <div class="form-row">
                      <div class="col select-outline" data-toggle="popover-hover" data-placement="right" data-content="If you are part of a pilot practice(s) and registered through these organizations, please tick one or more of them. Then you give your consent that your data is visible to the responsible person from those organizations and they can validate your data. This will strengthen your CV for employers.">
                        <select class="mdb-select md-form md-outline Her my-2" name="organisation_name[]" multiple id="orgname">
                          <option disabled selected></option>
                          <option value="VDAB Limburg">VDAB Limburg</option>
                          <option value="FEDASIL">FEDASIL</option>
                          <option value="Agentschap Integratie & Inburgering Leuven">Agentschap Integratie & Inburgering Leuven</option>
                          <option value="Motivation United">Motivation United</option>
                          <option value="All-in-one4HER">All-in-one4HER Mentoring/Coaching</option>
                        </select>
                        <label for="orgname">Member of Pilot Practice</label>
                      </div>
                    </div>
                  </div>

                  <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                  <input type="text" name="org_id" hidden="" value="0">
                  <div class="text-right">
                    <input class="btn btn-warning" type="submit" name="addMopp" value="Add">
                  </div>
                </form>
              <?php } ?>
              <?php if (isset($moppinfo['her_id'])) { ?>
                <form action="../settings/action.php" method="POST">
                  <div class="mx-5 my-3">
                    <div class="form-row my-1 mt-4">
                      <div class="col select-outline" data-toggle="popover-hover" data-placement="right" data-content="If you are part of a pilot practice(s) and registered through these organizations, please tick one or more of them. Then you give your consent that your data is visible to the responsible person from those organizations and they can validate your data. This will strengthen your CV for employers.">
                        <select class="mdb-select md-form md-outline Her my-2" name="organisation_name[]" multiple id="orgname">
                          <?php
                          $orgcheck = $db->prepare("SELECT organization_name FROM registered_org");
                          $orgcheck->execute();
                          $orginfo = $orgcheck->fetch(PDO::FETCH_ASSOC);

                          $organisations = explode(",", $moppinfo['organisation_name']);

                          while ($orginfo = $orgcheck->fetch(PDO::FETCH_ASSOC)) {
                          ?>
                            <option <?php if (in_array($orginfo['organization_name'], $organisations)) {
                                      echo "selected";
                                    } ?> value="<?php echo $orginfo['organization_name'] ?>"><?php echo $orginfo['organization_name'] ?></option>
                          <?php
                          } ?>

                        </select>
                        <label for="orgname">Member of Pilot Practice</label>
                      </div>
                    </div>
                  </div>
                  <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">
                  <div class="text-right">
                    <input class="btn btn-warning" type="submit" name="updateMopp" value="Add">
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
        </div>