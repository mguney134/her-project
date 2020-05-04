<?php  
include 'mentor-header.php';
  
  ?>   
    <div class="col-md-9 mb-4">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link"  href="mentor-info.php" >
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="mentor-networking.php" >
                    <i class="fas fa-project-diagram  pr-2"></i>Networking
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  href="mentor-meeting.php" role="tab">
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
                            <h3 class="font-weight-bold text-left">Meetings with Your Mentees</h3>
                            <button type="button" class="btn btn-sm btn-outline-primary btn-rounded waves-effect" data-toggle="modal" data-target="#newMeeting">New Meeting</button>
                        </div>
  
                      <!--Change Password Modal starts-->
                          <div class="modal fade" id="newMeeting" tabindex="-1" role="dialog"           aria-labelledby="changePassword"
                              aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title blue-text" id="exampleModalLabel">Create a meeting</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="row px-1">
                                                  <div class="col">
                                                      <div class="md-form md-outline  mb-1 mt-3">
                                                          <input name="agenda" id="agenda" type="text" class="form-control">
                                                          <label for="agenda">Agenda</label>
                                                      </div>
                                                  </div>
                                          </div>
                                          
                                              <div class="row px-1">
                                                  <div class="col">
                                                      <div class="md-form md-outline  my-1">
                                                          <input name="all_password" id="newPassword" type="password" class="form-control validate" required>
                                                          <label for="newPassword">Create new password</label>
                                                      </div>
                                                  </div>
                                                  <div class="col">
                                                      <div class="md-form md-outline  my-1">
                                                          <input name="confirmpassword" id="conPass" type="password" class="form-control" required>
                                                          <label for="conPass" >Confirm new password</label>
                                                      </div>
                                                  </div>
                                              </div>
                                          
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-sm btn-outline-primary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                              <!--Change Password Modal ends-->
                      
                      <hr />

                      <!--Meeting Card starts-->
                      <div class="col-12 mb-4">
                        <div class="card z-depth-0 bordered border-light">
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div class="col-md-10 grey lighten-4 rounded-left pt-4">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 mb-2">
                                                
                                                <p class="text-muted">
                                                <i class="far fa-comment-dots indigo-text pr-2"></i><span class="font-weight-bold">Agenda:</span><br> Cv Review
                                                </p>
                                            </div>
                                            <div class="col-lg-3 col-md-6 mb-2">
                                                
                                                <p class="text-muted">
                                                <i class="fas fa-calendar-day indigo-text pr-2"></i> 
                                                25 May 2010 Friday
                                                </p>
                                            </div>
                                            <div class="col-lg-2 col-md-6 mb-2">
                                                
                                                <p class="text-muted">
                                                <i class="far fa-clock indigo-text pr-2"></i> 
                                                18.30
                                                </p>
                                            </div>
                                            <div class="col-lg-4 col-md-6 mb-2">
                                                
                                                <p class="text-muted">
                                                <i class="fas fa-map-marker-alt indigo-text pr-2"></i> 
                                                Brussels, Central Starbucks
                                                </p>
                                            </div>
                                        
                                        </div>
                                
                                        
                                    </div>
                                    
                                    <div class="col-md-2 ">
                                        
                                        <div class="row d-flex justify-content-end mt-1 mb-1">
                                            
                                                <i class="fas fa-pen mr-1"></i>
                                                <i class="fas fa-times mr-1"></i>
                                        
                                        </div>
                                        <div class="text-center pt-2">
                                            <button type="button" class="btn btn-sm btn-primary waves-effect" data-toggle="modal" data-target="#newMeeting">Details</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Meeting Card Ends-->

                  </section>
              </div>
          </div>
              <!-- Nav tabs -->
      </div>
  </div>
                          
  
  <?php
  
  include 'mentor-footer.php';
  
  ?>