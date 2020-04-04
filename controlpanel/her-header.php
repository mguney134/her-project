<?php
ob_start();
session_start();

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

$hercheck=$db->prepare("SELECT * FROM her where user_id=:user_id");
$hercheck->execute(array(
    'user_id' => $_SESSION['user_id']
    ));
$herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);

$bgcheck=$db->prepare("SELECT * FROM background where user_id=:user_id");
$bgcheck->execute(array(
    'user_id' => $_SESSION['user_id']
));


$motivationcheck=$db->prepare("SELECT * FROM motivation where her_id=:her_id");
$motivationcheck->execute(array(
    'her_id' => $herinfo['her_id']
));
$motivationinfo=$motivationcheck->fetch(PDO::FETCH_ASSOC);

$moppcheck=$db->prepare("SELECT * FROM mopp where her_id=:her_id");
$moppcheck->execute(array(
    'her_id' => $herinfo['her_id']
));
$moppinfo=$moppcheck->fetch(PDO::FETCH_ASSOC);
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
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
  <!-- Material Design Bootstrap -->
  <link href="../css/style-other.min.css" rel="stylesheet" />
  <link href="../css/mdb.min.css" rel="stylesheet" />
    <link href="../css/inputs.css" rel="stylesheet" />

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
                            <img src="https://pngimage.net/wp-content/uploads/2018/06/flat-user-icon-png-2.png" class="rounded-circle" alt="First sample avatar image" />
                        </div>

                        <div class="card-body pt-0 mt-0">
                            <!-- Name -->
                            <h3 class="mb-3 font-weight-bold"><strong><?php echo $herinfo['firstname'] ?></strong></h3>

                            <a class="btn btn-warning btn-rounded waves-effect waves-light" href="generate-cv.php">Generate CV</a>
                            <br>
                            <br>
                            
                            <div class="form-check form-check-inline">
                              <input type="hidden" name="publish_cv" value="0">
                                <input type="checkbox" class="form-check-input" id="materialInline1" data-toggle="popover-hover"
                                    data-content="By ticking this box, you give your consent that your CV can be seen by registered
                                employers. Otherwise it will not be visible." name="publish_cv" value="1" <?php echo $herinfo['publish_cv'] ? 'checked' : ''?>>
                                <label class="form-check-label" for="materialInline1">Publish my CV for employers</label>
                            </div>
                            

                        </div>
                    </div>

                    <div class="card profile-card mt-4">
                        <!-- Panel -->
                        <div class="card">

                            <div class="card-header white-text warning-color">
                                Motivation
                            </div>
                            <div class=" mx-5 mt-5">
                              <?php if (!isset($motivationinfo['her_id'])) { ?>
                              <h5 class="font-weight-bold">No records yet.</h5>
                              <?php } ?>

                              <?php if (isset($motivationinfo['study'])) { ?>
                                <h5 class="font-weight-bold">I am a <span class="">Studyseeker</span> <br>

                                 <?php 

                                 $studies = explode(",", $motivationinfo['study']);
                                 for ($i = 0; $i <  count($studies); $i++) {
                                      $key=key($studies);
                                      $val=$studies[$key];
                                      if ($val<> ' ') { ?>
                                         <span class="badge badge-warning"><?php echo $val ?></span><br>
                                        <?php }
                                       next($studies);
                                      }
                                 ?>
                                  


                                </h5>
                                <hr />
                              <?php } ?>
                                <?php if (isset($motivationinfo['work'])) { ?>
                                  
                                  <h5 class="font-weight-bold">I am a <span class="">Jobseeker</span> <br> 

                                    
                                <?php 

                                 $works = explode(",", $motivationinfo['work']);
                                 for ($i = 0; $i <  count($works); $i++) {
                                      $key1=key($works);
                                      $val1=$works[$key1];
                                      if ($val1<> ' ') { ?>
                                         <span class="badge badge-warning"><?php echo $val1 ?></span><br>
                                        <?php }
                                       next($works);
                                      }
                                 ?>

                                  </h5>
                                <?php } ?>
                               

                                <div class="text-right">
                                    <a class="btn-floating btn-sm btn-secondary" data-toggle="modal" data-target="#editMotivation"><i class="fas fa-edit"></i></a>
                                   
                                </div>
                                <br>
                            
                            </div>
                            
                         

                        </div>
                        <!-- Panel -->

                    </div>
                    <div class="card profile-card mt-4">
                      <!-- Panel -->
                      <div class="card">

                          <div class="card-header white-text warning-color">
                            Member of piloting
                          </div>

                          <?php
                            $mentorcheck=$db->prepare("SELECT * FROM mentor where mentor_id=:mentor_id");
                            $mentorcheck->execute(array(
                                'mentor_id' => $herinfo['mentor_id']
                                ));
                            $mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);
                          ?>
                           
                           
                          <div class=" mx-5 mt-3">
                              
                              <thead>
                                  <tr>
                                      <th scope="row" class="text-right th-sm" style="width: 25%">

                                      </th>
                                      <th colspan="4" class="border-bottom th-lg">
                                          <thead>
                                              <tr>
                                                <?php 

                                                  $moppcheck1=$db->prepare("SELECT * FROM mopp where her_id=:her_id");
                                                  $moppcheck1->execute(array(
                                                      'her_id' => $herinfo['her_id']
                                                      ));
                                                  
                                                  $moppcheck2=$db->prepare("SELECT * FROM mopp where her_id=:her_id");
                                                  $moppcheck2->execute(array(
                                                      'her_id' => $herinfo['her_id']
                                                      ));
                                                
                                                if (!empty($moppinfo1=$moppcheck1->fetch(PDO::FETCH_ASSOC))) { 
                                                  
                                                  while($moppinfo2=$moppcheck2->fetch(PDO::FETCH_ASSOC)) { ?>
                                                  
                                                  <td scope="row" class="text-right th-sm" style="width: 25%">
                                                     <?php 

                                                       $mopporg = explode(",", $moppinfo2['organisation_name']);
                                                       for ($i = 0; $i <  count($mopporg); $i++) {
                                                            $key1=key($mopporg);
                                                            $val1=$mopporg[$key1];
                                                            if ($val1<> ' ') { ?>
                                                      
                                                      <span class=""><?php echo $val1 ?></span><br>
                                                              <?php }
                                                             next($mopporg);
                                                            }
                                                       ?>
                                                      
                                                  </td><br>
                                                  <?php } 
                                                   }else{ ?>
                                                  <td scope="row" class="text-right th-sm" style="width: 25%">
                                                      You haven't added an organisation yet.
                                                  </td>
                                                  <?php } ?>

                                                  

                                              </tr>
                                              <hr />
                                              <tr>
                                                  <?php if ($moppinfo['mentoring']==1) { ?>
                                                    
                                                  <h5 class="font-weight-bold">I want mentoring support.</h5>
                                                 <?php } ?>
                                                  <?php if ($moppinfo['coaching']==1) { ?>
                                                    
                                                  <h5 class="font-weight-bold">I want coaching support.</h5>
                                                 <?php } ?>

                                                  
                                              </tr>
                                          </thead>
                                      </th>
                                  </tr>
                                     
                                   
                              </thead>
                          </div>
                           <hr />
                          <div class=" mx-5 mt-4">
                          <?php if (isset($herinfo['coach_id'])) { ?>
                           
                              <h5 class="font-weight-bold">Your matched career coach is  <span class="badge badge-warning"><?php echo $mentorinfo['firstname']." ".$mentorinfo['lastname'] ?></span></h5>
                          <?php } ?>
                          <?php if (!isset($herinfo['coach_id'])) { ?>
                              <h5 class="font-weight-bold">You haven't been matched with a coach yet.</h5>
                          <?php } ?>

                            <hr />
                            <?php if (isset($herinfo['mentor_id'])) { ?>
                              <h5 class="font-weight-bold">Your matched mentor is <span class="badge badge-warning"><?php echo $mentorinfo['firstname']." ".$mentorinfo['lastname'] ?></span></h5>
                              <h6 class="font-weight-bold">
                                 <?php 
                                    $usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
                                    $usercheck->execute(array(
                                      'user_id' => $mentorinfo['user_id']
                                      ));
                                    $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
                                    ?>

                                    <?php echo $userinfo['email'] ?> / 


                                <span><?php echo $mentorinfo['tel'] ?></span> </h6>
                            <?php } ?>
                            <?php if (!isset($herinfo['mentor_id'])) { ?>
                              <h5 class="font-weight-bold">You haven't been matched with a mentor yet.</h5>
                            <?php } ?>
                            <div class="text-right">
                                    <a class="btn-floating btn-sm btn-secondary" data-toggle="modal" data-target="#editMopp"><i class="fas fa-edit"></i></a>
                                   
                            </div>
                        </div>
                          

                      </div>
                      <!-- Panel -->

                    </div>

                </div>
                
                <!-- Profile Ends -->
                 
    
     
    