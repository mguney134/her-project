<?php include 'her-header.php'; ?>   
 <!-- Tabbed Nav starts -->
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="her-info.php" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item ">
            <a class="nav-link active"  href="her-background.php" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  href="her-competences.php" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="her-networking.php" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="her-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

<!-- Tab panels -->
    <div class="tab-content">
        <!-- Background Starts-->
        <div class="tab-pane fade in show active" >
            <div class=" py-5 z-depth-1">
                
                <section class="px-md-4 mx-md-4 text-center text-lg-left dark-grey-text">
                <!-- STUDIES STARTS-->
                <h3 class="font-weight-bold">Studies</h3>
                <hr />
                <!-- Education Starts-->
                <div class="row mt-2">
                    <!-- 1-->
                    <div class="col-12 mb-4 ">
                        <!--2-->
                        <div class="card z-depth-1">
                            <!--3-->
                            <div class="card-body p-0">
                                <!--4-->
                                <div class="row mx-0">
                                    <!--5-->
                                    <div class="col-md-12 grey lighten-4 rounded-left pt-4">
                                        <h5 class="font-weight-bold mb-4">Education</h5>
                                        <!--6-->
                                        <div class="row ">
                                            <?php while($bginfo=$bgcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <!--Grid column-->
                                            <?php if ($bginfo['type']=='Study') {?>
                                            <!--7-->
                                            <div class="col-6">
                                                <!--8-->
                                                <div class="mb-4">
                                                    <!--9-->
                                                    <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                        <!--icons-->
                                                        <?php if ($bginfo['type']=='Study') {?>
                                                        <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px"></i>
                                                        <?php } elseif ($bginfo['type']=='Course') { ?>
                                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px"></i>
                                                        <?php } elseif ($bginfo['type']=='Job') { ?>
                                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px"></i>
                                                        <?php } elseif ($bginfo['type']=='Internship') { ?>
                                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px"></i>
                                                        <?php } elseif ($bginfo['type']=='Volunteering') { ?>
                                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px"></i>
                                                        <?php } ?>
                                                        <!--10-->
                                                        <div class="media-body my-1">
                                                            <p class="mt-1 mb-1 ml-3"><?php echo $bginfo['title'] ?></p>
                                                            <p class="text-uppercase mb-1 ml-3">
                                                                <small><?php echo $bginfo['country'] ?></small></p>
                                                            <p class="font-weight-bold mb-1 ml-3">
                                                                <?php echo $bginfo['institution'] ?></p>

                                                            <p class="ml-3 mb-1"><small><?php echo $bginfo['start_year'] ?>-
                                                                    <?php echo $bginfo['end_year'] ?> /
                                                                    <?php echo $bginfo['levelStudy'] ?></small></p>
                                                        </div>
                                                        <!--10-->
                                                        <div>
                                                            <a data-toggle="modal" class="deletebg"
                                                                data-id="<?php echo $bginfo['background_id'] ?>"
                                                                data-target="#deleteBackground"><i
                                                                    class="fas fa-trash-alt m-1 "></i></a><br>
                                                            <a data-toggle="modal" class="editbg"
                                                                data-id="<?php echo $bginfo['background_id'] ?>"
                                                                data-target="#editBackground"><i
                                                                    class="fas fa-pen m-1 "></i></a>
                                                        </div>
                                                    </div>
                                                    <!--9-->
                                                   
                                                </div>
                                                <!--8-->
                                            </div>
                                            <!--7-->
                                            <?php } ?>
                                            <?php  } ?>
                                        </div>
                                        <!--6-->
                                    </div>
                                    <!--5-->
                                </div>
                                <!--4-->
                            </div>
                            <!--3-->
                        </div>
                        <!--2-->
                    </div>
                    <!-- 1-->
                </div>
                <!-- Education Ends-->

                <!-- Courses Starts-->
                <div class="row mt-2">
                    <!-- 1-->
                    <div class="col-12 mb-4">
                        <!-- 2-->
                        <div class="card z-depth-1">
                            <!-- 3-->
                            <div class="card-body p-0">
                                <!--4-->
                                <div class="row mx-0">
                                    <!--5-->
                                    <div class="col-md-12 grey lighten-4 rounded-left pt-4">
                                        <!-- 6-->
                                        <h5 class="font-weight-bold mb-4">Courses</h5>
                                        <div class="row">

                                            <?php $bgcheck2=$db->prepare("SELECT * FROM background where user_id=:user_id"); $bgcheck2->execute(array( 'user_id' => $_SESSION['user_id'] ));
                                                while($bginfo2=$bgcheck2->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <?php if ($bginfo2['type']=='Course') {?>
                                            <!--7-->
                                            <div class="col-6">
                                                <!-- 8-->
                                                <div class="mb-4">
                                                    <!--9-->
                                                    <div class="media grey lighten-5 text-orange z-depth-1 rounded">
                                                        <?php if ($bginfo2['type']=='Study') {?>
                                                        <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px;"></i>
                                                        <?php } elseif ($bginfo2['type']=='Course') { ?>
                                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px;"></i>
                                                        <?php } elseif ($bginfo2['type']=='Job') { ?>
                                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px;"></i>
                                                        <?php } elseif ($bginfo2['type']=='Internship') { ?>
                                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px;"></i>
                                                        <?php } elseif ($bginfo2['type']=='Volunteering') { ?>
                                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                            style="padding: 45px 20px;"></i>
                                                        <?php } ?>
                                                        <!--10-->
                                                        <div class="media-body my-1">
                                                            <p class="mt-1 mb-1 ml-3"><?php echo $bginfo2['title'] ?></p>
                                                            <p class="text-uppercase mb-1 ml-3">
                                                                <small><?php echo $bginfo2['country'] ?></small>
                                                            </p>
                                                            <p class="font-weight-bold mb-1 ml-3">
                                                                <?php echo $bginfo2['institution'] ?></p>

                                                            <p class="ml-3 mb-1">
                                                                <small>
                                                                    <?php echo $bginfo2['start_year'] ?>-
                                                                    <?php echo $bginfo2['end_year'] ?>
                                                                    /
                                                                    <?php echo $bginfo2['levelStudy'] ?>
                                                                </small>
                                                            </p>
                                                        </div>
                                                        <!--10-->
                                                        <div>
                                                            <a data-toggle="modal" data-target="#deleteBackground"><i
                                                                    class="fas fa-trash-alt m-1"></i></a><br />
                                                            <a data-toggle="modal" data-target="#editBackground"><i
                                                                    class="fas fa-pen m-1"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--9-->
                                                   
                                                </div>
                                                <!--8-->
                                            </div>
                                            <!--7-->
                                            <?php } ?>
                                            <?php } ?>
                                            
                                        </div>
                                        <!--6-->

                                    </div>
                                    <!--5-->
                                </div>
                                <!--4-->
                            </div>
                            <!-- 3-->
                        </div>
                        <!-- 2-->
                    </div>
                    <!-- 1-->
                </div>
                <!-- Courses Ends-->

                <!-- STUDIES ENDS-->

                <!-- EXPERIENCE STARTS-->
                <h3 class="font-weight-bold">Experiences</h3>
                <hr />
                <!-- internship starts-->
                <div class="row mt-2">
                    <div class="col-12 mb-4">
                        <div class="card z-depth-1">
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div class="col-md-12 grey lighten-4 rounded-left pt-4">
                                        <h5 class="font-weight-bold mb-4">Internships</h5>
                                        <div class="row">
                                            <?php 
                                            $bgcheck4=$db->prepare("SELECT * FROM background where user_id=:user_id");
                                            $bgcheck4->execute(array(
                                                'user_id' => $_SESSION['user_id']
                                            ));
                                            while($bginfo4=$bgcheck4->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <!--Grid column-->
                                            <?php if ($bginfo4['type']=='Internship') { ?>

                                            <div class="col-6 mb-4">
                                                <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                    <?php if ($bginfo4['type']=='Study') {?>
                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo4['type']=='Course') { ?>
                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo4['type']=='Job') { ?>
                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo4['type']=='Internship') { ?>
                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo4['type']=='Volunteering') { ?>
                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } ?>
                                                    <div class="media-body my-1">
                                                        <p class="mt-1 mb-1 ml-3"><?php echo $bginfo4['title'] ?></p>
                                                        <p class="text-uppercase mb-1 ml-3">
                                                            <small><?php echo $bginfo4['country'] ?></small></p>
                                                        <p class="font-weight-bold mb-1 ml-3">
                                                            <?php echo $bginfo4['institution'] ?></p>

                                                        <p class="ml-3 mb-1"><small><?php echo $bginfo4['start_year'] ?>-
                                                                <?php echo $bginfo4['end_year'] ?> /
                                                                <?php echo $bginfo4['levelStudy'] ?></small></p>
                                                    </div>
                                                    <div>
                                                        <a data-toggle="modal" data-target="#deleteBackground"><i
                                                                class="fas fa-trash-alt m-1 "></i></a><br>
                                                        <a data-toggle="modal" data-target="#editBackground"><i
                                                                class="fas fa-pen m-1 "></i></a>
                                                    </div>
                                                </div>
                                                

                                            </div>
                                            <?php } ?>

                                            <?php  } ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- internship ends-->


                <!-- Jobs starts-->
                <div class="row mt-2">
                    <div class="col-12 mb-4">
                        <div class="card z-depth-1">
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div class="col-md-12 grey lighten-4 rounded-left pt-4">
                                        <h5 class="font-weight-bold mb-4">Jobs</h5>
                                        <div class="row">
                                            <?php 
                                        $bgcheck3=$db->prepare("SELECT * FROM background where user_id=:user_id");
                                        $bgcheck3->execute(array(
                                            'user_id' => $_SESSION['user_id']
                                        ));
                                        while($bginfo3=$bgcheck3->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <!--Grid column-->
                                            <?php if ($bginfo3['type']=='Job') {?>

                                            <div class="col-6 mb-4">
                                                <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                    <?php if ($bginfo3['type']=='Study') {?>
                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo3['type']=='Course') { ?>
                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo3['type']=='Job') { ?>
                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo3['type']=='Internship') { ?>
                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo3['type']=='Volunteering') { ?>
                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } ?>
                                                    <div class="media-body my-1">
                                                        <p class="mt-1 mb-1 ml-3"><?php echo $bginfo3['title'] ?></p>
                                                        <p class="text-uppercase mb-1 ml-3">
                                                            <small><?php echo $bginfo3['country'] ?></small></p>
                                                        <p class="font-weight-bold mb-1 ml-3">
                                                            <?php echo $bginfo3['institution'] ?></p>

                                                        <p class="ml-3 mb-1">
                                                            <small><?php echo $bginfo3['start_year'] ?>-
                                                                <?php echo $bginfo3['end_year'] ?> /
                                                                <?php echo $bginfo3['levelStudy'] ?></small></p>
                                                    </div>
                                                    <div>
                                                        <a data-toggle="modal" data-target="#deleteBackground"><i
                                                                class="fas fa-trash-alt m-1 "></i></a><br>
                                                        <a data-toggle="modal" data-target="#editBackground"><i
                                                                class="fas fa-pen m-1 "></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <?php } ?>


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Jobs ends-->

                <!-- Volunteering starts-->
                <div class="row mt-2">
                    <div class="col-12 mb-4">
                    <div class="card z-depth-1">
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div class="col-md-12 grey lighten-4 rounded-left pt-4">
                                        <h5 class="font-weight-bold mb-4">Volunteering</h5>
                                        <div class="row">
                                            <?php 
                                    $bgcheck5=$db->prepare("SELECT * FROM background where user_id=:user_id");
                                    $bgcheck5->execute(array(
                                        'user_id' => $_SESSION['user_id']
                                    ));
                                    while($bginfo5=$bgcheck5->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <!--Grid column-->
                                            <?php if ($bginfo5['type']=='Volunteering') {?>

                                            <div class="col-6 mb-4">
                                                <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                    <?php if ($bginfo5['type']=='Study') {?>
                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo5['type']=='Course') { ?>
                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo5['type']=='Job') { ?>
                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo5['type']=='Internship') { ?>
                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } elseif ($bginfo5['type']=='Volunteering') { ?>
                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white"
                                                        style="padding: 45px 20px"></i>
                                                    <?php } ?>
                                                    <div class="media-body my-1">
                                                        <p class="mt-1 mb-1 ml-3"><?php echo $bginfo5['title'] ?></p>
                                                        <p class="text-uppercase mb-1 ml-3">
                                                            <small><?php echo $bginfo5['country'] ?></small></p>
                                                        <p class="font-weight-bold mb-1 ml-3">
                                                            <?php echo $bginfo5['institution'] ?></p>

                                                        <p class="ml-3 mb-1">
                                                            <small><?php echo $bginfo5['start_year'] ?>-
                                                                <?php echo $bginfo5['end_year'] ?> /
                                                                <?php echo $bginfo5['levelStudy'] ?></small></p>
                                                    </div>
                                                    <div>

                                                        <a data-toggle="modal" class="deletebg"
                                                            data-id="<?php echo $bginfo5['background_id'] ?>"
                                                            data-target="#deleteBackground"><i
                                                                class="fas fa-trash-alt m-1 "></i></a><br>
                                                        <a data-toggle="modal" class="editbg"
                                                            data-id="<?php echo $bginfo5['background_id'] ?>"
                                                            data-target="#editBackground"><i
                                                                class="fas fa-pen m-1 "></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <!--Grid column-->
                                            <?php  } ?>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Volunteering ends-->

                <!-- EXPERIENCE ENDS-->
                
                <!-- Button Starts-->                                        
                <div class="row">
                    <div class="col">
                        <div class="text-right mb-5">
                            <button class="btn btn-warning text-right" data-toggle="modal" data-target="#addBackground">
                                <i class="fas fa-plus mr-1"></i> New Field
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Button ends-->

                </section>  


            </div>
                    
        </div>         
        <!-- Background Ends-->
    </div>
</div>
    
<?php include 'her-footer.php'; ?>