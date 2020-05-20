<?php

include 'org-header.php';
$eventscheck = $db->prepare("SELECT * FROM events");
$eventscheck->execute();


$myeventscheck = $db->prepare("SELECT * FROM events where user_id=:user_id");
$myeventscheck->execute(array(
    'user_id' => $_SESSION['user_id']
));

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script type="text/javascript">
    function typeChange(selectObj) {
        var idx = selectObj.selectedIndex;
        var type_name = selectObj.options[idx].value;

        var post_name = 'name=' + type_name;

        $.ajax({
            url: "ajaxData.php",
            method: "POST",
            data: post_name,
            success: function(group) {
                $("#group").html(group);
            }
        });

    };
</script>
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified cyan lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="org-info.php">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="org-networking.php">
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
    <!-- Panel 222-Networking Starts-->
    <div class="tab-content">
        <div class="tab-pane fade in show active" id="panel222" role="tabpanel">
            <div class=" py-5 z-depth-1 ">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active Org" id="create-tab" data-toggle="tab" href="#create" role="tab">Create</a>
                        </li>
                        <li class="nav-item Org">
                            <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="contact" aria-selected="false">All</a>
                        </li>
                        <li class="nav-item Org">
                            <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-controls="contact" aria-selected="false">Saved</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <!-- CREATE SVEPT POSTS  STARTS-->
                        <div class="tab-pane fade show active" id="create" role="tabpanel">
                            <section class="p-md-3 mx-md-5 text-lg-left">
                                <h5 class="text-center mb-5 pb-3">You can create and share 5 different kind of S-V-E-P-T /
                                    networking post here for
                                    supporting any kind of the target group (HER, Mentor, Employer, Organisation -GO, NGO,
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
                                            A project supporting a target group during a time frame like mentoring, buddying,
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
                                <div class="row text-center my-3">
                                    <div class="col text-center">
                                        <button type="button" data-toggle="modal" data-target="#createPost" class="btn btn-md btn-info ">Create a Networking Post</button>
                                    </div>
                                </div>
                                <h5>Your Networking Posts</h5>
                                <hr>
                                <div class="row">
                                    <?php while ($myeventsinfo = $myeventscheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <!-- Event-EVENT Sample with given image starts-->

                                        <div class="col-lg-4 col-md-12 col-xs-12">
                                            <div class="card testimonial-card">
                                                <div class="card-up">
                                                    <!-- Event Type -->
                                                    <div class="<?php
                                                                switch ($myeventsinfo['type']) {
                                                                    case "Event":
                                                                        echo "orange";
                                                                        break;
                                                                    case "Study":
                                                                        echo "green";
                                                                        break;
                                                                    case "Project":
                                                                        echo "info";
                                                                        break;
                                                                    case "Vacancy":
                                                                        echo "red";
                                                                        break;
                                                                    case "Tool":
                                                                        echo "blue";
                                                                        break;
                                                                }

                                                                ?> darken-4 d-flex justify-content-between m-0 pl-2" style="height:20px;">
                                                        <p class="font-weight-bold white-text" style="font-size:14px"><?php echo $myeventsinfo['type'] ?></p>
                                                        <div style="margin: 0;" class="row pb-2">
                                                            <a data-toggle="modal" style="font-size:12px" data-target="#editPost"><i class="fas fa-pen white-text mr-1"></i></a>
                                                            <a data-toggle="modal" style="font-size:12px" data-val="<?php echo $myeventsinfo['event_id'] ?>" data-target="#deletePost"><i class="fas fa-times white-text mr-1"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- Background image -->
                                                    <?php
                                                    if (!empty($myeventsinfo['img_link'])) { ?>
                                                        <img src="<?php echo $myeventsinfo['img_link'] ?>" width="100%" height="auto">
                                                    <?php } else {
                                                        switch ($myeventsinfo['type']) {
                                                            case "Event":
                                                                echo '<img src="../images/icons/events/event-back.png" width="100%" height="auto">';
                                                                break;
                                                            case "Study":
                                                                echo '<img src="../images/icons/events/study-back.png" width="100%" height="auto" >';
                                                                break;
                                                            case "Project":
                                                                echo '<img src="../images/icons/events/project-back.png" width="100%" height="auto">';
                                                                break;
                                                            case "Vacancy":
                                                                echo '<img src="../images/icons/events/vacancy-back.png" width="100%" height="auto">';
                                                                break;
                                                            case "Tool":
                                                                echo '<img src="../images/icons/events/tool-back.png" width="100%" height="auto">';
                                                                break;
                                                        }
                                                    }
                                                    ?>
                                                    <!-- Bookmark icon -->
                                                    <?php

                                                    $savedpostcheck = $db->prepare("SELECT * FROM savedpost where user_id=:user_id and event_id=:event_id");
                                                    $savedpostcheck->execute(array(
                                                        'user_id' => $_SESSION['user_id'],
                                                        'event_id' => $myeventsinfo['event_id']
                                                    ));
                                                    if ($savedpostinfo = $savedpostcheck->fetch(PDO::FETCH_ASSOC)) {
                                                    ?>
                                                        <a href="../settings/action.php?eventid=<?php echo $myeventsinfo['event_id'] ?>&delsavepost=ok"><i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i></a>
                                                    <?php } else { ?>
                                                        <a href="../settings/action.php?eventid=<?php echo $myeventsinfo['event_id'] ?>&savepost=ok"><i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i></a>
                                                    <?php } ?>
                                                </div>
                                                <!-- Middle Ribbon -->
                                                <div class="<?php
                                                            switch ($myeventsinfo['type']) {
                                                                case "Event":
                                                                    echo "orange";
                                                                    break;
                                                                case "Study":
                                                                    echo "green";
                                                                    break;
                                                                case "Project":
                                                                    echo "info";
                                                                    break;
                                                                case "Vacancy":
                                                                    echo "red";
                                                                    break;
                                                                case "Tool":
                                                                    echo "blue";
                                                                    break;
                                                            }

                                                            ?> darken-4" style="height:10px;">&nbsp;</div>

                                                <!-- Circle Icon -->
                                                <div class="avatar mx-auto white" style="z-index: 100;">

                                                    <?php
                                                    switch ($myeventsinfo['type']) {
                                                        case "Event":
                                                            echo '<img src="../images/icons/events/event-icon.png" class="rounded-circle">';
                                                            break;
                                                        case "Study":
                                                            echo '<img src="../images/icons/events/study-icon.png" class="rounded-circle">';
                                                            break;
                                                        case "Project":
                                                            echo '<img src="../images/icons/events/project-icon.png" class="rounded-circle">';
                                                            break;
                                                        case "Vacancy":
                                                            echo '<img src="../images/icons/events/vacancy-icon.png" class="rounded-circle">';
                                                            break;
                                                        case "Tool":
                                                            echo '<img src="../images/icons/events/tool-icon.png" class="rounded-circle">';
                                                            break;
                                                    }

                                                    ?>
                                                </div>

                                                <!-- Card content -->
                                                <div class="card-body pt-1" style="cursor: pointer;" onclick="window.open('<?php echo $myeventsinfo['link'] ?>')">
                                                    <!-- Title -->
                                                    <a href="<?php echo $myeventsinfo['link'] ?>" target="_blank">
                                                        <h6 class="font-weight-bold mb-1 crop-text-2" style="letter-spacing: 1px;">
                                                            <?php echo $myeventsinfo['title'] ?></h6>
                                                    </a>
                                                    <!-- Organized By -->
                                                    <!-- Sector -->
                                                    <p class="grey-text text-center mb-0"><?php echo $myeventsinfo['organizer'] ?> /
                                                        <?php echo $myeventsinfo['info'] ?></p>
                                                    <!-- External Link -->

                                                </div>

                                                <!-- Card footer -->
                                                <div class="rounded-bottom 
                                        <?php
                                        switch ($myeventsinfo['type']) {
                                            case "Event":
                                                echo "orange";
                                                break;
                                            case "Study":
                                                echo "green";
                                                break;
                                            case "Project":
                                                echo "info";
                                                break;
                                            case "Vacancy":
                                                echo "red";
                                                break;
                                            case "Tool":
                                                echo "blue";
                                                break;
                                        }

                                        ?> darken-4 text-center pt-1">
                                                    <ul class="list-unstyled list-inline font-small mb-1">
                                                        <!-- Date -->
                                                        <li class="list-inline-item pr-2 white-text">
                                                            <i class="fas fa-calendar-alt pr-1"></i><?php echo $myeventsinfo['start_date'] ?>-<?php echo $myeventsinfo['end_date'] ?>
                                                        </li>
                                                        <!-- Location -->
                                                        <li class="list-inline-item">
                                                            <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i><?php echo $myeventsinfo['location'] ?></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <br>
                                        </div>
                                        <!-- Event-EVENT Sample with given image ends-->
                                    <?php } ?>
                                </div>


                            </section>

                        </div>
                        <!-- CREATE SVEPT POSTS  ENDS-->

                        <!-- ALL SVEPT POSTS  STARTS-->
                        <div class="tab-pane fade" id="all" role="tabpanel">
                            <!-- SEARCH IN ALL EVENTS STARTS-->
                            <div class="row">
                                <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                                    <input class="form-control my-0 py-1 border-info" type="text" placeholder="Search networking post by name" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text info accent-4" id="basic-text1"><i class="fas fa-search white-text" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH IN ALL EVENTS ENDS-->

                            <!-- Filter IN ALL post STARTS-->
                            <div class="row mb-4">
                                <!-- by type-->
                                <div class="col-4 select-outline">
                                    <select class="mdb-select md-form md-outline Org my-2" multiple id="filterPosts">
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
                                    <select class="mdb-select md-form md-outline Org my-2" multiple id="filterTarget">
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
                                    <select class="mdb-select md-form md-outline Org my-2" multiple id="filterSector">
                                        <option disabled selected></option>
                                        <?php
                                        $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                        $sectorcheck->execute();

                                        while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                            <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                                <?php echo $sectorinfo['sectors_name'] ?></option>

                                        <?php } ?>
                                    </select>
                                    <label for="filterSector">Filter by Sector</label>
                                </div>
                            </div>
                            <!-- Filter IN ALL post ends-->

                            <div class="row">
                                <?php while ($eventsinfo = $eventscheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <!-- Event-EVENT Sample with given image starts-->
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                        <div class="card testimonial-card">
                                            <div class="card-up">
                                                <!-- Event Type -->
                                                <div class="<?php
                                                            switch ($eventsinfo['type']) {
                                                                case "Event":
                                                                    echo "orange";
                                                                    break;
                                                                case "Study":
                                                                    echo "green";
                                                                    break;
                                                                case "Project":
                                                                    echo "info";
                                                                    break;
                                                                case "Vacancy":
                                                                    echo "red";
                                                                    break;
                                                                case "Tool":
                                                                    echo "blue";
                                                                    break;
                                                            }

                                                            ?> darken-4 text-center" style="height:16px;">
                                                    <p class="font-weight-bold white-text" style="font-size:12px"><?php echo $eventsinfo['type'] ?></p>
                                                </div>
                                                <!-- Background image -->
                                                <?php
                                                if (!empty($eventsinfo['img_link'])) { ?>
                                                    <img src="<?php echo $eventsinfo['img_link'] ?>" width="100%" height="auto">
                                                <?php } else {
                                                    switch ($eventsinfo['type']) {
                                                        case "Event":
                                                            echo '<img src="../images/icons/events/event-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Study":
                                                            echo '<img src="../images/icons/events/study-back.png" width="100%" height="auto" >';
                                                            break;
                                                        case "Project":
                                                            echo '<img src="../images/icons/events/project-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Vacancy":
                                                            echo '<img src="../images/icons/events/vacancy-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Tool":
                                                            echo '<img src="../images/icons/events/tool-back.png" width="100%" height="auto">';
                                                            break;
                                                    }
                                                }
                                                ?>
                                                <!-- Bookmark icon -->
                                                <?php

                                                $savedpostcheck = $db->prepare("SELECT * FROM savedpost where user_id=:user_id and event_id=:event_id");
                                                $savedpostcheck->execute(array(
                                                    'user_id' => $_SESSION['user_id'],
                                                    'event_id' => $eventsinfo['event_id']
                                                ));
                                                if ($savedpostinfo = $savedpostcheck->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <a href="../settings/action.php?eventid=<?php echo $eventsinfo['event_id'] ?>&delsavepost=ok"><i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i></a>
                                                <?php } else { ?>
                                                    <a href="../settings/action.php?eventid=<?php echo $eventsinfo['event_id'] ?>&savepost=ok"><i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i></a>
                                                <?php } ?>
                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="<?php
                                                        switch ($eventsinfo['type']) {
                                                            case "Event":
                                                                echo "orange";
                                                                break;
                                                            case "Study":
                                                                echo "green";
                                                                break;
                                                            case "Project":
                                                                echo "info";
                                                                break;
                                                            case "Vacancy":
                                                                echo "red";
                                                                break;
                                                            case "Tool":
                                                                echo "blue";
                                                                break;
                                                        }

                                                        ?> darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">

                                                <?php
                                                switch ($eventsinfo['type']) {
                                                    case "Event":
                                                        echo '<img src="../images/icons/events/event-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Study":
                                                        echo '<img src="../images/icons/events/study-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Project":
                                                        echo '<img src="../images/icons/events/project-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Vacancy":
                                                        echo '<img src="../images/icons/events/vacancy-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Tool":
                                                        echo '<img src="../images/icons/events/tool-icon.png" class="rounded-circle">';
                                                        break;
                                                }

                                                ?>
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1" style="cursor: pointer;" onclick="window.open('<?php echo $eventsinfo['link'] ?>')">
                                                <!-- Title -->
                                                <a href="<?php echo $eventsinfo['link'] ?>" target="_blank">
                                                    <h6 class="font-weight-bold mb-1 crop-text-2" style="letter-spacing: 1px;">
                                                        <?php echo $eventsinfo['title'] ?></h6>
                                                </a>
                                                <!-- Organized By -->
                                                <!-- Sector -->
                                                <p class="grey-text text-center mb-0"><?php echo $eventsinfo['organizer'] ?> /
                                                    <?php echo $eventsinfo['info'] ?></p>
                                                <!-- External Link -->

                                            </div>

                                            <!-- Card footer -->
                                            <div class="rounded-bottom 
                                        <?php
                                        switch ($eventsinfo['type']) {
                                            case "Event":
                                                echo "orange";
                                                break;
                                            case "Study":
                                                echo "green";
                                                break;
                                            case "Project":
                                                echo "info";
                                                break;
                                            case "Vacancy":
                                                echo "red";
                                                break;
                                            case "Tool":
                                                echo "blue";
                                                break;
                                        }

                                        ?> darken-4 text-center pt-1">
                                                <ul class="list-unstyled list-inline font-small mb-1">
                                                    <!-- Date -->
                                                    <li class="list-inline-item pr-2 white-text">
                                                        <i class="fas fa-calendar-alt pr-1"></i><?php echo $eventsinfo['start_date'] ?>-<?php echo $eventsinfo['end_date'] ?>
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i><?php echo $eventsinfo['location'] ?></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <br>
                                    </div>

                                    <!-- Event-EVENT Sample with given image ends-->
                                <?php } ?>
                            </div>

                        </div>
                        <!-- ALL SVEPT POSTS  ENDS-->

                        <!-- SAVED SVEPT POSTS STARTS-->
                        <div class="tab-pane fade" id="saved" role="tabpanel">
                            <div class="row">

                                <?php
                                $savedidcheck = $db->prepare("SELECT event_id FROM savedpost WHERE user_id =:user_id");
                                $savedidcheck->execute(array(
                                    'user_id' => $_SESSION['user_id']
                                ));

                                while ($savedidinfo = $savedidcheck->fetch(PDO::FETCH_ASSOC)) {

                                    $savedeventscheck = $db->prepare("SELECT * FROM events WHERE event_id=:event_id");
                                    $savedeventscheck->execute(array(
                                        'event_id' => $savedidinfo['event_id']
                                    ));
                                    $savedeventsinfo = $savedeventscheck->fetch(PDO::FETCH_ASSOC);

                                ?>

                                    <!-- Event-EVENT Sample with given image starts-->
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                        <div class="card testimonial-card">
                                            <div class="card-up">
                                                <!-- Event Type -->
                                                <div class="<?php
                                                            switch ($savedeventsinfo['type']) {
                                                                case "Event":
                                                                    echo "orange";
                                                                    break;
                                                                case "Study":
                                                                    echo "green";
                                                                    break;
                                                                case "Project":
                                                                    echo "info";
                                                                    break;
                                                                case "Vacancy":
                                                                    echo "red";
                                                                    break;
                                                                case "Tool":
                                                                    echo "blue";
                                                                    break;
                                                            }

                                                            ?> darken-4 text-center" style="height:16px;">
                                                    <p class="font-weight-bold white-text" style="font-size:12px"><?php echo $savedeventsinfo['type'] ?></p>
                                                </div>
                                                <!-- Background image -->
                                                <?php
                                                if (!empty($savedeventsinfo['img_link'])) { ?>
                                                    <img src="<?php echo $savedeventsinfo['img_link'] ?>" width="100%" height="auto">
                                                <?php } else {
                                                    switch ($savedeventsinfo['type']) {
                                                        case "Event":
                                                            echo '<img src="../images/icons/events/event-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Study":
                                                            echo '<img src="../images/icons/events/study-back.png" width="100%" height="auto" >';
                                                            break;
                                                        case "Project":
                                                            echo '<img src="../images/icons/events/project-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Vacancy":
                                                            echo '<img src="../images/icons/events/vacancy-back.png" width="100%" height="auto">';
                                                            break;
                                                        case "Tool":
                                                            echo '<img src="../images/icons/events/tool-back.png" width="100%" height="auto">';
                                                            break;
                                                    }
                                                }
                                                ?>
                                                <!-- Bookmark icon -->
                                                <?php
                                                $proposedpostcheck = $db->prepare("SELECT * FROM proposed_post where her_id=:her_id and event_id=:event_id");
                                                $proposedpostcheck->execute(array(
                                                    'her_id' => $herinfo['her_id'],
                                                    'event_id' => $savedeventsinfo['event_id']
                                                ));
                                                if ($proposedpostinfo = $proposedpostcheck->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <i class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i>
                                                <?php } ?>

                                                <a href="../settings/action.php?eventid=<?php echo $savedeventsinfo['event_id'] ?>&delsavepost=ok"><i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i></a>

                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="<?php
                                                        switch ($savedeventsinfo['type']) {
                                                            case "Event":
                                                                echo "orange";
                                                                break;
                                                            case "Study":
                                                                echo "green";
                                                                break;
                                                            case "Project":
                                                                echo "info";
                                                                break;
                                                            case "Vacancy":
                                                                echo "red";
                                                                break;
                                                            case "Tool":
                                                                echo "blue";
                                                                break;
                                                        }

                                                        ?> darken-4" style="height:10px;">&nbsp;</div>

                                            <!-- Circle Icon -->
                                            <div class="avatar mx-auto white" style="z-index: 100;">

                                                <?php
                                                switch ($savedeventsinfo['type']) {
                                                    case "Event":
                                                        echo '<img src="../images/icons/events/event-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Study":
                                                        echo '<img src="../images/icons/events/study-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Project":
                                                        echo '<img src="../images/icons/events/project-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Vacancy":
                                                        echo '<img src="../images/icons/events/vacancy-icon.png" class="rounded-circle">';
                                                        break;
                                                    case "Tool":
                                                        echo '<img src="../images/icons/events/tool-icon.png" class="rounded-circle">';
                                                        break;
                                                }

                                                ?>
                                            </div>

                                            <!-- Card content -->
                                            <div class="card-body pt-1" style="cursor: pointer;" onclick="window.open('<?php echo $savedeventsinfo['link'] ?>')">
                                                <!-- Title -->
                                                <a href="<?php echo $savedeventsinfo['link'] ?>" target="_blank">
                                                    <h6 class="font-weight-bold mb-1 crop-text-2" style="letter-spacing: 1px;">
                                                        <?php echo $savedeventsinfo['title'] ?></h6>
                                                </a>
                                                <!-- Organized By -->
                                                <!-- Sector -->
                                                <p class="grey-text text-center mb-0"><?php echo $savedeventsinfo['organizer'] ?> /
                                                    <?php echo $savedeventsinfo['info'] ?></p>
                                                <!-- External Link -->

                                            </div>

                                            <!-- Card footer -->
                                            <div class="rounded-bottom 
                                    <?php
                                    switch ($savedeventsinfo['type']) {
                                        case "Event":
                                            echo "orange";
                                            break;
                                        case "Study":
                                            echo "green";
                                            break;
                                        case "Project":
                                            echo "info";
                                            break;
                                        case "Vacancy":
                                            echo "red";
                                            break;
                                        case "Tool":
                                            echo "blue";
                                            break;
                                    }

                                    ?> darken-4 text-center pt-1">
                                                <ul class="list-unstyled list-inline font-small mb-1">
                                                    <!-- Date -->
                                                    <li class="list-inline-item pr-2 white-text">
                                                        <i class="fas fa-calendar-alt pr-1"></i><?php echo $savedeventsinfo['start_date'] ?>-<?php echo $savedeventsinfo['end_date'] ?>
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i><?php echo $savedeventsinfo['location'] ?></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <br>
                                    </div>
                                    <!-- Event-EVENT Sample with given image ends-->
                                <?php }
                                ?>


                            </div>

                        </div>
                        <!-- SAVED SVEPT POSTS  ENDS-->

                    </div>
                </section>
            </div>
        </div>
        <!-- Panel 222-Networking Starts-->
    </div>

