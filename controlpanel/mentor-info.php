<?php
    
include 'mentor-header.php';
  
?>   
  <div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link active"  href="mentor-info.php" >
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  href="mentor-networking.php" >
                <i class="fas fa-project-diagram  pr-2"></i>Networking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="mentor-meeting.php" role="tab">
            <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

    <!-- Tab panels -->
    <div class="tab-content">
        <!-- Panel 111-Information Starts-->
        <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
            <div class="container py-5 z-depth-1">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <div class="d-flex flex-row  justify-content-between">
                        <h3 class="font-weight-bold text-left">Your Information</h3>
                        <button type="button" class="btn btn-sm btn-outline-primary btn-rounded waves-effect" data-toggle="modal" data-target="#changePassword">Change Password</button>
                    </div>

                    <!--Change Password Modal starts-->
                    <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title deep-orange-text" id="exampleModalLabel">Change your password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="../settings/action.php" method="POST">
                                        <div class="modal-body">
                                            <div class="row px-1">
                                                    <div class="col">
                                                        <div class="md-form md-outline  Her mb-1 mt-3">
                                                            <input name="password" id="oldPassword" type="password" class="form-control validate" required>
                                                            <label for="oldPassword" >Old password</label>
                                                        </div>
                                                    </div>
                                            </div>
                                            
                                                <div class="row px-1">
                                                    <div class="col">
                                                        <div class="md-form md-outline  Her my-1">
                                                            <input name="all_password" id="newPassword" type="password" class="form-control validate" required>
                                                            <label for="newPassword">Create new password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form md-outline  Her  my-1">
                                                            <input name="confirmpassword" id="conPass" type="password" class="form-control" required>
                                                            <label for="conPass" >Confirm new password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-sm btn-secondary" name="changepassword">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <!--Change Password Modal ends-->
                    
                    <hr />
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Name Lastname</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['firstname']." ".$mentorinfo['lastname'] ?></p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Gender</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['gender'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Year of Birth</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $$mentorinfo['birth'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Country of Origin</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $$mentorinfo['country'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Legal Status</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $herinfo['legalStatus'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Level of Study</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['levelofStudy'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Current Job</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['job'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Working Sector</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['sector'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Working Experience</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['experience'] ?>&nbsp</p>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-3">
                            <p class="text-right">Phone Number</p>
                        </div>
                        <div class="col-9">
                            <p class="border-bottom pb-1"><?php echo $mentorinfo['tel'] ?>&nbsp</p>
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
                            <a class="" href="herprofile-edit.php" >
                            <button class="btn btn-primary btn-md text-right">
                                <i class="fas fa-user-edit mr-1"></i>Edit 
                            </button></a>
                        </div>
                </section>
            </div>
        </div>
            <!-- Nav tabs -->
    </div>
</div>
                        

<?php

include 'mentor-footer.php';

?>