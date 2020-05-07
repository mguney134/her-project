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
            <li class="nav-item">
                <a class="nav-link"  href="her-meeting.php" role="tab">
                    <i class="fas fa-user-friends pr-2"></i>Meet</a>
            </li>
        </ul>
        <!-- Nav tabs -->
        <!-- Tab panels -->
        <div class="tab-content">
            <!-- Panel 444-Networking Starts-->
            <div class="tab-pane fade in show active" >
                <div class="container py-5 z-depth-1">
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active Her" id="saved-tab" data-toggle="tab"
                                    href="#saved" role="tab">Saved</a>
                            </li>
                            <li class="nav-item Her">
                                <a class="nav-link" id="all-tab" data-toggle="tab" href="#purposed" role="tab"
                                    aria-selected="false">Purposed</a>
                            </li>
                            <li class="nav-item Her">
                                <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                    aria-selected="false">All</a>
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
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                                                    width="100%" height="100%">
                                                <!-- icons-->

                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
                                                    How To Identify Your Career Potential scsdcds scsdcsd scdscd cdscsdc</h6>
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="../images/icons/events/event-back.png"
                                                    width="100%">
                                                <!-- Bookmark icon -->
                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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



                            <!-- PURPOSED SVEPT POSTS  STARTS-->
                            <div class="tab-pane fade" id="purposed" role="tabpanel">
                                <div class="row">
                                    

                                    <!-- Event-EVENT Sample with given image starts-->
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                        <div class="card testimonial-card" style="cursor: pointer;">
                                            <div class="card-up">
                                                <!-- Event Type -->
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                                                    width="100%" height="100%">
                                                <!-- Bookmark icon -->
                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;" >
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="../images/icons/events/event-back.png"
                                                    width="100%">
                                                <!-- Bookmark icon -->
                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <br>
                                    </div>
                                    <!-- Event-EVENT Sample with default image ends-->



                                </div>
                            </div>
                            <!-- PURPOSED SVEPT POSTS  ENDS-->

                            <!-- ALL SVEPT POSTS  STARTS-->
                            <div class="tab-pane fade" id="all" role="tabpanel">
                                
                                <!-- SEARCH IN ALL EVENTS STARTS-->
                                <div class="row">
                                    <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                                        <input class="form-control my-0 py-1 border-danger" type="text"
                                        placeholder="Search networking post by name" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text orange accent-4" id="basic-text1"><i
                                        class="fas fa-search white-text" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                 </div>
                                <!-- SEARCH IN ALL EVENTS ENDS-->



                                <!-- Filter IN ALL post STARTS-->
                                <div class="row mb-4">
                                    <!-- by type-->
                                    <div class="col-4 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple
                                            id="filterPosts">
                                            <option disabled select></option>
                                            <option value="study">Study</option>
                                            <option value="Vacancy">Vacancy</option>
                                            <option value="Event">Event</option>
                                            <option value="Project">Project</option>
                                            <option value="Tool">Tool</option>
                                        </select>
                                        <label for="filterPosts">Filter by Type</label>
                                    </div>
                                    <!-- by target group-->
                                    <div class="col-4 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple
                                            id="filterTarget">
                                            <option disabled selected></option>
                                            <option value="Refugees">Refugees</option>
                                            <option value="Job seekers">Job seekers</option>
                                            <option value="Employers">Employers</option>
                                            <option value="Mentors">Mentors</option>
                                            <option value="Study seekers">Study seekers</option>
                                            <option value="Government Organizations">Government
                                                Organizations</option>
                                            <option value="NGO / nonprofit">NGO / nonprofit</option>
                                            <option value="Academia / Education">Academia / Education
                                            </option>
                                            <option value="All">All</option>
                                            <option value="Migrants ">Migrants</option>
                                        </select>
                                        <label for="filterTarget">Filter by Target Group</label>
                                    </div>
                                    <!-- by target sector-->
                                    <div class="col-4 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple
                                            id="filterSector">
                                            <option disabled selected></option>
                                            <?php
                                        $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                        $sectorcheck->execute();

                                        while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                            <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                                <?php echo $sectorinfo['sectors_name'] ?></option>

                                            <?php } ?>
                                        </select>
                                        <label for="filterSector">Filter by Sector</label>
                                    </div>
                                </div>
                                <!-- Filter IN ALL post ends-->

                                    <div class="row">
                                        <!-- Event-EVENT Sample with given image starts-->
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                        <div class="card testimonial-card" style="cursor: pointer;">
                                            <div class="card-up">
                                                <!-- Event Type -->
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F91095599%2F353720857161%2F1%2Foriginal.20200205-194936?w=1080&auto=format%2Ccompress&q=75&sharp=10&rect=135%2C0%2C1520%2C760&s=d0e85e99d24e170ffdc215e6e22b67a8"
                                                    width="100%" height="100%">
                                                <!-- Bookmark icon -->
                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                <div class="orange darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">EVENT</p>
                                                </div>
                                                <!-- Background image -->
                                                <img src="../images/icons/events/event-back.png"
                                                    width="100%">
                                                <!-- Bookmark icon -->
                                                <i
                                                    class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="orange darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/event-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                <div class="purple darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">PROJECT</p>
                                                </div>

                                                <!-- Background image -->
                                                <img src="../images/icons/events/project-back.png"
                                                    width="100%">
                                                <!--  icons fas-full far-empty -->
                                                <i
                                                    class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="purple darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/project-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                <div class="green darken-4 text-center"
                                                    style="height:16px;">
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">STUDY</p>
                                                </div>

                                                <!-- Background image -->
                                                <img src="../images/icons/events/study-back.png"
                                                    width="100%">
                                                <!--  icons fas-full far-empty -->
                                                <i
                                                    class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="green darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/study-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">VACANCY</p>
                                                </div>

                                                <!-- Background image -->
                                                <img src="../images/icons/events/vacancy-back.png"
                                                    width="100%">
                                                <!--  icons fas-full far-empty -->
                                                <i
                                                    class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="red darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/vacancy-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
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
                                                    <p class="font-weight-bold white-text"
                                                        style="font-size:12px">TOOL</p>
                                                </div>

                                                <!-- Background image -->
                                                <img src="../images/icons/events/tool-back.png"
                                                    width="100%">
                                                <!--  icons fas-full far-empty -->
                                                <i
                                                    class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <i
                                                    class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="blue darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">
                                                <img src="../images/icons/events/tool-icon.png"
                                                    class="rounded-circle">
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1">
                                                <!-- Title -->
                                                <h6 class="font-weight-bold mb-1 crop-text-2"
                                                    style="letter-spacing: 1px;">
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
                                                        <i
                                                            class="fas fa-calendar-alt pr-1"></i>05-07/04/2020
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i
                                                                class="fas fa-map-marker-alt pr-1"></i>Antwerpen</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <br>
                                    </div>
                                    <!-- Event-TOOL Sample with default image ends-->
                                    </div>
                                    

                                </div>
                            </div>
                            <!-- ALL SVEPT POSTS  ENDS-->


                        </div>

                    </section>
                </div>
            </div>
            <!-- Panel 444-Networking Ends-->
        </div>
    </div>
<?php include 'her-footer.php'; ?>