<?php

include 'org-header.php';

?>
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified cyan lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="org-info.php">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="org-networking.php">
                <i class="fas fa-project-diagram  pr-2"></i>Networking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="org-talents.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Talents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="org-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

    <div class="tab-content">
        <!-- Panel 111-Information Starts-->
        <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
            <div class=" py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <div class="d-flex flex-row  justify-content-between">
                        <h3 class="font-weight-bold text-left">Your Information</h3>
                        <button type="button" class="btn btn-sm btn-outline-info btn-rounded waves-effect" data-toggle="modal" data-target="#changePassword">Change Password</button>
                    </div>

                    <hr />
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Name Lastname</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1">
                                <?php echo $orginfo['firstname'] . " " . $orginfo['lastname'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Position</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1">
                                <?php echo $orginfo['position'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Organization Type</p>
                        </div>
                        <div class="col-9">
                            <?php echo $orginfo['organization_type'] ?>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Organization Name</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $orginfo['organization_name'] ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Region / City</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $orginfo['region'] ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Are you an Employer?</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1">
                            <?php 
                                if ($orginfo['employer']==1){

                                    echo "Yes";
                                }else{
                                    echo "No";
                                }
                    
                            ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Communication</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $orginfo['communication'] ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Explanation</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $orginfo['explanation'] ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Link</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $orginfo['link'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Logo</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><img src="<?php echo $orginfo['img'] ?>" height="80" alt="<?php echo $orginfo['organization_name'] ?> logo" /></p>
                        </div>
                    </div>

                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">E-mail</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $_SESSION['email'] ?>&nbsp</p>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-md btn-info text-right" type="button" data-toggle="modal" data-target="#editInfo">
                            <i class="fas fa-user-edit mr-1"></i> Edit
                        </button>
                    </div>

                </section>
            </div>
            <!-- Nav tabs -->
        </div>
        <!-- Panel 111-Information Ends -->
        <div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">
                            You are editing the information
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        <div class="modal-body mx-4">
                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form md-outline Org my-1">
                                        <input type="text" id="firstName" class="form-control" name="firstname" value="<?php echo $orginfo['firstname'] ?>" />
                                        <label for="firstName">First name </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form md-outline Org my-1">
                                        <input type="text" id="lastName" class="form-control" name="lastname" value="<?php echo $orginfo['lastname'] ?>" />
                                        <label for="lastName">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline Org my-2">
                                        <input type="text" id="position" class="form-control" name="position" value="<?php echo $orginfo['position'] ?>" />
                                        <label for="position">Position</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 select-outline Org">

                                    <select class="mdb-select md-form md-outline Org my-2" id="org1" name="organization_type" >
                                        <option selected value="<?php echo $orginfo['organization_type'] ?>"><?php echo $orginfo['organization_type'] ?></option>
                                        <option value="Government organization">
                                            Government organization</option>
                                        <option value="NGO / nonprofit">NGO / nonprofit
                                        </option>
                                        <option value="Academia / Education">Academia /
                                            Education
                                        </option>

                                    </select>
                                    <label for="org1">Organization Type</label>

                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="col">
                                    <div class="md-form md-outline Org my-2">
                                        <input type="text" id="orgName" class="form-control" name="organization_name" value="<?php echo $orginfo['organization_name'] ?>" />
                                        <label for="orgName">Organization Name</label>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-12 select-outline Org">

                                    <select class="mdb-select md-form md-outline Org my-2" id="region1" name="region" searchable="Search here..">
                                        <option selected><?php echo $orginfo['region'] ?></option>
                                        <?php
                                        $citycheck = $db->prepare("SELECT city FROM cities");
                                        $citycheck->execute();
                                        $countcity = 0;
                                        while ($cityinfo = $citycheck->fetch(PDO::FETCH_ASSOC)) {
                                            $countcity++ ?>

                                            <option value="<?php echo $cityinfo['city'] ?>"><?php echo $cityinfo['city'] ?></option>

                                        <?php } ?>
                                    </select>
                                    <label for="region1">Region / City</label>

                                </div>
                            </div>

                            <div class="form-row my-2">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input Org" id="materialChecked2" value="1" name="emp" <?php echo $orginfo['employer'] == 1 ? 'checked' : '' ?>>
                                    <label class="form-check-label Org" for="materialChecked2">Please check if you are
                                        employer</label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline Org my-2">
                                        <textarea id="comi" class="md-textarea active-aqua-textarea  form-control" name="communication" rows="2"><?php echo $orginfo['communication'] ?></textarea>
                                        <label for="comi">Communication </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline Org my-2">
                                        <textarea id="intro" class="md-textarea active-aqua-textarea  form-control" name="explanation" rows="2"><?php echo $orginfo['explanation'] ?></textarea>
                                        <label for="intro">Introduction of your
                                            organization</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form md-outline Org my-2">
                                        <input type="text" id="link" class="form-control" name="link" value="<?php echo $orginfo['link'] ?>" />
                                        <label for="link" class="font-weight-normal">Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="file-field">
                                        <div class="btn btn-info btn-sm float-left">
                                            <span>Choose files</span>
                                            <input type="file" name="img" />
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Your Logo" value="<?php echo $orginfo['img'] ?>"/>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info btn-sm" data-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" name="orgupdate" class="btn btn-sm btn-info">Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<!--Change Password Modal starts-->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">
                    Change
                    your password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../settings/action.php" method="POST">
                <div class="modal-body">
                    <div class="row px-1">
                        <div class="col">
                            <div class="md-form md-outline Org mb-1 mt-3">
                                <input name="password" id="oldPassword" type="password" class="form-control validate" required>
                                <label for="oldPassword">Old password</label>
                            </div>
                        </div>
                    </div>

                    <div class="row px-1">
                        <div class="col">
                            <div class="md-form md-outline Org  my-1">
                                <input name="all_password" id="newPassword" type="password" class="form-control validate" required>
                                <label for="newPassword">Create new password</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="md-form md-outline Org  my-1">
                                <input name="confirmpassword" id="conPass" type="password" class="form-control" required>
                                <label for="conPass">Confirm new password</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Close</button>
                    <button type="submit" name="changepassword" class="btn btn-sm btn-info">Save
                        changes</button>
                </div>
        </div>
    </div>
</div>
<!--Change Password Modal ends-->


<?php

include 'org-footer.php';

?>