</div>


<!--Create Post Modal starts-->
<div class="modal fade" id="createPost" tabindex="-1" role="dialog" aria-labelledby="createPost" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">Create New Networking Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                    <!-- type  -->
                    <div class="row">

                        <!-- type -->
                        <div class="col select-outline my-0">
                            <?php
                            //Get all event type data
                            $typecheck = $db->prepare("SELECT * FROM eventstype");
                            $typecheck->execute();

                            //Count total number of rows
                            $rowCount = $typecheck->rowCount();
                            ?>
                            <select class="mdb-select md-form md-outline my-2" id="type" name="type" onchange="typeChange(this);">

                                <option disabled selected value=""></option>
                                <?php
                                if ($rowCount > 0) {
                                    while ($typeinfo = $typecheck->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<option value="' . $typeinfo['type_name'] . '">' . $typeinfo['type_name'] . '</option>';
                                    }
                                } else {
                                    echo '<option value="">Type not available</option>';
                                }
                                ?>

                            </select>
                            <label for="type">Networking Post Type</label>

                        </div>
                    </div>
                    <!-- group -->
                    <div class="row">

                        <div class="col select-outline ">
                            <?php
                            $groupcheck = $db->prepare("SELECT * FROM eventsgroup");
                            $groupcheck->execute();

                            //Count total number of rows
                            $rowCount = $groupcheck->rowCount();
                            ?>
                            <select class="mdb-select md-form md-outline  my-2" id="group" name="group">


                            </select>
                            <label for="group">Select Post Type First</label>
                        </div>

                    </div>


                    <!-- title and Organizer -->
                    <div class="row">
                        <div class="col">
                            <!-- title -->
                            <div class="md-form md-outline my-0">
                                <input type="text" id="event-title" class="form-control" name="title" />
                                <label for="event-title">Title</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- organizer -->
                            <div class="md-form md-outline my-0">
                                <input type="text" id="Organizer(s)" class="form-control" name="organizer" />
                                <label for="Organizer(s)">Organizer(s)</label>
                            </div>
                        </div>
                    </div>
                    <!-- Image -->
                    <div class="row">
                        <div class="md-form md-outline  my-2 col">
                            <div class="file-field">
                                <div class="btn btn-info btn-sm float-left">
                                    <span>Choose image</span>
                                    <input type="file" name="img_link">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Upload your cover image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Sector -->
                    <div class="row">
                        <div class="col select-outline ">
                            <select class="mdb-select md-form md-outline my-1" id="secCreate" multiple name="sector[]">

                                <option disabled selected></option>
                                <?php
                                $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                $sectorcheck->execute();

                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                                <?php } ?>

                            </select>
                            <label for="secCreate">Sector</label>

                        </div>
                    </div>
                    <!-- Link -->
                    <div class="row">
                        <div class="col">
                            <div class="md-form md-outline  my-2">
                                <input type="text" id="link" class="form-control" name="link" />
                                <label for="link">Insert Link</label>
                            </div>
                        </div>
                    </div>
                    <!-- Date -->
                    <div class="row">
                        <div class="md-form col-md-6 my-2">
                            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" name="start_date">
                            <label for="from" id="fromDate">From</label>
                        </div>
                        <div class="md-form col-md-6 my-2">
                            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" name="end_date">
                            <label for="to" id="toDate">To</label>
                        </div>
                    </div>
                    <!-- Target Group -->
                    <div class="row">

                        <!-- type -->
                        <div class="col select-outline my-0">
                            <?php
                            //Get all event type data
                            $targetcheck = $db->prepare("SELECT * FROM targetgroup");
                            $targetcheck->execute();

                            //Count total number of rows
                            $rowCount = $targetcheck->rowCount();
                            ?>
                            <select class="mdb-select md-form md-outline my-2" id="target_group" name="target_group">

                                <option disabled selected value=""></option>
                                <?php
                                if ($rowCount > 0) {
                                    while ($targetinfo = $targetcheck->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<option value="' . $targetinfo['target_group_name'] . '">' . $targetinfo['target_group_name'] . '</option>';
                                    }
                                } else {
                                    echo '<option value="">Type not available</option>';
                                }
                                ?>

                            </select>
                            <label for="target_group">Target Group</label>

                        </div>
                    </div>
                    <!-- Location -->
                    <div class="row">

                        <!-- type -->
                        <div class="col select-outline my-0">
                            <?php
                            //Get all event type data
                            $citycheck = $db->prepare("SELECT * FROM cities");
                            $citycheck->execute();

                            //Count total number of rows
                            $rowCount = $citycheck->rowCount();
                            ?>
                            <select class="mdb-select md-form md-outline my-2" id="location" name="location">

                                <option disabled selected value=""></option>
                                <?php
                                if ($rowCount > 0) {
                                    while ($cityinfo = $citycheck->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<option value="' . $cityinfo['city'] . '">' . $cityinfo['city'] . '</option>';
                                    }
                                } else {
                                    echo '<option value="">Type not available</option>';
                                }
                                ?>

                            </select>
                            <label for="location">Location</label>

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Close</button>
                <button type="submit" name="eventadd" class="btn btn-sm btn-info">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--Create Post Modal ends-->


