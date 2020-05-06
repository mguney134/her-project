<?php
    
    include 'employer-header.php';
    
  
?>   
  <!-- CONTAINER STARTS-->
  

        <!-- Tabbed Nav starts -->
        <div class="col-md-9 mb-4">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs md-tabs nav-justified purple lighten-2" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#panel111" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel222" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#panel333" role="tab">
                <i class="fas fa-search pr-2"></i>Search</a>
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
                    <button type="button" class="btn btn-sm btn-outline-purple btn-rounded waves-effect"
                      data-toggle="modal" data-target="#changePassword">Change Password</button>
                  </div>

                  <!--Change Password Modal starts-->
                  <div class="modal fade" id="changePassword" tabindex="-1" role="dialog"
                    aria-labelledby="changePassword" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title purple-text" id="exampleModalLabel">Change your password</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row px-1">
                            <div class="col">
                              <div class="md-form md-outline Employer mb-1 mt-3">
                                <input name="all_password" id="oldPassword" type="password"
                                  class="form-control validate" required>
                                <label for="oldPassword">Old password</label>
                              </div>
                            </div>
                          </div>

                          <div class="row px-1">
                            <div class="col">
                              <div class="md-form md-outline Employer  my-1">
                                <input name="all_password" id="newPassword" type="password"
                                  class="form-control validate" required>
                                <label for="newPassword">Create new password</label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="md-form md-outline Employer  my-1">
                                <input name="confirmpassword" id="conPass" type="password" class="form-control"
                                  required>
                                <label for="conPass">Confirm new password</label>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-sm btn-outline-purple"
                            data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-sm btn-purple">Save changes</button>
                        </div>
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
                      <p class="border-bottom pb-1">
                        <?php echo $employerinfo['firstname']." ".$employerinfo['lastname'] ?>&nbsp
                      </p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Position</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $employerinfo['position'] ?>&nbsp</p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Name of the Company</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $employerinfo['company'] ?>&nbsp</p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Sector</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $employerinfo['sector'] ?>&nbsp</p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Explanation</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $herinfo['explanation'] ?>&nbsp</p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Link</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $employerinfo['link'] ?>&nbsp</p>
                    </div>
                  </div>
                  <div class="row my-2">
                    <div class="col-3">
                      <p class="text-right">Logo</p>
                    </div>
                    <div class="col-9">
                      <p class="border-bottom pb-1"><?php echo $employerinfo['logo'] ?>&nbsp</p>
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
                    <div class="text-right">
                      <button class="btn btn-purple text-right btn-md" type="button" data-toggle="modal"
                        data-target="#editInfo">
                        <i class="fas fa-user-edit mr-1"></i> Edit
                      </button>
                    </div>
                  </div>


                  <!-- Modal -->
                  <div class="modal fade" id="editInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title text-secondary" id="exampleModalLabel">
                            You are editing your information
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body  mx-4">
                          <form>
                            <div class="form-row">
                              <div class="col">
                                <!-- First name -->
                                <div class="md-form md-outline Employer my-1">
                                  <input type="text" id="firstName" class="form-control" name="firstname" value="<?php echo $employerinfo['firstname'] ?>" />
                                  <label for="firstName">First name </label>
                                </div>
                              </div>
                              <div class="col">
                                <!-- Last name -->
                                <div class="md-form md-outline Employer my-1">
                                  <input type="text" id="lastName" class="form-control" name="lastname" value="<?php echo $employerinfo['lastname'] ?>"/>
                                  <label for="lastName">Last name</label>
                                </div>
                              </div>
                            </div>

                            <div class="form-row">
                              <div class="col">
                                <div class="md-form md-outline Employer my-2">
                                  <input type="text" id="position" class="form-control" name="position" value="<?php echo $employerinfo['position'] ?>"/>
                                  <label for="position">Position</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col">
                                <div class="md-form md-outline Employer my-2">
                                  <input type="text" id="companyName" class="form-control" name="company" value="<?php echo $employerinfo['company'] ?>"/>
                                  <label for="companyName">Name of the Company</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row ">
                              <div class="col-md-12 select-outline Employer">

                                <select class="mdb-select md-form md-outline Employer my-2" id="sector2">
                                    <option selected="" value="<?php echo $employerinfo['sector'] ?>"><?php echo $employerinfo['sector'] ?></option>
                                    <?php 
                                    $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();
                                    $sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC);
                                    while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                    <?php }?>
                                </select>
                                <label for="sector2">Sector</label>

                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-12 select-outline Employer">

                                <select class="mdb-select md-form md-outline Employer  my-2" id="num1" name="employees">
                                  <option disabled selected></option>
                                  <option value="1-10 employees">1-10 employees</option>
                                  <option value="11-50 employees">11-50 employees</option>
                                  <option value="51-200 employees">51-200 employees</option>
                                  <option value="201-500 employees">201-500 employees</option>
                                  <option value="501-1.000 employees">501-1.000 employees</option>
                                  <option value="1.001-5.000 employees">1.001-5.000 employees</option>
                                  <option value="5001-10.000 employees">5001-10.000 employees</option>
                                  <option value="10.001+ employees">10.001+ employees</option>
                                </select>
                                <label for="num1" class="">Number of employees</label>

                              </div>
                            </div>
                           
                            <div class="form-row">
                              <div class="col">
                                <div class="md-form md-outline Employer my-2">
                                  <textarea id="intro" class="md-textarea active-purple-textarea  form-control"
                                    rows="2"></textarea>
                                  <label for="intro">Introduction of your company/Employeranization </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col">
                                <div class="md-form md-outline Employer my-2">
                                  <input type="text" id="materialContactFormEmail" class="form-control" name="link"/>
                                  <label for="materialContactFormEmail" class="font-weight-normal">Link</label>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col">
                                <form class="md-form my-2" action="#">
                                  <div class="file-field">
                                    <div class="btn btn-purple btn-sm float-left">
                                      <span>Choose files</span>
                                      <input type="file" multiple />
                                    </div>
                                    <div class="file-path-wrapper">
                                      <input class="file-path validate" type="text"
                                        placeholder="Upload one or more files" name="img"/>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-purple btn-sm" data-dismiss="modal">
                            Close
                          </button>
                          <button type="submit" name="employeredit" class="btn btn-sm btn-purple">
                            Save
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

              </div>
              <!-- Nav tabs -->
            </div>
            <!-- Panel 111-Information Ends -->

            <!-- Panel 222-Networking Starts-->
            <div class="tab-pane fade in show" id="panel222" role="tabpanel">
              <div class="container py-5 z-depth-1 ">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active Employer" id="saved-tab" data-toggle="tab" href="#saved"
                        role="tab">Saved</a>
                    </li>
                    <li class="nav-item Employer">
                      <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact"
                        aria-selected="false">All</a>
                    </li>
                    <li class="nav-item Employer">
                      <a class="nav-link" id="all-tab" data-toggle="tab" href="#create" role="tab"
                        aria-controls="contact" aria-selected="false">Create</a>
                    </li>
                  </ul>

                  <div class="tab-content" id="myTabContent">
                    <!-- SAVED SVEPT POSTS STARTS-->
                    <div class="tab-pane fade show active" id="saved" role="tabpanel">
                      <div class="row">
                        <!-- Event-EVENT Sample with given image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="orange darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">EVENT</p>
                              </div>
                              <!-- Background image -->
                              <img
                                src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                                width="100%" height="100%">
                              <!-- icons-->


                              <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/event-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom orange darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-EVENT Sample with given image ends-->

                        <!-- Event-EVENT Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="orange darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">EVENT</p>
                              </div>
                              <!-- Background image -->
                              <img src="../images/icons/events/event-back.png" width="100%">
                              <!-- Bookmark icon -->

                              <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/event-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom orange darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-EVENT Sample with default image ends-->
                      </div>
                    </div>
                    <!-- SAVED SVEPT POSTS  ENDS-->



                    <!-- ALL SVEPT POSTS  STARTS-->
                    <div class="tab-pane fade" id="all" role="tabpanel">
                      <div class="row">
                        <!-- SEARCH IN ALL EVENTS STARTS-->
                        <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                          <input class="form-control my-0 py-1 border-info" type="text"
                            placeholder="Search in all the events" aria-label="Search">
                          <div class="input-group-append">
                            <span class="input-group-text teal accent-4" id="basic-text1"><i
                                class="fas fa-search white-text" aria-hidden="true"></i></span>
                          </div>
                        </div>
                        <!-- SEARCH IN ALL EVENTS ENDS-->

                        <!-- Event-EVENT Sample with given image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="orange darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">EVENT</p>
                              </div>
                              <!-- Background image -->
                              <img
                                src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                                width="100%" height="100%">
                              <!-- Bookmark icon -->

                              <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/event-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom orange darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-EVENT Sample with given image ends-->

                        <!-- Event-EVENT Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="orange darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">EVENT</p>
                              </div>
                              <!-- Background image -->
                              <img src="../images/icons/events/event-back.png" width="100%">
                              <!-- Bookmark icon -->

                              <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/event-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom orange darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-EVENT Sample with default image ends-->


                        <!-- Event-PROJECT Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="purple darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">PROJECT</p>
                              </div>

                              <!-- Background image -->
                              <img src="../images/icons/events/project-back.png" width="100%">
                              <!--  icons fas-full far-empty -->

                              <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="purple darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/project-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom purple darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-PROJECT Sample with default image ends-->

                        <!-- Event-STUDY Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="green darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">STUDY</p>
                              </div>

                              <!-- Background image -->
                              <img src="../images/icons/events/study-back.png" width="100%">
                              <!--  icons fas-full far-empty -->

                              <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="green darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/study-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom green darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-STUDY Sample with default image ends-->


                        <!-- Event-VACANCY Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="red darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">VACANCY</p>
                              </div>

                              <!-- Background image -->
                              <img src="../images/icons/events/vacancy-back.png" width="100%">
                              <!--  icons fas-full far-empty -->

                              <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="red darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/vacancy-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom red darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-VACANCY Sample with default image ends-->

                        <!-- Event-TOOL Sample with default image starts-->
                        <div class="col-lg-4 col-md-12 col-xs-12">
                          <div class="card testimonial-card" style="cursor: pointer;">
                            <div class="card-up">
                              <!-- Event Type -->
                              <div class="blue darken-4 text-center" style="height:16px;">
                                <p class="font-weight-bold white-text" style="font-size:12px">TOOL</p>
                              </div>

                              <!-- Background image -->
                              <img src="../images/icons/events/tool-back.png" width="100%">
                              <!--  icons fas-full far-empty -->

                              <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                            </div>
                            <!-- Middle Ribbon -->
                            <div class="blue darken-4" style="height:10px;">&nbsp;</div>

                            <!-- Circle Icon -->
                            <div class="avatar mx-auto white" style="z-index: 100;">
                              <img src="../images/icons/events/tool-icon.png" class="rounded-circle">
                            </div>

                            <!-- Card content -->
                            <div class="card-body pt-1">
                              <!-- Title -->
                              <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                How To Identify Your Career Potential</h6>
                              <!-- Organized By -->
                              <!-- Sector -->
                              <p class="grey-text text-center mb-0">by MEERDERE DATA /
                                Business</p>
                              <!-- External Link -->
                              <a
                                href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                            </div>

                            <!-- Card footer -->
                            <div class="rounded-bottom blue darken-4 text-center pt-1">
                              <ul class="list-unstyled list-inline font-small mb-1">
                                <!-- Date -->
                                <li class="list-inline-item pr-2 white-text">
                                  <i class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                </li>
                                <!-- Location -->
                                <li class="list-inline-item">
                                  <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                </li>
                              </ul>
                            </div>

                          </div>
                          <br>
                        </div>
                        <!-- Event-TOOL Sample with default image ends-->

                      </div>
                    </div>
                    <!-- ALL SVEPT POSTS  ENDS-->

                    <!-- CREATE SVEPT POSTS  STARTS-->
                    <div class="tab-pane fade" id="create" role="tabpanel">
                      <section class="p-md-3 mx-md-5 text-lg-left">
                        <h5 class="text-center mb-5 pb-3">You can create and share 5 different kind of S-V-E-P-T /
                          networking post here for
                          supporting any kind of the target group (HER, employer, Employer, Organisation -GO, NGO,
                          Academia-)
                        </h5>
                        <div class="row text-center d-flex justify-content-center">
                          <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                            <img src="../images/icons/events/study-icon.png" width="80px">
                            <h4 class="font-weight-bold mb-4">S-tudy</h4>
                            <p class="text-muted px-2 mb-md-0">
                              A study, learning or academic programme like language course, vocational training, online
                              course, academic training, etc.
                            </p>
                          </div>
                          <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                            <img src="../images/icons/events/vacancy-icon.png" width="80px">
                            <h4 class="font-weight-bold mb-4">V-acancy</h4>
                            <p class="text-muted px-2 mb-md-0">
                              A specific job vacancy, vacancy websites, company vacancy webpage links, etc.
                            </p>
                          </div>
                          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                            <img src="../images/icons/events/event-icon.png" width="80px">
                            <h4 class="font-weight-bold mb-4">E-vent</h4>
                            <p class="text-muted px-2 mb-lg-0">
                              A supporting event on a specific date like job fair, matchmaking event, conference,
                              workshop,
                              etc.
                            </p>
                          </div>
                          <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                            <img src="../images/icons/events/project-icon.png" width="80px">
                            <h4 class="font-weight-bold mb-4">P-roject</h4>
                            <p class="text-muted px-2 mb-lg-0">
                              A project supporting a target group during a time frame like employering, buddying,
                              coaching,
                              etc.
                            </p>
                          </div>


                          <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                            <img src="../images/icons/events/tool-icon.png" width="80px">
                            <h4 class="font-weight-bold mb-4">T-ool</h4>
                            <p class="text-muted px-2 mb-md-0">
                              A supporting tool like handbook, manual, digital platform, survey, etc.
                            </p>
                          </div>
                        </div>
                      </section>

                      <form action="../settings/action.php" method="POST" enctype="multipart/form-data"
                        data-parsley-validate>
                        <div class="form-row">
                          <div class="col">
                            <h5 class="pb-2">You are creating a/an</h5>
                          </div>
                          <div class="col select-outline Employer">
                            <?php
                                    //Get all event type data
                                    $typecheck=$db->prepare("SELECT * FROM eventstype");
                                    $typecheck->execute( );

                                    //Count total number of rows
                                    $rowCount = $typecheck->rowCount();
                                    ?>
                            <select class="mdb-select md-form md-outline Employer my-2" name="type" id="typeEvent">
                              <option disabled selected></option>
                              <?php
                                        if($rowCount > 0){
                                            while($typeinfo=$typecheck->fetch(PDO::FETCH_ASSOC)){
                                                echo '<option value="'.$typeinfo['type_id'].'">'.$typeinfo['type_name'].'</option>';
                                            }
                                        }else{
                                            echo '<option value="">Type not available</option>';
                                        }
                                        ?>
                            </select>
                            <label for="typeEvent">Type of Event</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col select-outline Employer">
                            <select class="mdb-select md-form md-outline Employer my-2" name="info" id="group">
                              <option disabled selected></option>
                              <optgroup class="text-primary" label="Event / Project">
                                <option value="employering">employering</option>
                                <option value="Job Coaching">Job Coaching</option>
                                <option value="Job matching/ Job fair">Job matching/ Job
                                  fair</option>
                                <option value="Orientation">Orientation</option>
                                <option value="Information">Information</option>
                                <option value="Digital">Digital</option>
                              </optgroup>
                              <optgroup label="Training / Study">
                                <option value="Language (NL)">Language (NL)</option>
                                <option value="Vocational training">Vocational training
                                </option>
                                <option value="High school bachelor">High school
                                  bachelor</option>
                                <option value="University bachelor">University bachelor
                                </option>
                                <option value="Master / MaNaMa">Master / MaNaMa</option>
                                <option value="Preparation program">Preparation program
                                </option>
                              </optgroup>
                              <optgroup label="Vacancies">
                                <option value="Job">Job</option>
                                <option value="Internship">Internship</option>
                                <option value="Volunteer Job">Volunteer Job</option>
                              </optgroup>
                              <optgroup label="Tool">
                                <option value="Digital platform">Digital platform
                                </option>
                                <option value="Manual">Manual</option>
                                <option value="Checklist">Checklist</option>
                                <option value="Application">Application</option>
                              </optgroup>
                            </select>
                            <label for="group">Description of Event</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col">
                            <!-- First name -->
                            <div class="md-form md-outline Employer my-2">
                              <input type="text" id="event-title" class="form-control" name="title" />
                              <label for="event-title">Title</label>
                            </div>
                          </div>
                          <div class="col">
                            <!-- Last name -->
                            <div class="md-form md-outline Employer my-2">
                              <input type="text" id="Organizer(s)" class="form-control" name="organizer" />
                              <label for="Organizer(s)">Organizer(s)</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="md-form md-outline Employer my-2 col">
                            <div class="file-field">
                              <div class="btn btn-purple btn-sm float-left">
                                <span>Choose image</span>
                                <input type="file" name="img_link">
                              </div>
                              <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your cover image">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col select-outline Employer">
                            <select class="mdb-select md-form md-outline Employer my-2" id="sec11" multiple
                              name="sector">

                              <?php
                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                    $sectorcheck->execute();

                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                              <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                <?php echo $sectorinfo['sectors_name'] ?></option>

                              <?php } ?>

                            </select>
                            <label for="sec11">Sector</label>
                            <button class="btn-save btn btn-purple btn-sm">Save</button>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col">

                            <div class="md-form md-outline Employer my-2">
                              <input type="text" id="link" class="form-control" name="link" />
                              <label for="link">Insert Link</label>
                            </div>
                          </div>
                        </div>
                        <div class="row my-2">
                          <div class="md-form col-md-6">
                            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker"
                              name="start_date">
                            <label for="from" id="fromDate">From</label>
                          </div>
                          <div class="md-form col-md-6">
                            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker"
                              name="end_date">
                            <label for="to" id="toDate">To</label>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Employer my-2" id="tar1" multiple
                              name="target_group">
                              <option disabled selected></option>
                              <option value="Refugees">Refugees</option>
                              <option value="Job seekers">Job seekers</option>
                              <option value="Employers">Employers</option>
                              <option value="employers">employers</option>
                              <option value="Study seekers">Study seekers</option>
                              <option value="Government Organizations">Government Organizations</option>
                              <option value="NGO / nonprofit">NGO / nonprofit</option>
                              <option value="Academia / Education">Academia / Education</option>
                              <option value="All">All</option>
                              <option value="Migrants ">Migrants</option>

                            </select>
                            <label for="tar1">Target Group</label>
                            <button class="btn-save btn btn-purple btn-sm">Save</button>
                          </div>
                          <div class="col">

                            <div class="md-form md-outline Employer my-2">
                              <input type="text" id="link" class="form-control" name="link" />
                              <label for="link">Insert Link</label>
                            </div>
                          </div>
                        </div>

                        <div class="row text-right">
                          <input type="text" id="link" class="form-control" name="employer_id"
                            value="<?php echo $employerinfo['employer_id'] ?>" hidden="" />


                          <input class="btn btn-purple" type="submit" name="eventadd" value="Create">



                        </div>
                      </form>
                    </div>
                    <!-- CREATE SVEPT POSTS  ENDS-->


                  </div>

                </section>


              </div>
            </div>
            <!-- Panel 222-Networking Starts-->


            <!-- Panel 333-SEARCH FOR TALENTS START-->
            <div class="tab-pane fade in show" id="panel333" role="tabpanel">
              <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                  <h3 class="font-weight-bold">Search for Talents</h3>
                  <hr>
                  <!-- SEARCH IN ALL EVENTS STARTS-->
                  <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                    <input class="form-control my-0 py-1 purple-border" type="text"
                      placeholder="Search in all talents by Name" aria-label="Search">
                    <div class="input-group-append">
                      <span class="input-group-text purple lighten-3" id="basic-text1"><i
                          class="fas fa-search text-grey" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <!-- SEARCH IN ALL EVENTS ENDS-->




                </section>
              </div>
            </div>
            <!-- Panel 333-SEARCH FOR TALENTS ENDS-->
          </div>
          <!-- Grid column -->
        </div>
        <!-- Tabbed Nav starts -->
      </div>
      <!-- Grid row -->
    </section>
    <!-- Section: Team v.1 ends-->
  </div>
  <!-- CONTAINER ENDS -->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  <!-- SCRIPTS -->
  <script type="text/javascript" id="cookieinfo" src="//cookieinfoscript.com/js/cookieinfo.min.js" data-bg="#efefef"
    data-fg="#333333" data-link="#4CC4EA" data-cookie="CookieInfoScript" data-text-align="center"
    data-divlinkbg="#4CC4EA" data-close-text="Got it!" data-moreinfo="./terms_of_use.html">
    </script>
  <!-- JQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.js"></script>
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>

  <!-- Custom scripts -->
  <script>
    $(document).ready(function () {

      $('.testimonial-card').click(function () {
        window.location = $(this).find("a").attr("href");
      });

    });

    $(".datepicker").pickadate({
      // Escape any “rule” characters with an exclamation mark (!).
      format: " mmm, yyyy",
      formatSubmit: "mmm/yyyy",
      hiddenPrefix: "prefix__",
      hiddenSuffix: "__suffix"
    });
    // Material Select Initialization
    $(document).ready(function () {
      $(".mdb-select").materialSelect();
    });
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    });
  </script>

</body>

</html>