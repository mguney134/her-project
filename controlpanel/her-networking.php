<?php 

include 'her-header.php'; 

$eventscheck=$db->prepare("SELECT * FROM events");
$eventscheck->execute( );


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
                <a class="nav-link"  href="her-background.php" role="tab">
                    <i class="fas fa-file-alt pr-2"></i>Background</a>
            </li>

            <li class="nav-item">
                <a class="nav-link"  href="her-competences.php" role="tab">
                    <i class="fas fa-cogs pr-2"></i>Competences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"  href="her-networking.php" role="tab">
                    <i class="fas fa-project-diagram pr-2"></i>Networking</a>
            </li>
        </ul>
        <!-- Nav tabs -->
    <!-- Tab panels -->
        <div class="tab-content">
        <!-- Panel 444-Networking Starts-->
            <div class="tab-pane fade in show active" >
                <div class="container py-5 z-depth-1">
                <!--Section: Content-->
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <h3 class="font-weight-bold">Incoming Events</h3>
                      <hr>
                      <div class="row">
                      <!-- event  cards starts -->
                  <div class="row">
                    <style>
                      .testimonial-card .avatar {
                        width: 60px;
                        margin-top: -30px;

                      }

                      .card-up {
                        position: relative;
                        display: inline-block;
                      }

                      .icon {
                        position: absolute;

                      }

                      .icon-heart {
                        left: 15px;
                        /* Move pin1 50px left */
                        top: 15px;
                        /* Move pin1 100px down */
                      }

                      .icon-bookmark {
                        right: 15px;
                        /* Move pin2 350px left */
                        top: 15px;
                        /* Move pin2 30px down */
                      }
                    </style>


                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <div>

                        </div>

                        <!-- Background color -->
                        <div class="card-up">
                          <img
                            src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                            height="100%" alt="woman avatar">

                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>
                        </div>
                        <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/event-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>

                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                        </div>

                        <!-- Card footer -->
                        <div class="rounded-bottom orange darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <div>

                        </div>

                        <!-- Background color -->
                        <div class="card-up">
                          <img src="images/icons/events/event-back.png" width="100%" alt="woman avatar">
                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>

                        </div>
                        <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/event-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">



                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>

                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>



                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>





                        </div>

                        <!-- Card footer -->
                        <div class="rounded-bottom orange darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <div>

                        </div>

                        <!-- Background color -->
                        <div class="card-up">
                          <img src="images/icons/events/project-back.png" width="100%" alt="woman avatar">

                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>
                        </div>
                        <div class="purple darken-4" style="height:10px;">&nbsp;</div>
                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/project-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">



                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>

                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>



                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>





                        </div>

                        <!-- Card footer -->
                        <div class="rounded-bottom purple darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <div>

                        </div>

                        <!-- Background color -->
                        <div class="card-up">
                          <img src="images/icons/events/training-back.png" width="100%" alt="woman avatar">
                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>
                        </div>
                        <div class="green darken-4" style="height:10px;">&nbsp;</div>
                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/training-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">



                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>

                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>

                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                        </div>

                        <!-- Card footer -->
                        <div class="rounded-bottom green darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <div>

                        </div>

                        <!-- Background color -->
                        <div class="card-up">
                          <img src="images/icons/events/vacancy-back.png" width="100%" alt="woman avatar">
                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>
                        </div>
                        <div class="red darken-4" style="height:10px;">&nbsp;</div>
                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/vacancy-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">



                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>

                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>

                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                        </div>

                        <!-- Card footer -->
                        <div class="rounded-bottom red darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12">
                      <!-- Card -->
                      <div class="card testimonial-card" style="cursor: pointer;">

                        <!-- Background color -->
                        <div class="card-up">
                          <img src="images/icons/events/tool-back.png" width="100%" alt="woman avatar">
                          <i class="far fa-star icon icon-heart fa-2x white-text"></i>
                          <i class="far fa-bookmark icon icon-bookmark fa-2x white-text"></i>
                        </div>
                        <div class="blue darken-4" style="height:10px;">&nbsp;</div>
                        <!-- Avatar -->
                        <div class="avatar mx-auto white" style="z-index: 100;">
                          <img src="images/icons/events/tool-icon.png" class="rounded-circle" alt="woman avatar">
                        </div>

                        <!-- Card content -->
                        <div class="card-body">
                          <h6 class="font-weight-bold mb-1" style="letter-spacing: 1px;">
                            How To Identify Your Career Potential</h6>
                          <p class="grey-text text-center mb-0">by MEERDERE DATA / Business</p>
                          <a
                            href="https://www.eventbrite.be/e/how-to-identify-your-career-potential-english-class-tickets-90292726977"></a>
                        </div>
                        <!-- Card footer -->
                        <div class="rounded-bottom blue darken-4 text-center pt-3">
                          <ul class="list-unstyled list-inline font-small">

                            <li class="list-inline-item pr-2 white-text"><i
                                class="fas fa-calendar-alt pr-1"></i>05-07/04/2020</li>


                            <li class="list-inline-item"><a href="#" class="white-text"><i
                                  class="fas fa-map-marker-alt pr-1">
                                </i>Antwerpen</a></li>

                          </ul>
                        </div>

                      </div>
                      <br>
                    </div>
                  </div>

                  <!-- event  cards ends -->

                      <?php while($eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC)) { ?>
                        <div class="col-md-4" style="padding-bottom: 10px;">
                          <div class="card">

                            <!-- Card image -->
                            <div class="view overlay">
                              <img class="card-img-top" src="../<?php echo $eventsinfo['img_link'] ?>" alt="Card image cap">
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
                      <!--This section only editible by  mentor-->
                      <div class="md-form my-3">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="form10" class="md-textarea form-control" rows="10"  disabled><?php echo $herinfo['notes'] ?></textarea>
                        <label for="form10">Your Mentor's/ Coach's Note | Last update: <strong><?php echo $herinfo['note_date'] ?></strong></label>
                      </div>
                      <!--This section only editible by  mentor ends-->
                                   
                    </section>
                </div>
            </div>
        <!-- Panel 444-Networking Ends-->
        </div>
    </div>
<?php include 'her-footer.php'; ?>