<!--Created Post edit post starts-->
<div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">
                    Edit Networking Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../settings/action.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form md-outline Org my-2">
                                <input type="text" id="event-title" class="form-control" name="title" />
                                <label for="event-title">Title</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <div class="md-form md-outline Org my-2">
                                <input type="text" id="Organizer(s)" class="form-control" name="organizer" />
                                <label for="Organizer(s)">Organizer(s)</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="md-form md-outline Org my-2 col">
                            <div class="file-field">
                                <div class="btn btn-info btn-sm float-left">
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
                        <div class="col select-outline Org">
                            <select class="mdb-select md-form md-outline Org my-2" id="sec11" multiple name="sector">

                                <?php
                                $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
                                $sectorcheck->execute();

                                while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                    <option value="<?php echo $sectorinfo['sectors_name'] ?>">
                                        <?php echo $sectorinfo['sectors_name'] ?>
                                    </option>

                                <?php } ?>

                            </select>
                            <label for="sec11">Sector</label>
                            <button class="btn-save btn btn-info btn-sm">Save</button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">

                            <div class="md-form md-outline Org my-2">
                                <input type="text" id="link" class="form-control" name="link" />
                                <label for="link">Insert Link</label>
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="md-form col-md-6">
                            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" name="start_date">
                            <label for="from" id="fromDate">From</label>
                        </div>
                        <div class="md-form col-md-6">
                            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" name="end_date">
                            <label for="to" id="toDate">To</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col select-outline">
                            <select class="mdb-select md-form md-outline Org my-2" id="tar1" multiple name="target_group">
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
                            <button class="btn-save btn btn-info btn-sm">Save</button>
                        </div>
                        <div class="col">

                            <div class="md-form md-outline Org my-2">
                                <input type="text" id="link" class="form-control" name="link" />
                                <label for="link">Insert Link</label>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-info">Save
                    Changes</button>
            </div>
        </div>
    </div>
</div>
<!--Created Post edit delete post ends-->




<!--Created Post confirm delete post starts-->
<div class="modal fade" id="deletePost" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-info" id="exampleModalLabel">Delete Networking Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../settings/action.php" method="POST">
            <div class="modal-body">
                <p>Are you sure you want to delete this networking post?</p>
                <input hidden name="event_id" id="event_id" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-info" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-info" name="deleteevent">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--Created Post confirm delete post ends-->
<?php

include 'org-footer.php';

?>