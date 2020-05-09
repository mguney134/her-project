<?php include 'mentor-header.php';

$eventscheck=$db->prepare("SELECT * FROM events");
$eventscheck->execute( );
$eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC);

?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
    </script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#type").change(function()
            {
                var type_id=$(this).val();
                var post_id = 'id='+ type_id;

                $.ajax
                ({
                    type: "POST",
                    url: "ajaxData.php",
                    data: post_id,
                    cache: false,
                    success: function(group)
                    {
                        $("#group").html(group);
                    }
                });

            });
        });


    </script>
    <div class="col-md-9 mb-4">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
            <li class="nav-item">
                <a class="nav-link"  href="mentor-info.php" >
                    <i class="fas fa-user pr-2"></i>Info</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active"  href="mentor-networking.php" >
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
            <!-- Panel 222-Background Starts -->
            <div class="tab-pane fade in show active" >
                <div class=" py-5 z-depth-1 ">
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active Mentor" id="saved-tab" data-toggle="tab"
                                    href="#saved" role="tab">Saved</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link Mentor" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                    aria-controls="contact" aria-selected="false">All</a>
                            </li>
                            <li class="nav-item  Mentor">
                                <a class="nav-link" id="create-tab" data-toggle="tab" href="#create" role="tab"
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
                                                <h6 class="font-weight-bold mb-1"
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
                                                <h6 class="font-weight-bold mb-1"
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



                            <!-- ALL SVEPT POSTS  STARTS-->
                            <div class="tab-pane fade" id="all" role="tabpanel">
                                <div class="row">
                                    <!-- SEARCH IN ALL EVENTS STARTS-->
                                    <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                                        <input class="form-control my-0 py-1 border-primary" type="text"
                                        placeholder="Search networking post by name" aria-label="Search">
                                        <div class="input-group-append">
                                            <span class="input-group-text blue accent-4" id="basic-text1"><i
                                        class="fas fa-search white-text" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter IN ALL post STARTS-->
                                <div class="row mb-4">
                                    <!-- by type-->
                                    <div class="col-4 select-outline">
                                    <select class="mdb-select md-form md-outline Mentor my-2" multiple id="filterPosts">
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
                                    <select class="mdb-select md-form md-outline Mentor my-2" multiple id="filterTarget">
                                        <option disabled selected></option>
                                        <option value="Refugees">Refugees</option>
                                        <option value="Job seekers">Job seekers</option>
                                        <option value="Employers">Employers</option>
                                        <option value="Mentors">Mentors</option>
                                        <option value="Study seekers">Study seekers</option>
                                        <option value="Government Organizations">Government Organizations</option>
                                        <option value="NGO / nonprofit">NGO / nonprofit</option>
                                        <option value="Academia / Education">Academia / Education</option>
                                        <option value="All">All</option>
                                        <option value="Migrants ">Migrants</option>
                                    </select>
                                    <label for="filterTarget">Filter by Target Group</label>
                                    </div>
                                    <!-- by target sector-->
                                    <div class="col-4 select-outline">
                                    <select class="mdb-select md-form md-outline Mentor my-2" multiple id="filterSector">
                                        <option disabled selected></option>
                                        <?php
                                            $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                            $sectorcheck->execute();

                                            while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                        <?php echo $sectorinfo['sectors_name'] ?></option>

                                        <?php } ?>
                                    </select>
                                    <label for="filterSector">Sector</label>
                                    </div>
                                </div>
                                <!-- Filter IN ALL post ends-->
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
                            


                            <!-- CREATE SVEPT POSTS  STARTS-->
                            <div class="tab-pane fade" id="create" role="tabpanel">
                                <div class="row">

                                
                                <section class="p-md-3 mx-md-5 text-lg-left">
                                    <h5 class="text-center text-center mb-4 pb-2">You can create and share 5 different
                                        kind of S-V-E-P-T /
                                        networking post here for
                                        supporting any kind of the target group (HER, Mentor, Employer,
                                        Organisation -GO, NGO,
                                        Academia-)
                                    </h5>
                                    
                                    <div class="row text-center d-flex justify-content-center">
                                        <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                            <img src="../images/icons/events/study-icon.png" width="80px">
                                            <h4 class="font-weight-bold mb-4">S-tudy</h4>
                                            <p class="text-muted px-2 mb-md-0">
                                                A study, learning or academic programme like language
                                                course, vocational training, online
                                                course, academic training, etc.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                            <img src="../images/icons/events/vacancy-icon.png" width="80px">
                                            <h4 class="font-weight-bold mb-4">V-acancy</h4>
                                            <p class="text-muted px-2 mb-md-0">
                                                A specific job vacancy, vacancy websites, company vacancy
                                                webpage links, etc.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                                            <img src="../images/icons/events/event-icon.png" width="80px">
                                            <h4 class="font-weight-bold mb-4">E-vent</h4>
                                            <p class="text-muted px-2 mb-lg-0">
                                                A supporting event on a specific date like job fair,
                                                matchmaking event, conference,
                                                workshop,
                                                etc.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                                            <img src="../images/icons/events/project-icon.png" width="80px">
                                            <h4 class="font-weight-bold mb-4">P-roject</h4>
                                            <p class="text-muted px-2 mb-lg-0">
                                                A project supporting a target group during a time frame like
                                                mentoring, buddying,
                                                coaching,
                                                etc.
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                            <img src="../images/icons/events/tool-icon.png" width="80px">
                                            <h4 class="font-weight-bold mb-4">T-ool</h4>
                                            <p class="text-muted px-2 mb-md-0">
                                                A supporting tool like handbook, manual, digital platform,
                                                survey, etc.
                                            </p>
                                        </div>
                                        
                                    </div>
                                    <div class="row text-center my-3">
                                        <div class="col text-center">
                                            <button type="button" data-toggle="modal" data-target="#createPost" class="btn btn-md btn-primary ">Create a Networking Post</button>
                                        </div>
                                    </div>
                                    
                                </section>
                                <!--Create Post Modal starts-->
                                <div class="modal fade" id="createPost" tabindex="-1" role="dialog"
                                        aria-labelledby="createPost" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-primary" id="exampleModalLabel">Create New Networking Post</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" >
                                               <form action="../settings/action.php" method="POST"
                                                                enctype="multipart/form-data" data-parsley-validate>
                                                    <!-- type  -->
                                                    <div class="row">
                                                        
                                                            <!-- type -->
                                                        <div class="col select-outline my-0">
                                                                <?php
                                                                //Get all event type data
                                                                $typecheck=$db->prepare("SELECT * FROM eventstype");
                                                                $typecheck->execute( );

                                                                //Count total number of rows
                                                                $rowCount = $typecheck->rowCount();
                                                                ?>
                                                                <select
                                                                class="mdb-select md-form md-outline  my-2"
                                                                id="posttype" name="type">

                                                                <option disabled selected value=""></option>
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
                                                            <label for="posttype">Networking Post Type</label>
                                                            
                                                        </div>
                                                    </div>
                                                    <!-- group -->
                                                    <div class="row">
                                                        
                                                            <!-- type -->
                                                            <div class="col select-outline ">
                                                                
                                                                <select class="mdb-select md-form md-outline  my-2"
                                                                id="info2"  name="group">
                                                                    <option disabled selected></option>
                                                                

                                                                </select>
                                                            <label for="info2">Select Post Type First</label>
                                                            </div>
                                                    
                                                    </div>
                                                

                                                    <!-- title and Organizer -->
                                                    <div class="row">
                                                        <div class="col">
                                                            <!-- title -->
                                                            <div class="md-form md-outline my-0">
                                                                <input type="text" id="event-title" class="form-control"
                                                                    name="title" />
                                                                <label for="event-title">Title</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <!-- organizer -->
                                                            <div class="md-form md-outline my-0">
                                                                <input type="text" id="Organizer(s)" class="form-control"
                                                                    name="organizer" />
                                                                <label for="Organizer(s)">Organizer(s)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Image -->
                                                    <div class="row">
                                                        <div class="md-form md-outline  my-2 col">
                                                            <div class="file-field">
                                                                <div class="btn btn-primary btn-sm float-left">
                                                                    <span>Choose image</span>
                                                                    <input type="file" name="img_link">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate"
                                                                        type="text"
                                                                        placeholder="Upload your cover image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Sector -->
                                                    <div class="row">
                                                        <div class="col select-outline ">
                                                            <select
                                                                class="mdb-select md-form md-outline my-1"
                                                                id="secCreate" multiple name="sector">

                                                                <option disabled selected></option>
                                                                <?php
                                                                $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                                                $sectorcheck->execute();

                                                                while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                                                <?php } ?>

                                                            </select>
                                                            <label for="secCreate">Sector</label>
                                                            <button
                                                                class="btn-save btn btn-primary btn-sm">Save</button>
                                                        </div>
                                                    </div>
                                                    <!-- Link -->
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="md-form md-outline  my-2">
                                                                <input type="text" id="link"
                                                                    class="form-control" name="link" />
                                                                <label for="link">Insert Link</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Date -->
                                                    <div class="row">
                                                        <div class="md-form col-md-6 my-2">
                                                            <input placeholder="Selected date" type="text"
                                                                id="from" class="form-control datepicker"
                                                                name="start_date">
                                                            <label for="from" id="fromDate">From</label>
                                                        </div>
                                                        <div class="md-form col-md-6 my-2">
                                                            <input placeholder="Selected date" type="text"
                                                                id="to" class="form-control datepicker"
                                                                name="end_date">
                                                            <label for="to" id="toDate">To</label>
                                                        </div>
                                                    </div>
                                                    <!-- Target Group -->
                                                    <div class="row">
                                                        <div class="col select-outline">
                                                            <select class="mdb-select md-form md-outline  my-2"
                                                                id="targett" multiple name="target_group">
                                                                <option disabled selected></option>
                                                                <option value="Refugees">Refugees</option>
                                                                <option value="Job seekers">Job seekers
                                                                </option>
                                                                <option value="Orgs">Employers</option>
                                                                <option value="Mentors">Mentors</option>
                                                                <option value="Study seekers">Study seekers
                                                                </option>
                                                                <option value="Government Organizations">
                                                                    Government
                                                                    Organizations</option>
                                                                <option value="NGO / nonprofit">NGO /
                                                                    nonprofit</option>
                                                                <option value="Academia / Education">
                                                                    Academia / Education
                                                                </option>
                                                                <option value="All">All</option>
                                                                <option value="Migrants ">Migrants</option>

                                                            </select>
                                                            <label for="targett">Target Group</label>
                                                            <button
                                                                class="btn-save btn btn-info btn-sm">Save</button>
                                                        </div>
                                                        
                                                    </div>
                                            
                                                    </form>
                                           

                                            </div>
                                            <div class="modal-footer">
                                    
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" type="submit" name="eventadd" class="btn btn-sm btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Create Post Modal ends-->

                                <!-- Created Post-STUDY Sample with default image starts-->
                                <div class="col-lg-4 col-md-12 col-xs-12">
                                    <div class="card testimonial-card" style="cursor: pointer;">
                                        <div class="card-up">
                                            <!-- Event Type -->
                                            <div class="row green darken-4 d-flex justify-content-between m-0" style="height:20px;">
                                                <div>&nbsp;&nbsp;&nbsp;</div>
                                                <p class="font-weight-bold white-text" style="font-size:14px">&nbsp;STUDY</p>
                                                <div style="margin: 0;" class="row pb-2">
                                                    <a data-toggle="modal" style="font-size:12px" data-target="#editPost"><i
                                                            class="fas fa-pen white-text mr-1"></i></a>
                                                    <a data-toggle="modal" style="font-size:12px" data-target="#deletePost"><i
                                                            class="fas fa-times white-text mr-1"></i></a>
                                                </div>
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
                                <!-- Created Post-STUDY Sample with default image ends-->


                                <!--Created Post edit post starts-->
                                <div class="modal fade" id="editPost" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-primary" id="exampleModalLabel">
                                                    Edit Networking Post</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="../settings/action.php" method="POST"
                                                    enctype="multipart/form-data" data-parsley-validate>


                                                    <div class="form-row">
                                                        <div class="col">
                                                            <!-- First name -->
                                                            <div class="md-form md-outline  my-2">
                                                                <input type="text" id="event-title"
                                                                    class="form-control" name="title" />
                                                                <label for="event-title">Title</label>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <!-- Last name -->
                                                            <div class="md-form md-outline  my-2">
                                                                <input type="text" id="Organizer(s)"
                                                                    class="form-control" name="organizer" />
                                                                <label
                                                                    for="Organizer(s)">Organizer(s)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="md-form md-outline  my-2 col">
                                                            <div class="file-field">
                                                                <div class="btn btn-primary btn-sm float-left">
                                                                    <span>Choose image</span>
                                                                    <input type="file" name="img_link">
                                                                </div>
                                                                <div class="file-path-wrapper">
                                                                    <input class="file-path validate"
                                                                        type="text"
                                                                        placeholder="Upload your cover image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col select-outline ">
                                                            <select
                                                                class="mdb-select md-form md-outline  my-2"
                                                                id="sec11" multiple name="sector">

                                                                <?php
                                                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                                    $sectorcheck->execute();

                                                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                                <option
                                                                    value="<?php echo $sectorinfo['sectors_name'] ?>">
                                                                    <?php echo $sectorinfo['sectors_name'] ?>
                                                                </option>

                                                                <?php } ?>

                                                            </select>
                                                            <label for="sec11">Sector</label>
                                                            <button
                                                                class="btn-save btn btn-primary btn-sm">Save</button>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">

                                                            <div class="md-form md-outline  my-2">
                                                                <input type="text" id="link"
                                                                    class="form-control" name="link" />
                                                                <label for="link">Insert Link</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-2">
                                                        <div class="md-form col-md-6">
                                                            <input placeholder="Selected date" type="text"
                                                                id="from" class="form-control datepicker"
                                                                name="start_date">
                                                            <label for="from" id="fromDate">From</label>
                                                        </div>
                                                        <div class="md-form col-md-6">
                                                            <input placeholder="Selected date" type="text"
                                                                id="to" class="form-control datepicker"
                                                                name="end_date">
                                                            <label for="to" id="toDate">To</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col select-outline">
                                                            <select
                                                                class="mdb-select md-form md-outline  my-2"
                                                                id="tar1" multiple name="target_group">
                                                                <option disabled selected></option>
                                                                <option value="Refugees">Refugees</option>
                                                                <option value="Job seekers">Job seekers
                                                                </option>
                                                                <option value="Orgs">Employers</option>
                                                                <option value="Mentors">Mentors</option>
                                                                <option value="Study seekers">Study seekers
                                                                </option>
                                                                <option value="Government Organizations">
                                                                    Government
                                                                    Organizations</option>
                                                                <option value="NGO / nonprofit">NGO /
                                                                    nonprofit</option>
                                                                <option value="Academia / Education">
                                                                    Academia / Education
                                                                </option>
                                                                <option value="All">All</option>
                                                                <option value="Migrants ">Migrants</option>

                                                            </select>
                                                            <label for="tar1">Target Group</label>
                                                            <button
                                                                class="btn-save btn btn-info btn-sm">Save</button>
                                                        </div>
                                                        <div class="col">

                                                            <div class="md-form md-outline  my-2">
                                                                <input type="text" id="link"
                                                                    class="form-control" name="link" />
                                                                <label for="link">Insert Link</label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-sm btn-primary">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Created Post edit delete post ends-->



                                <!--Created Post confirm delete post starts-->
                                <div class="modal fade" id="deletePost" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-primary" id="exampleModalLabel">
                                                    Delete Networking Post</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this networking post?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Created Post confirm delete post ends-->


                                

                                </div>   
                            </div>




                        </div>

                    </section>
                </div>
            </div>
            <!-- Panel 222-Background Ends-->
            <!-- Nav tabs -->
        </div>
    </div>


<?php

include 'mentor-footer.php';

?>