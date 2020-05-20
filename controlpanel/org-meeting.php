<?php
include 'org-header.php';

$meetcheck = $db->prepare("SELECT * FROM meetings WHERE org_id=:org_id");
$meetcheck->execute(array(
    'org_id' => $orginfo['org_id']
));

$whomcheck = $db->prepare("SELECT * FROM her where org_talent_match=:org_talent_match");
$whomcheck->execute(array(
    'org_talent_match' => $orginfo['org_id']
));

?>
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
            <a class="nav-link" href="org-talents.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Talents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="org-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->

    <!-- Tab panels -->
    <div class="tab-content">
        <!-- Panel Meeting Starts-->
        <div class="tab-pane fade in show active" id="panel111" role="tabpanel">
            <div class="py-5 z-depth-1">
                <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                    <div class="d-flex flex-row  justify-content-between">
                        <h3 class="font-weight-bold text-left">Meetings with Your Talents</h3>
                        <button type="button" class="btn btn-sm btn-outline-primary btn-rounded waves-effect" data-toggle="modal" data-target="#newMeeting">New Meeting</button>
                    </div>

                    <!--Create a meeting starts-->
                    <div class="modal fade" id="newMeeting" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title blue-text" id="exampleModalLabel">Create a meeting</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="../settings/action.php" method="POST">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline my-3">
                                                    <select class="mdb-select md-form md-outline my-1" id="with" name="with_whom">
                                                        <option disabled selected></option>
                                                        <?php
                                                        while ($whominfo = $whomcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                                                            <option value="<?php echo $whominfo['her_id']?>"><?php echo $whominfo['firstname']. " ".$whominfo['lastname'] ?></option>
                                                            
                                                        <?php } ?>
                                                    </select>
                                                    <label for="with">With Whom?</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline  my-3 mt-1">
                                                    <input name="agenda" id="agenda" type="text" class="form-control">
                                                    <label for="agenda">Meeting's Title</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline  my-3 px-1">
                                                    <input placeholder="Select a date" id="date-picker-example" type="text" class="form-control datepicker" name="meet_date">
                                                    <label for="date-picker-example">When?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline  my-3">
                                                    <input id="time" type="text" class="form-control" name="meet_time">
                                                    <label for="time">What time?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline  my-3">
                                                    <input id="location" type="text" class="form-control" name="location">
                                                    <label for="location">Where?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="md-form md-outline my-3">
                                                    <textarea id="todo" class="md-textarea active-aqua-textarea  form-control" name="discuss" rows="4" placeholder="•&#10;•&#10;•&#10;•"></textarea>
                                                    <label for="todo" class="">Meeting Agenda</label>
                                                </div>
                                            </div>
                                        </div>
                        
                                        <input hidden type="text" class="form-control" name="org_id" value="<?php echo $orginfo['org_id'] ?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-outline-primary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="orgaddmeet" class="btn btn-sm btn-primary">Create Meeting</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Create a meeting Modal ends-->

                    <hr />

                    <!--Meeting Card starts-->
                    <div class="col-12 mb-4">
                        <?php while ($meetinfo = $meetcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="card z-depth-0 bordered border-light mt-1">
                                <div class="card-body p-0">
                                    <div class="row mx-0">
                                        <div class="col-md-10 grey lighten-4 rounded-left pt-4">

                                            <div class="row">
                                                <div class="col-lg-3 col-md-6 mb-2">

                                                    <p class="text-muted">
                                                        <i class="far fa-comment-dots text-primary pr-2"></i><span class="font-weight-bold">Meeting Title:</span><br> <?php echo $meetinfo['agenda']; ?>
                                                    </p>
                                                </div>
                                                <div class="col-lg-3 col-md-6 mb-2">
                                                    <div class="row">
                                                        <p class="text-muted mb-1">
                                                            <i class="fas fa-calendar-day text-primary  pr-2"></i>
                                                            <?php echo $meetinfo['meet_date']; ?>
                                                        </p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="text-muted">
                                                            <i class="far fa-clock text-primary  pr-2"></i>
                                                            <?php echo $meetinfo['meet_time']; ?>
                                                        </p>
                                                    </div>


                                                </div>
                                                <div class="col-lg-3 col-md-6 mb-2">

                                                    <p class="text-muted">
                                                        <i class="fas fa-user-friends text-primary  pr-2"></i>
                                                        <span class="font-weight-bold">With:</span><br> 
                                                        <?php
                                                             $whomhercheck = $db->prepare("SELECT * FROM her where her_id=:her_id");
                                                             $whomhercheck->execute(array(
                                                                 'her_id' => $meetinfo['with_whom']
                                                             ));

                                                             $whomherinfo = $whomhercheck->fetch(PDO::FETCH_ASSOC);

                                                        ?>
                                                        
                                                        <?php echo $whomherinfo['firstname']." ".$whomherinfo['lastname']; ?>
                                                    </p>
                                                    <p class="text-muted"><?php echo $orginfo['firstname']." ".$orginfo['lastname']; ?></p>
                                                </div>
                                                <div class="col-lg-3 col-md-6 mb-2">

                                                    <p class="text-muted">
                                                        <i class="fas fa-map-marker-alt text-primary  pr-2"></i>
                                                        <?php echo $meetinfo['location']; ?>
                                                    </p>
                                                </div>

                                            </div>
                                            <input hidden value="<?php echo $meetinfo['meet_id']; ?>" name="meet_id" id="meet_id" />
                                        </div>
                                        <div class="col-md-2 ">
                                            <div class="row d-flex justify-content-end mt-1 mb-1">
                                                <a data-toggle="modal" data-target="#editMeeting"><i class="fas fa-pen mr-1"></i></a>
                                                <a data-toggle="modal" data-val="<?php echo $meetinfo['meet_id'] ?>" data-target="#deleteMeeting"><i class="fas fa-times mr-1"></i></a>
                                            </div>
                                            <div class="text-center pt-2">
                                                <button type="button" class="btn btn-sm btn-primary waves-effect" data-toggle="modal" data-target="#meetingDetails">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!--Meeting Card Ends-->

                </section>
            </div>
        </div>
        <!-- Nav tabs -->
    </div>
</div>
<!--edit meeting details starts-->
<div class="modal fade" id="editMeeting" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title blue-text" id="exampleModalLabel">Edit the Meeting's Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3 mt-1">
                            <input name="agenda" id="agenda" type="text" class="form-control " value="Cv review">
                            <label for="agenda">Meeting's Agenda</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline my-3">
                            <input id="with2" type="text" class="form-control">
                            <label for="with2">With</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3 px-1">
                            <input placeholder="Date" id="date-picker-example" type="text" class="form-control datepicker " value="25 May 2010 Friday">
                            <label for="date-picker-example">Date</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3">
                            <input id="time" type="text" class="form-control " value="18.30">
                            <label for="time">Time</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3">
                            <input id="location" type="text" class="form-control " value="Brussels, Central Starbucks">
                            <label for="location">Location</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline my-3">
                            <textarea id="todo" class="md-textarea aqua-textarea   form-control" rows="4" placeholder="•vfvfvf&#10;•fvfvf&#10;•vfvfvf&#10;•dvfvfsd"></textarea>
                            <label for="todo" class="">What to discuss?</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline my-2">
                            <textarea id="postMet" class="md-textarea aqua-textarea   form-control" rows="3"></textarea>
                            <label for="postMet" class="">Post-Meeting Report</label>
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
<!--edit meeting details ends-->


<!--confirm delete meeting details starts-->
<div class="modal fade" id="deleteMeeting" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="../settings/action.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title blue-text" id="exampleModalLabel">Delete meeting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this meeting?</p>
            </div>
            <input  name="meeting_id" id="meeting_id" />
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-sm btn-primary" name="deletemeeting">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!--confirm delete meeting details ends-->
<!--Details a meeting starts-->
<div class="modal fade" id="meetingDetails" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title blue-text" id="exampleModalLabel">The Meeting's Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3 mt-1">
                            <input name="agenda" id="agenda" type="text" class="form-control disabled" value="Cv review">
                            <label for="agenda">Meeting's Agenda</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3">
                            <input id="with3" type="text" class="form-control disabled" value="Joe Doe">
                            <label for="with3">With</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3 px-1">
                            <input placeholder="Date" id="date-picker-example" type="text" class="form-control datepicker disabled" value="25 May 2010 Friday">
                            <label for="date-picker-example">Date</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3">
                            <input id="time" type="text" class="form-control disabled" value="18.30">
                            <label for="time">Time</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-3">
                            <input id="location" type="text" class="form-control disabled" value="Brussels, Central Starbucks">
                            <label for="location">Location</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline my-3">
                            <textarea id="todo" class="md-textarea aqua-textarea disabled  form-control" rows="4" placeholder="•vfvfvf&#10;•fvfvf&#10;•vfvfvf&#10;•dvfvfsd"></textarea>
                            <label for="todo" class="">What to discuss?</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="md-form md-outline  my-2">
                            <textarea id="postMet" class="md-textarea aqua-textarea   form-control" disabled rows="3" placeholder="dvdsv sdvdsv sevdsvd sdvdsvd sdvsdvc"></textarea>
                            <label for="postMet" class="">Post-Meeting Report</label>
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
<!--Details a meeting Modal ends-->

<?php include 'org-footer.php'; ?>