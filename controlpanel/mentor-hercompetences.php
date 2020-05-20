<?php

include 'mentor-header.php';
$hercheck = $db->prepare("SELECT * FROM her where her_id=:her_id");
$hercheck->execute(array(
    'her_id' => $_GET['her_id']
));
$herinfo = $hercheck->fetch(PDO::FETCH_ASSOC);

$bgcheck = $db->prepare("SELECT * FROM background where user_id=:user_id");
$bgcheck->execute(array(
    'user_id' => $herinfo['user_id']
));

$motivationcheck = $db->prepare("SELECT * FROM motivation where her_id=:her_id");
$motivationcheck->execute(array(
    'her_id' => $herinfo['her_id']
));
$motivationinfo = $motivationcheck->fetch(PDO::FETCH_ASSOC);
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
            <a class="nav-link" href="mentor-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="mentor-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="mentor-hercompetences.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="mentor-hernetworking.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>

    </ul>
    <!-- Nav tabs -->
    <!-- Tab panels -->
    <div class="tab-content">
        <!-- Panel 333-Competences starts-->
        <div class="tab-pane fade in show active">
            <div class=" py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-3 mx-md-3 text-center text-lg-left dark-grey-text">


                    <div class="mb-4">
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Languages</p>
                            </div>
                            <div class="col-5 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Language &nbsp</p>
                            </div>
                            <div class="col-5 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Level &nbsp</p>
                            </div>

                        </div>
                        <?php
                        $langcheck = $db->prepare("SELECT * FROM herlanguages where her_id=:her_id");
                        $langcheck->execute(array(
                            'her_id' => $herinfo['her_id']
                        ));

                        while ($langinfo = $langcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="row my-2">
                                <div class="col-2">

                                </div>
                                <div class="col-5 pb-1">
                                    <p class="mb-0"><?php echo $langinfo['language_name'] ?> &nbsp</p>
                                </div>
                                <div class="col-5  pb-1">
                                    <p class="mb-0"><?php echo $langinfo['level'] ?> &nbsp</p>
                                </div>

                            </div>
                        <?php } ?>
                    </div>
                    <br>

                    <!--div>
                        
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Hard Skills</p>
                            </div>
                            <div class="col-10 ">
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>

                            </div>
                        </div>
                                        
                       
                    </div-->

                    <br>
                    <br>
                    <div>
                        <!--title-->
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Soft Skills</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Communication skills &nbsp</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Interpersonal skills &nbsp</p>
                            </div>
                            <div class="col-4 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Teamwork skills &nbsp</p>
                            </div>
                            
                        </div>

                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT communication FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $communications = explode(",", $softskillinfo['communication']);

                                foreach ($communications as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>

                            </div>
                            <div class="col-3  ">

                                <?php
                                $softskillcheck = $db->prepare("SELECT interpersonal FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $interpersonal = explode(",", $softskillinfo['interpersonal']);

                                foreach ($interpersonal as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-4 ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT teamwork FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $teamwork = explode(",", $softskillinfo['teamwork']);

                                foreach ($teamwork as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>

                        </div>
                        <br>

                        <!--title-->

                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Adaptability and Learnability &nbsp</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Analytical Skills &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Leadership Skills &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Organization Skills &nbsp</p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT adaptability FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $adaptability = explode(",", $softskillinfo['adaptability']);

                                foreach ($adaptability as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT analytical FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $analytical = explode(",", $softskillinfo['analytical']);

                                foreach ($analytical as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-2  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT leadership FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $leadership = explode(",", $softskillinfo['leadership']);

                                foreach ($leadership as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-2  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT organizational FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $organizational = explode(",", $softskillinfo['organizational']);

                                foreach ($organizational as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Panel 333-Competences Ends-->
    </div>
</div>
<?php include 'mentor-footer.php'; ?>