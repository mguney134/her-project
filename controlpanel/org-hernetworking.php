<?php

include 'org-header.php';

$hercheck = $db->prepare("SELECT * FROM her where her_id=:her_id");
$hercheck->execute(array(
    'her_id' => $_GET['her_id']
));
$herinfo = $hercheck->fetch(PDO::FETCH_ASSOC);

$bgcheck = $db->prepare("SELECT * FROM background where user_id=:user_id");
$bgcheck->execute(array(
    'user_id' => $herinfo['user_id']
));

$motivationcheck = $db->prepare("SELECT * FROM motivation where her_id=:her_id");
$motivationcheck->execute(array(
    'her_id' => $herinfo['her_id']
));
$motivationinfo = $motivationcheck->fetch(PDO::FETCH_ASSOC);


$eventscheck = $db->prepare("SELECT * FROM events");
$eventscheck->execute();
?>
<!-- Tabbed Nav starts -->
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified cyan lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="org-info.php">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="org-networking.php">
                <i class="fas fa-project-diagram  pr-2"></i>Networking
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="org-talents.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Talents</a>
        </li>
    </ul>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2 mt-5" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="org-herinfo.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="org-herbackground.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="org-hercompetences.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="org-hernetworking.php?her_id=<?php echo $herinfo['her_id'] ?>" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>

    </ul>
    <!-- Nav tabs -->
    <!-- Tab panels -->
    <div class="tab-content">
        <div class="tab-pane fade in show active">
            <div class="py-5 z-depth-1">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item  Her">
                            <a class="nav-link active Her" id="all-tab" data-toggle="tab" href="#all" role="tab">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-selected="false">Saved</a>
                        </li>
                        <li class="nav-item Her">
                            <a class="nav-link" id="all-tab" data-toggle="tab" href="#purposed" role="tab" aria-selected="false">Proposed</a>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">

                        <!-- ALL SVEPT POSTS  STARTS-->
                        <div class="tab-pane fade show active" id="all" role="tabpanel">

                            <!-- SEARCH IN ALL EVENTS STARTS-->
                            <div class="row">
                                <div class="input-group md-form form-sm form-2 pl-0 mx-3 mb-4">
                                    <input class="form-control my-0 py-1 border-danger" type="text" placeholder="Search networking post by name" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text orange accent-4" id="basic-text1"><i class="fas fa-search white-text" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH IN ALL EVENTS ENDS-->



                            <!-- Filter IN ALL post STARTS-->
                            <div class="row mb-4">
                                <!-- by type-->
                                <div class="col-4 select-outline">
                                    <select class="mdb-select md-form md-outline Her my-2" multiple id="filterPosts">
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
                                    <select class="mdb-select md-form md-outline Her my-2" multiple id="filterTarget">
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
                                    <select class="mdb-select md-form md-outline Her my-2" multiple id="filterSector">
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
                                                                    echo "purple";
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
                                                $proposedpostcheck = $db->prepare("SELECT * FROM proposed_post where her_id=:her_id and event_id=:event_id");
                                                $proposedpostcheck->execute(array(
                                                    'her_id' => $herinfo['her_id'],
                                                    'event_id' => $eventsinfo['event_id']
                                                ));
                                                if ($proposedpostinfo = $proposedpostcheck->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <a href="../settings/action.php?eventid=<?php echo $eventsinfo['event_id'] ?>&herid=<?php echo $herinfo['her_id'] ?>&&mentorid=<?php echo $mentorinfo['mentor_id'] ?>&unproposepost=ok"><i class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i></a>
                                                <?php } else { ?>
                                                    <a href="../settings/action.php?eventid=<?php echo $eventsinfo['event_id'] ?>&herid=<?php echo $herinfo['her_id'] ?>&&mentorid=<?php echo $mentorinfo['mentor_id'] ?>&proposepost=ok"><i class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i></a>
                                                <?php }
                                                $savedpostcheck = $db->prepare("SELECT * FROM savedpost where user_id=:user_id and event_id=:event_id");
                                                $savedpostcheck->execute(array(
                                                    'user_id' => $herinfo['user_id'],
                                                    'event_id' => $eventsinfo['event_id']
                                                ));
                                                if ($savedpostinfo = $savedpostcheck->fetch(PDO::FETCH_ASSOC)) {
                                                ?>
                                                    <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
                                                <?php } else { ?>
                                                    <i class="far fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>
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
                                                                echo "purple";
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
                                                        echo "purple";
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

                        <!-- SAVED SVEPT POSTS STARTS-->
                        <div class="tab-pane fade" id="saved" role="tabpanel">
                            <div class="row">

                                <?php
                                $savedidcheck = $db->prepare("SELECT event_id FROM savedpost WHERE user_id =:user_id");
                                $savedidcheck->execute(array(
                                    'user_id' => $herinfo['user_id']
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
                                                                    echo "purple";
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
                                                    <a href="../settings/action.php?eventid=<?php echo $savedeventsinfo['event_id'] ?>&herid=<?php echo $herinfo['her_id'] ?>&&mentorid=<?php echo $mentorinfo['mentor_id'] ?>&unproposepost=ok"><i class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i></a>
                                                <?php } else { ?>
                                                    <a href="../settings/action.php?eventid=<?php echo $savedeventsinfo['event_id'] ?>&herid=<?php echo $herinfo['her_id'] ?>&&mentorid=<?php echo $mentorinfo['mentor_id'] ?>&proposepost=ok"><i class="far fa-star icon icon-star fa-2x yellow-text mt-2"></i></a>
                                                <?php } ?>
                                                <i class="fas fa-bookmark icon icon-bookmark fa-2x yellow-text mt-2"></i>

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
                                                                echo "purple";
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
                                                        echo "purple";
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

                        <!-- PURPOSED SVEPT POSTS  STARTS-->
                        <div class="tab-pane fade" id="purposed" role="tabpanel">
                            <div class="row">

                                <?php
                                $proposedidcheck = $db->prepare("SELECT event_id FROM proposed_post WHERE her_id =:her_id");
                                $proposedidcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));

                                while ($proposedidinfo = $proposedidcheck->fetch(PDO::FETCH_ASSOC)) {

                                    $proposedeventscheck = $db->prepare("SELECT * FROM events WHERE event_id=:event_id");
                                    $proposedeventscheck->execute(array(
                                        'event_id' => $proposedidinfo['event_id']
                                    ));
                                    $proposedeventsinfo = $proposedeventscheck->fetch(PDO::FETCH_ASSOC);

                                ?>

                                    <!-- Event-EVENT Sample with given image starts-->
                                    <div class="col-lg-4 col-md-12 col-xs-12">
                                        <div class="card testimonial-card">
                                            <div class="card-up">
                                                <!-- Event Type -->
                                                <div class="<?php
                                                            switch ($proposedeventsinfo['type']) {
                                                                case "Event":
                                                                    echo "orange";
                                                                    break;
                                                                case "Study":
                                                                    echo "green";
                                                                    break;
                                                                case "Project":
                                                                    echo "purple";
                                                                    break;
                                                                case "Vacancy":
                                                                    echo "red";
                                                                    break;
                                                                case "Tool":
                                                                    echo "blue";
                                                                    break;
                                                            }

                                                            ?> darken-4 text-center" style="height:16px;">
                                                    <p class="font-weight-bold white-text" style="font-size:12px"><?php echo $proposedeventsinfo['type'] ?></p>
                                                </div>
                                                <!-- Background image -->
                                                <?php
                                                if (!empty($proposedeventsinfo['img_link'])) { ?>
                                                    <img src="<?php echo $proposedeventsinfo['img_link'] ?>" width="100%" height="auto">
                                                <?php } else {
                                                    switch ($proposedeventsinfo['type']) {
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
                                                <!--i class="far fa-star icon icon-star fa-2x  mt-2"></i-->
                                                <!--a href="../settings/action.php?eventid=<?php echo $proposedeventsinfo['event_id'] ?>&delsavepost=ok"><i class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i></a-->
                                                <i class="fas fa-star icon icon-star fa-2x yellow-text mt-2"></i></a>

                                            </div>
                                            <!-- Middle Ribbon -->
                                            <div class="<?php
                                                        switch ($proposedeventsinfo['type']) {
                                                            case "Event":
                                                                echo "orange";
                                                                break;
                                                            case "Study":
                                                                echo "green";
                                                                break;
                                                            case "Project":
                                                                echo "purple";
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
                                                switch ($proposedeventsinfo['type']) {
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
                                            <div class="card-body pt-1" style="cursor: pointer;" onclick="window.open('<?php echo $proposedeventsinfo['link'] ?>')">
                                                <!-- Title -->
                                                <a href="<?php echo $proposedeventsinfo['link'] ?>" target="_blank">
                                                    <h6 class="font-weight-bold mb-1 crop-text-2" style="letter-spacing: 1px;">
                                                        <?php echo $proposedeventsinfo['title'] ?></h6>
                                                </a>
                                                <!-- Organized By -->
                                                <!-- Sector -->
                                                <p class="grey-text text-center mb-0"><?php echo $proposedeventsinfo['organizer'] ?> /
                                                    <?php echo $proposedeventsinfo['info'] ?></p>
                                                <!-- External Link -->

                                            </div>

                                            <!-- Card footer -->
                                            <div class="rounded-bottom 
                                                <?php
                                                switch ($proposedeventsinfo['type']) {
                                                    case "Event":
                                                        echo "orange";
                                                        break;
                                                    case "Study":
                                                        echo "green";
                                                        break;
                                                    case "Project":
                                                        echo "purple";
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
                                                        <i class="fas fa-calendar-alt pr-1"></i><?php echo $proposedeventsinfo['start_date'] ?>-<?php echo $proposedeventsinfo['end_date'] ?>
                                                    </li>
                                                    <!-- Location -->
                                                    <li class="list-inline-item">
                                                        <a href="#" class="white-text"><i class="fas fa-map-marker-alt pr-1"></i><?php echo $proposedeventsinfo['location'] ?></a>
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
                        <!-- PURPOSED SVEPT POSTS  ENDS-->

                    </div>
                    <!-- ALL SVEPT POSTS  ENDS-->
                    <!-- Panel 111-Information Starts-->
                    <!--div class="tab-pane fade in show active">
                        <div class="py-5 z-depth-1">
                            <!--Section: Content->
                            <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                                <form action="../settings/action.php" method="POST">
                                    <!--This section only editible by  mentor->
                                    <div class="md-form my-3">
                                        <i class="fas fa-pencil-alt prefix"></i>
                                        <textarea id="form10" class="md-textarea form-control" rows="5" name="notes" value=""><?php echo $herinfo['notes'] ?></textarea>
                                        <label for="form10">Mentor's/ Coach's Note</label>
                                    </div>
                                    <!--This section only editible by  mentor ends->
                                    <div class="text-right">
                                        <input class="md-textarea form-control" type="text" name="her_id" value="<?php echo $herinfo['her_id'] ?>" hidden="">

                                        <input class="btn btn-warning" type="submit" name="addNotes" value="Add">
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div-->
                    <!-- Panel 222-Background Ends-->
                </section>

            </div>


        </div>
    </div>
</div>
<?php include 'org-footer.php'; ?>