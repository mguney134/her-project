<?php

include 'mentor-header.php';

$eventscheck=$db->prepare("SELECT * FROM events");
$eventscheck->execute( );
$eventsinfo=$eventscheck->fetch(PDO::FETCH_ASSOC);

?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
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
                <div class="container py-5 z-depth-1 ">
                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                        <h3 class="font-weight-bold">
                            Create an Event
                        </h3>
                        <hr />
                        
                        <section class="p-md-3 mx-md-5 text-lg-left">
                            <h5 class="text-center mb-5 pb-3">You can create and share 5 different kind of EVENTS here for supporting any kind of the target group (HER, Mentor, Employer, Organisation -GO, NGO, Academia-)</h5>
                            <div class="row text-center d-flex justify-content-center">
                                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                                    <img src="../images/icons/events/event-icon.png" width="80px">
                                    <h4 class="font-weight-bold mb-4">Event</h4>
                                    <p class="text-muted px-2 mb-lg-0">
                                    A supporting event on a specific date like job fair, matchmaking event, conference, workshop, etc.
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                                <img src="../images/icons/events/project-icon.png" width="80px">
                                    <h4 class="font-weight-bold mb-4">Project</h4>
                                    <p class="text-muted px-2 mb-lg-0">
                                    A project supporting a target group during a time frame like mentoring, buddying, coaching, etc.
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                <img src="../images/icons/events/study-icon.png" width="80px">
                                    <h4 class="font-weight-bold mb-4">Training</h4>
                                    <p class="text-muted px-2 mb-md-0">
                                    A training, learning or academic programme like language course, vocational training, online course, academic training, etc.
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                <img src="../images/icons/events/vacancy-icon.png" width="80px">
                                    <h4 class="font-weight-bold mb-4">Vacancy</h4>
                                    <p class="text-muted px-2 mb-md-0">
                                    A specific job vacancy, vacancy websites, company vacancy webpage links, etc.
                                    </p>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-md-0 mb-5">
                                <img src="../images/icons/events/tool-icon.png" width="80px">
                                    <h4 class="font-weight-bold mb-4">Tool</h4>
                                    <p class="text-muted px-2 mb-md-0">
                                    A supporting tool like handbook, manual, digital platform, survey, etc.
                                    </p>
                                </div>
                            </div>
                        </section>
                        
                        


                    </section>

                    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

                        <hr />
                        <form  action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                            <div class="form-row">
                                <div class="col"><h5 class="pb-2">You are creating a/an</h5></div>
                                <div class="col select-outline">
                                    <?php
                                        //Get all event type data
                                        $typecheck=$db->prepare("SELECT * FROM eventstype");
                                        $typecheck->execute( );

                                        //Count total number of rows
                                        $rowCount = $typecheck->rowCount();
                                        ?>
                                    <select class="mdb-select md-form md-outline my-2" name="type" id="typeEvent">
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
                                <div class="col select-outline">
                                    <select class="mdb-select md-form md-outline my-2" name="info" id="group">
                                        <option disabled selected></option>
                                        <optgroup class="text-primary" label="Event / Project">
                                            <option value="Mentoring">Mentoring</option>
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
                                    <div class="md-form md-outline my-2">
                                        <input type="text" id="event-title" class="form-control" name="title" />
                                        <label for="event-title">Title</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form md-outline my-2">
                                        <input type="text" id="Organizer(s)" class="form-control" name="organizer" />
                                        <label for="Organizer(s)">Organizer(s)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="md-form md-outline my-2 col">
                                    <div class="file-field">
                                        <div class="btn btn-primary btn-sm float-left">
                                            <span>Choose image</span>
                                            <input type="file" name="img_link">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload your cover image" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col select-outline">
                                    <select class="mdb-select md-form md-outline my-2" id="sec11" multiple name="sector">
                                          
                                        <?php
                                        $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                        $sectorcheck->execute();

                                        while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                            <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                        <?php } ?>
                                    
                                    </select>
                                    <label for="sec11">Sector</label>
                                    <button class="btn-save btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                
                                    <div class="md-form md-outline my-2">
                                        <input type="text" id="link" class="form-control" name="link" />
                                        <label for="link">Insert Link</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="md-form col-md-6">
                                    <input placeholder="Selected date" type="text" id="from"
                                        class="form-control datepicker" name="start_date">
                                    <label for="from" id="fromDate">From</label>
                                </div>
                                <div class="md-form col-md-6">
                                    <input placeholder="Selected date" type="text" id="to"
                                        class="form-control datepicker" name="end_date">
                                    <label for="to" id="toDate">To</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col select-outline">
                                    <select class="mdb-select md-form md-outline my-2" id="tar1" multiple name="target_group">
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
                                    <label for="tar1">Target Group</label>
                                    <button class="btn-save btn btn-primary btn-sm">Save</button>
                                </div>
                            </div>
                            <div class="row text-right">
                                <input type="text" id="link" class="form-control" name="mentor_id" value="<?php echo $mentorinfo['mentor_id'] ?>" hidden="" />
                              
                                
                                    <input class="btn btn-primary" type="submit" name="eventadd" value="Create">
                                </div>  
                                

                            </div>
                        </form>
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