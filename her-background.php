<?php 

include 'her-header.php'; 

$bgeditcheck = $db->prepare("SELECT * FROM background where background_id=:background_id");
$bgeditcheck->execute(array(
'background_id' => $_POST['background_id']
));
$bgeditinfo = $bgeditcheck->fetch(PDO::FETCH_ASSOC);

?>
<!-- Tabbed Nav starts -->
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="her-info.php" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item ">
            <a class="nav-link active" href="her-background.php" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="her-competences.php" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="her-networking.php" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="her-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

    <!-- Tab panels -->
    <div class="tab-content">
        <!-- Background Starts-->
        <div class="tab-pane fade in show active">
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
                                                <?php while ($bginfo = $bgcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <!--Grid column-->
                                                    <?php if ($bginfo['type'] == 'Study') { ?>
                                                        <!--7-->
                                                        <div class="col-6">
                                                            <!--8-->
                                                            <div class="mb-4">
                                                                <!--9-->
                                                                <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                                    <!--icons-->
                                                                    <?php if ($bginfo['type'] == 'Study') { ?>
                                                                        <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                    <?php } elseif ($bginfo['type'] == 'Course') { ?>
                                                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                    <?php } elseif ($bginfo['type'] == 'Job') { ?>
                                                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                    <?php } elseif ($bginfo['type'] == 'Internship') { ?>
                                                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                    <?php } elseif ($bginfo['type'] == 'Volunteering') { ?>
                                                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
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
                                                                    <a data-toggle="modal" id="deletebg" class="deletebg" data-val="<?php echo $bginfo['background_id'] ?>" data-target="#deleteBackground"><i class="fas fa-trash-alt m-1 "></i></a><br>
                                                                    <a data-toggle="modal" class="editbg" data-val="<?php echo $bginfo['background_id'] ?>" data-target="#editBackground"><i class="fas fa-pen m-1 "></i></a>
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

                                                <?php $bgcheck2 = $db->prepare("SELECT * FROM background where user_id=:user_id");
                                                $bgcheck2->execute(array('user_id' => $_SESSION['user_id']));
                                                while ($bginfo2 = $bgcheck2->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <?php if ($bginfo2['type'] == 'Course') { ?>
                                                        <!--7-->
                                                        <div class="col-6">
                                                            <!-- 8-->
                                                            <div class="mb-4">
                                                                <!--9-->
                                                                <div class="media grey lighten-5 text-orange z-depth-1 rounded">
                                                                    <?php if ($bginfo2['type'] == 'Study') { ?>
                                                                        <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px;"></i>
                                                                    <?php } elseif ($bginfo2['type'] == 'Course') { ?>
                                                                        <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px;"></i>
                                                                    <?php } elseif ($bginfo2['type'] == 'Job') { ?>
                                                                        <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px;"></i>
                                                                    <?php } elseif ($bginfo2['type'] == 'Internship') { ?>
                                                                        <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px;"></i>
                                                                    <?php } elseif ($bginfo2['type'] == 'Volunteering') { ?>
                                                                        <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px;"></i>
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
                                                                    <a data-toggle="modal" id="deletebg" class="deletebg" data-val="<?php echo $bginfo2['background_id'] ?>" data-target="#deleteBackground"><i class="fas fa-trash-alt m-1 "></i></a><br>
                                                                    <a data-toggle="modal" class="editbg" data-val="<?php echo $bginfo2['background_id'] ?>"  data-target="#editBackground"><i class="fas fa-pen m-1 "></i></a>
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
                                                $bgcheck4 = $db->prepare("SELECT * FROM background where user_id=:user_id");
                                                $bgcheck4->execute(array(
                                                    'user_id' => $_SESSION['user_id']
                                                ));
                                                while ($bginfo4 = $bgcheck4->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <!--Grid column-->
                                                    <?php if ($bginfo4['type'] == 'Internship') { ?>

                                                        <div class="col-6 mb-4">
                                                            <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                                <?php if ($bginfo4['type'] == 'Study') { ?>
                                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo4['type'] == 'Course') { ?>
                                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo4['type'] == 'Job') { ?>
                                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo4['type'] == 'Internship') { ?>
                                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo4['type'] == 'Volunteering') { ?>
                                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
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
                                                                    <a data-toggle="modal" id="deletebg" class="deletebg" data-val="<?php echo $bginfo4['background_id'] ?>" data-target="#deleteBackground"><i class="fas fa-trash-alt m-1 "></i></a><br>
                                                                    <a data-toggle="modal" class="editbg" data-val="<?php echo $bginfo4['background_id'] ?>" data-target="#editBackground"><i class="fas fa-pen m-1 "></i></a>
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
                                                $bgcheck3 = $db->prepare("SELECT * FROM background where user_id=:user_id");
                                                $bgcheck3->execute(array(
                                                    'user_id' => $_SESSION['user_id']
                                                ));
                                                while ($bginfo3 = $bgcheck3->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <!--Grid column-->
                                                    <?php if ($bginfo3['type'] == 'Job') { ?>

                                                        <div class="col-6 mb-4">
                                                            <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                                <?php if ($bginfo3['type'] == 'Study') { ?>
                                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo3['type'] == 'Course') { ?>
                                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo3['type'] == 'Job') { ?>
                                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo3['type'] == 'Internship') { ?>
                                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo3['type'] == 'Volunteering') { ?>
                                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
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
                                                                    <a data-toggle="modal" id="deletebg" class="deletebg" data-val="<?php echo $bginfo3['background_id'] ?>" data-target="#deleteBackground"><i class="fas fa-trash-alt m-1 "></i></a><br>
                                                                    <a data-toggle="modal" class="editbg" data-val="<?php echo $bginfo3['background_id'] ?>" data-target="#editBackground"><i class="fas fa-pen m-1 "></i></a>
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
                                                $bgcheck5 = $db->prepare("SELECT * FROM background where user_id=:user_id");
                                                $bgcheck5->execute(array(
                                                    'user_id' => $_SESSION['user_id']
                                                ));
                                                while ($bginfo5 = $bgcheck5->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <!--Grid column-->
                                                    <?php if ($bginfo5['type'] == 'Volunteering') { ?>

                                                        <div class="col-6 mb-4">
                                                            <div class="media  grey lighten-5 text-orange z-depth-1 rounded">
                                                                <?php if ($bginfo5['type'] == 'Study') { ?>
                                                                    <i class="fas fa-graduation-cap fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo5['type'] == 'Course') { ?>
                                                                    <i class="fas fa-certificate fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo5['type'] == 'Job') { ?>
                                                                    <i class="fas fa-briefcase fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo5['type'] == 'Internship') { ?>
                                                                    <i class="fas fa-address-card fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
                                                                <?php } elseif ($bginfo5['type'] == 'Volunteering') { ?>
                                                                    <i class="fas fa-hands-helping fa-2x orange lighten-2 z-depth-1 rounded-left text-white" style="padding: 45px 20px"></i>
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
                                                                    <a data-toggle="modal" id="deletebg" class="deletebg" data-val="<?php echo $bginfo5['background_id'] ?>" data-target="#deleteBackground"><i class="fas fa-trash-alt m-1 "></i></a><br>
                                                                    <a data-toggle="modal" class="editbg" data-val="<?php echo $bginfo5['background_id'] ?>" data-target="#editBackground"><i class="fas fa-pen m-1 "></i></a>
                                                                </div>
                                                            </div>
                                                            <input hidden value="">
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

<!-- Add New Studies & Experience -->
<div class="modal fade" id="addBackground" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add New Studies & Experience</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../settings/action.php" method="POST">

                <div class="col-md-12 mb-4">
                    <!-- Card content -->
                    <div class="card-body">
                        <p><i class="fas fa-list-alt fa-3x text-warning"></i></p>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="background" name="type">

                                    <option disabled selected></option>
                                    <option value="Study">Study</option>
                                    <option value="Course">Course</option>
                                    <option value="Job">Job</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Volunteering">Volunteering</option>
                                </select>
                                <label for="background">New Background</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="sLevel" name="levelStudy">

                                    <option disabled selected></option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                    <option value="PHD">PHD</option>
                                </select>
                                <label for="sLevel">Level of Study</label>
                            </div>
                            <div class="col-md-6 select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="equi" name="diploma">
                                    <option disabled selected></option>
                                    <option value="Level Equivalence">Level Equivalence
                                    </option>
                                    <option value="Specific Equivalence">Specific
                                        Equivalence</option>

                                </select>
                                <label for="equi">Diploma Equivalence</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-2 Her">
                                    <input type="text" id="Instution/University/Company" class="form-control" name="institution" />
                                    <label for="Instution/University/Company">Instution/University/Company</label>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="getCou" searchable="Search here.." name="country">
                                    <option disabled selected></option>
                                    <?php
                                    $countrycheck = $db->prepare("SELECT country_name FROM countries");
                                    $countrycheck->execute();
                                    $countcountry = 0;
                                    while ($countryinfo = $countrycheck->fetch(PDO::FETCH_ASSOC)) {
                                        $countcountry++ ?>

                                        <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                                    <?php } ?>
                                </select>
                                <label for="getCou">Country</label>
                            </div>
                        </div>
                        <div class="form-row my-2">
                            <div class="md-form col-md-6">
                                <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" name="start_year">
                                <label for="from" id="fromDate">From</label>
                            </div>
                            <div class="md-form col-md-6">
                                <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" name="end_year">
                                <label for="to" id="toDate">To</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="sec" multiple name="sector[]">
                                    <option disabled selected></option>
                                    <?php
                                    $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();
                                    $countsector = 0;
                                    while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) {
                                        $countsector++ ?>

                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="sec">Sector</label>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-2 Her">
                                    <input type="text" id="title-function" class="form-control" name="title" />
                                    <label for="title-function">Title - Function</label>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="text-right" style="margin:0; padding:0">
                                    <input class="btn btn-warning" type="submit" name="backgroundadd" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Study & Experience -->
<div class="modal fade" id="editBackground" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Edit Study & Experience</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="../settings/action.php" method="POST">

                <div class="col-md-12 mb-4">
                    <!-- Card content -->
                    <div class="card-body">
                        <p><i class="fas fa-list-alt fa-3x text-warning"></i></p>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="background2" name="type">
                                    <option disabled selected value="<?php echo $bgeditinfo['type'] ?>"><?php echo $bgeditinfo['type'] ?></option>
                                    <option value="Study">Study</option>
                                    <option value="Course">Course</option>
                                    <option value="Job">Job</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Volunteering">Volunteering</option>
                                </select>
                                <label for="background2">New Background</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="sLevel2" name="levelStudy" value="<?php echo $bgeditinfo['levelStudy'] ?>">
                                    <option disabled selected></option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value="Master">Master</option>
                                    <option value="PHD">PHD</option>
                                </select>
                                <label for="sLevel2">Level of Study</label>
                            </div>
                            <div class="col-md-6 select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="equi2" name="diploma" value="<?php echo $bgeditinfo['diploma'] ?>">
                                    <option disabled selected></option>
                                    <option value="Level Equivalence">Level Equivalence
                                    </option>
                                    <option value="Specific Equivalence">Specific
                                        Equivalence</option>

                                </select>
                                <label for="equi2">Diploma Equivalence</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-2 Her">
                                    <input type="text" id="Instution/University/Company" class="form-control" name="institution" value="<?php echo $bgeditinfo['institution'] ?>"/>
                                    <label for="Instution/University/Company">Instution/University/Company</label>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="getCou2" searchable="Search here.." value="<?php echo $bgeditinfo['country'] ?>" name="country">
                                    <option disabled selected></option>
                                    <?php
                                    $countrycheck = $db->prepare("SELECT country_name FROM countries");
                                    $countrycheck->execute();
                                    $countcountry = 0;
                                    while ($countryinfo = $countrycheck->fetch(PDO::FETCH_ASSOC)) {
                                        $countcountry++ ?>

                                        <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                                    <?php } ?>
                                </select>
                                <label for="getCou2">Country</label>
                            </div>
                        </div>
                        <div class="form-row my-2">
                            <div class="md-form col-md-6">
                                <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" value="<?php echo $bgeditinfo['start_year'] ?>" name="start_year">
                                <label for="from" id="fromDate">From</label>
                            </div>
                            <div class="md-form col-md-6">
                                <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" value="<?php echo $bgeditinfo['end_year'] ?>" name="end_year">
                                <label for="to" id="toDate">To</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col select-outline">
                                <select class="mdb-select md-form md-outline Her my-2" id="sec2" multiple value="<?php echo $bgeditinfo['sector'] ?>" name="sector[]">
                                    <option disabled selected></option>
                                    <?php
                                    $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();
                                    $countsector = 0;
                                    while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) {
                                        $countsector++ ?>

                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                    <?php } ?>
                                </select>
                                <label for="sec2">Sector</label>
                                <button class="btn-save btn btn-warning btn-sm">Save</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form md-outline my-2 Her">
                                    <input type="text" id="title-function" class="form-control" name="title" value="<?php echo $bgeditinfo['title'] ?>" />
                                    <label for="title-function">Title - Function</label>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="text-right" style="margin:0; padding:0">
                                    <input  name="background_id" id="background_id" />
                                    <input class="btn btn-warning" type="submit" name="updatebackground" value="Submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Background -->
<div class="modal fade" id="deleteBackground" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../settings/action.php" method="POST">
            <div class="modal-body">
                Are you sure you want to delete a background?

                <input hidden name="background_id" id="background_id" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="deletebackground">Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include 'her-footer.php'; ?>