<?php
include 'mentor-header.php';
$hercheck=$db->prepare("SELECT * FROM her where her_id=:her_id");
$hercheck->execute(array(
    'her_id' => $_GET['her_id']
));
$herinfo=$hercheck->fetch(PDO::FETCH_ASSOC);
?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist" style="margin-bottom: 10px;">
        <li class="nav-item">
            <a class="nav-link" href="mentor-info.php">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="mentor-networking.php">
                <i class="fas fa-project-diagram  pr-2"></i>Networking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mentor-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="mentor-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-hercompetences.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="mentor-hernetworking.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                    <i class="fas fa-project-diagram pr-2"></i>Networking</a>
            </li>
            
        </ul>
        <!-- Nav tabs -->
    <!-- Tab panels -->
        <div class="tab-content">
        <!-- Panel 111-Information Starts-->
            <div class="tab-pane fade in show active" >
                <div class=" py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <h3 class="font-weight-bold"><?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?> Information</h3>
                        <hr />
                        <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Name Lastname</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Gender</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['gender'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Year of Birth</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['birth'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Country of Origin</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['country'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Legal Status</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['legalStatus'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Country of Highest Degree</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['degreeCountry'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Resident City/Town</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['town'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">Phone Number</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['tel_no'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="font-weight-bold text-right">E-mail</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php 
                                        $usercheck=$db->prepare("SELECT * FROM users where user_id=:user_id");
                                        $usercheck->execute(array(
                                          'user_id' => $herinfo['user_id']
                                          ));
                                        $userinfo=$usercheck->fetch(PDO::FETCH_ASSOC);
                                        ?>

                                        <?php echo $userinfo['email'] ?>&nbsp</p>
                        </div>
                    </div>
                            
                    </section>
                </div>
                            <!-- Grid column -->
            </div>
                    <!-- Tabbed Nav starts -->
        </div>

    </div>
            <!-- Grid row -->
        

<?php

include 'mentor-footer.php';

?>