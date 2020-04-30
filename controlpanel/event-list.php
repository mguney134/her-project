<?php 

include 'mentor-header.php'; 

$eventscheck=$db->prepare("SELECT * FROM events");
$eventscheck->execute( );


?>   
 <!-- Tabbed Nav starts -->
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
                            <a class="nav-link active"  href="event-networking.php" >
                                <i class="fas fa-calendar-alt  pr-2"></i>Events List
                            </a>
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
                                 <h3 class="font-weight-bold">Incoming Events</h3>
                                    <hr>
                                  <!-- event  TABS starts -->
                                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="saved-tab" data-toggle="tab" href="#saved" role="tab"
                                        >Saved</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact"
                                        aria-selected="false">All</a>
                                    </li>
                                  </ul>

                                  <div class="tab-content" id="myTabContent">
                                    <!-- SAVED EVENTS STARTS-->
                                    <div class="tab-pane fade show active" id="saved" role="tabpanel" >
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
                                                  <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8" width="100%" height="100%">
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
                                                  <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                  <!-- External Link -->
                                                  <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                                  <img src="../images/icons/events/event-back.png" width="100%" >
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
                                                  <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                  <!-- External Link -->
                                                  <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                    <!-- SAVED EVENTS ENDS-->

                                    

                                    <!-- ALL EVENTS STARTS-->
                                    <div class="tab-pane fade" id="all" role="tabpanel" >
                                      <div class="row">
                                          <!-- SEARCH IN ALL EVENTS STARTS-->
                                          <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                                              <input class="form-control my-0 py-1 blue-border" type="text" placeholder="Search in all the events" aria-label="Search">
                                              <div class="input-group-append">
                                                <span class="input-group-text blue lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                                                    aria-hidden="true"></i></span>
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
                                                    <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8" width="100%" height="100%">
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
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                                    <img src="../images/icons/events/event-back.png" width="100%" >
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
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                                    <img src="../images/icons/events/project-back.png" width="100%" >
                                                    <!--  icons fas-full far-empty -->
                                                    <i class="fas fa-star icon icon-heart fa-2x yellow-text mt-2"></i>
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
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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

                                          <!-- Event-TRAINING Sample with default image starts-->
                                          <div class="col-lg-4 col-md-12 col-xs-12">
                                            <div class="card testimonial-card" style="cursor: pointer;">
                                                <div class="card-up">
                                                    <!-- Event Type -->
                                                    <div class="green darken-4 text-center" style="height:16px;">
                                                        <p class="font-weight-bold white-text" style="font-size:12px">TRAINING</p>
                                                    </div>
                                                    
                                                    <!-- Background image -->
                                                    <img src="../images/icons/events/training-back.png" width="100%" >
                                                    <!--  icons fas-full far-empty -->
                                                    <i class="fas fa-star icon icon-heart fa-2x yellow-text mt-2"></i>
                                                    <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                                </div>
                                                <!-- Middle Ribbon -->
                                                <div class="green darken-4" style="height:10px;">&nbsp;</div>

                                                <!-- Circle Icon -->
                                                <div class="avatar mx-auto white" style="z-index: 100;">
                                                    <img src="../images/icons/events/training-icon.png" class="rounded-circle">
                                                </div>

                                                <!-- Card content -->
                                                <div class="card-body pt-1">
                                                    <!-- Title -->
                                                    <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                                                                            How To Identify Your Career Potential</h6>
                                                    <!-- Organized By -->
                                                    <!-- Sector -->
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                          <!-- Event-TRAINING Sample with default image ends-->


                                        <!-- Event-VACANCY Sample with default image starts-->
                                          <div class="col-lg-4 col-md-12 col-xs-12">
                                            <div class="card testimonial-card" style="cursor: pointer;">
                                                <div class="card-up">
                                                    <!-- Event Type -->
                                                    <div class="red darken-4 text-center" style="height:16px;">
                                                        <p class="font-weight-bold white-text" style="font-size:12px">VACANCY</p>
                                                    </div>
                                                    
                                                    <!-- Background image -->
                                                    <img src="../images/icons/events/vacancy-back.png" width="100%" >
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
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                                    <img src="../images/icons/events/tool-back.png" width="100%" >
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
                                                    <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                                                    <!-- External Link -->
                                                    <a href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
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
                                    <!-- ALL EVENTS ENDS-->


                            
                                  </div>
                                  <!-- event  TABS ends -->
                                    <div class="row">

                                    <?php while($eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <div class="col-md-4" style="padding-bottom: 10px;">
                                        <div class="card">

                                          <!-- Card image -->
                                          <div class="view overlay">
                                            <img class="card-img-top" src="<?php echo $eventsinfo['img_link'] ?>" alt="Card image cap">
                                            <a>
                                              <div class="mask rgba-white-slight"></div>
                                            </a>
                                          </div>
    
                                          <!-- Button -->
                                          <a class="btn-floating btn-action ml-auto mr-4 mdb-color lighten-3" href="<?php echo $eventsinfo['link'] ?>"><i
                                              class="fas fa-chevron-right pl-1"></i></a>
    
                                          <!-- Card content -->
                                          <div class="card-body">
    
                                            
                                              <p class="text-warning text-center"><?php echo $eventsinfo['type'] ?> | <?php echo $eventsinfo['info'] ?></p>
                                              <h6 class="font-weight-bold mt-1 mb-3" style="letter-spacing: 1px;"><?php echo $eventsinfo['title'] ?></h6>
                                              
                                              <p class="grey-text text-center"><?php echo $eventsinfo['organizer'] ?> / <?php echo $eventsinfo['sector'] ?></p>
                                              
                                              
                                              <p class="text-warning text-center">Target Group : <?php echo $eventsinfo['target_group'] ?></p>
                                                 
                                          </div>
    
                                          <!-- Card footer -->
                                          <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                                            <ul class="list-unstyled list-inline font-small">
                                              
                                              <li class="list-inline-item pr-2 white-text"><i class="fas fa-calendar-alt pr-1"></i><?php echo $eventsinfo['start_date'] ?>-<?php echo $eventsinfo['end_date'] ?></li>
                                              
                                                  
                                              <li class="list-inline-item"><a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"> </i><?php echo $eventsinfo['location'] ?></a></li>
                                            </ul>
                                          </div>
    
                                        </div>
                                      </div>


                                    <?php } ?>

                                    </div>
                                    <!-- Card -->
                                    
                                    <!-- Card -->
                                    
                                   
                    </section>
                </div>
            </div>
                        <!-- Panel 222-Background Ends-->
        </div>
    </div>
<?php include 'mentor-footer.php'; ?>