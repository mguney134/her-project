<?php
    
    include 'her-header.php';
    
  
?>   
 <!-- Tabbed Nav starts -->
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="her-info.php" role="tab">
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="her-background.php" role="tab">
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
        </ul>
        <!-- Nav tabs -->
    <!-- Tab panels -->
        <div class="tab-content">
        <!-- Panel 111-Information Starts-->
            <div class="tab-pane fade in show active" >
                <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <h3 class="font-weight-bold">Your Information</h3>
                        <hr />
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Name Lastname</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['firstname']." ".$herinfo['lastname'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Gender</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['gender'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Year of Birth</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['birth'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Country of Origin</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['country'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Legal Status</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['legalStatus'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Country of Highest Degree</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['degreeCountry'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">Resident City/Town</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $herinfo['town'] ?></p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <p class="text-right">E-mail</p>
                            </div>
                            <div class="col-9">
                                <p class="border-bottom pb-1"><?php echo $_SESSION['email'] ?></p>
                            </div>
                        </div>
                        
                            <div class="text-right">
                                <a class="" href="herprofile-edit.php" >
                                <button class="btn btn-warning text-right">
                                  <i class="fas fa-user-edit mr-1"></i>Edit 
                                </button></a>
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
    
    include 'her-footer.php';

?>