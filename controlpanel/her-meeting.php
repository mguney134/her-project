<?php   
    include 'her-header.php'; 
?>   
<!-- Tabbed Nav starts -->
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="her-info.php" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  href="her-background.php" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link"  href="her-competences.php" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link"  href="her-networking.php" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active"  href="her-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->
    
    <!-- Panel Meeting Starts-->
    <div class="tab-content">
        
        <div class="tab-pane fade in show active" >
            <div class="py-5 z-depth-1">
            <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
                <div class="d-flex flex-row  justify-content-between">
                    <h3 class="font-weight-bold text-left">Meetings with Your Mentor / Coach</h3>
                    <button type="button" class="btn btn-sm btn-outline-warning btn-rounded waves-effect" data-toggle="modal" data-target="#newMeeting">New Meeting</button>
                </div>

                <!--Create a meeting starts-->
                <div class="modal fade" id="newMeeting" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title deep-orange-text" id="exampleModalLabel">Create a meeting</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form md-outline Her my-3 mt-1">
                                            <input name="agenda" id="agenda" type="text" class="form-control">
                                            <label for="agenda">Meeting's Agenda</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="md-form md-outline Her my-3">
                                            <input id="with" type="text" class="form-control">
                                            <label for="with">With Whom?</label>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="row">
                                        <div class="col">
                                        <div class="md-form md-outline Her my-3 px-1">
                                            <input placeholder="Select a date" id="date-picker-example" type="text" class="form-control datepicker" name="birth" >
                                            <label for="date-picker-example">When?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form md-outline Her my-3">
                                            <input id="time" type="text" class="form-control">
                                            <label for="time">What time?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form md-outline Her my-3">
                                            <input id="location" type="text" class="form-control">
                                            <label for="location">Where?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="md-form md-outline Her my-3">
                                            <textarea id="todo" class="md-textarea active-aqua-textarea  form-control" rows="4" placeholder="•&#10;•&#10;•&#10;•"></textarea>
                                            <label for="todo" class="">What to discuss?</label>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-outline-warning" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-sm btn-warning">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Create a meeting Modal ends-->
                
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
                                        <i class="far fa-comment-dots deep-orange-text pr-2"></i><span class="font-weight-bold">Agenda:</span><br> Cv Review
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-2">
                                        <div class="row">
                                            <p class="text-muted mb-1">
                                            <i class="fas fa-calendar-day deep-orange-text pr-2"></i> 
                                            25 May 2010 Friday
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="text-muted">
                                            <i class="far fa-clock deep-orange-text pr-2"></i> 
                                            18.30
                                            </p>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-2">
                                        
                                        <p class="text-muted">
                                        <i class="fas fa-user-friends deep-orange-text pr-2"></i> 
                                            <span class="font-weight-bold">With:</span><br> Joe Doe
                                        </p>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-2">
                                        
                                        <p class="text-muted">
                                        <i class="fas fa-map-marker-alt deep-orange-text pr-2"></i> 
                                        Brussels, Central Starbucks
                                        </p>
                                    </div>
                                
                                </div>
                        
                                
                            </div>
                            
                            <div class="col-md-2 ">
                                
                                <div class="row d-flex justify-content-end mt-1 mb-1">
                                    <a data-toggle="modal" data-target="#editMeeting"><i class="fas fa-pen mr-1"></i></a>
                                    <a data-toggle="modal" data-target="#deleteMeeting"><i class="fas fa-times mr-1"></i></a>
                                </div>
                                <!--edit meeting details starts-->
                                <div class="modal fade" id="editMeeting" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title deep-orange-text" id="exampleModalLabel">Edit the Meeting's Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3 mt-1">
                                                            <input name="agenda" id="agenda" type="text" class="form-control " value="Cv review">
                                                            <label for="agenda">Meeting's Agenda</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="with2" type="text" class="form-control">
                                                            <label for="with2">With</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                        <div class="col">
                                                        <div class="md-form md-outline Her my-3 px-1">
                                                            <input placeholder="Date"  id="date-picker-example" type="text" class="form-control datepicker " value="25 May 2010 Friday" >
                                                            <label for="date-picker-example">Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="time" type="text" class="form-control " value="18.30">
                                                            <label for="time">Time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="location" type="text" class="form-control " value="Brussels, Central Starbucks">
                                                            <label for="location">Location</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <textarea id="todo" class="md-textarea aqua-textarea   form-control" rows="4" placeholder="•vfvfvf&#10;•fvfvf&#10;•vfvfvf&#10;•dvfvfsd"></textarea>
                                                            <label for="todo" class="">What to discuss?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-2">
                                                            <textarea id="postMet" class="md-textarea aqua-textarea   form-control" rows="3" ></textarea>
                                                            <label for="postMet" class="">Post-Meeting Report</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-warning" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-sm btn-warning">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--edit meeting details ends-->


                                <!--confirm delete meeting details starts-->
                                <div class="modal fade" id="deleteMeeting" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title deep-orange-text" id="exampleModalLabel">Delete meeting</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this meeting?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-sm btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--confirm delete meeting details ends-->

                                <div class="text-center pt-2">
                                    <button type="button" class="btn btn-sm btn-warning waves-effect" data-toggle="modal" data-target="#meetingDetails">Details</button>
                                </div>


                                <!--details a meeting starts-->
                                <div class="modal fade" id="meetingDetails" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title deep-orange-text" id="exampleModalLabel">The Meeting's Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3 mt-1">
                                                            <input name="agenda" id="agenda" type="text" class="form-control disabled" value="Cv review">
                                                            <label for="agenda">Meeting's Agenda</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="with3" type="text" class="form-control disabled" value="Joe Doe">
                                                            <label for="with3">With</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                        <div class="col">
                                                        <div class="md-form md-outline Her my-3 px-1">
                                                            <input placeholder="Date"  id="date-picker-example" type="text" class="form-control datepicker disabled" value="25 May 2010 Friday" >
                                                            <label for="date-picker-example">Date</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="time" type="text" class="form-control disabled" value="18.30">
                                                            <label for="time">Time</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <input id="location" type="text" class="form-control disabled" value="Brussels, Central Starbucks">
                                                            <label for="location">Location</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-3">
                                                            <textarea id="todo" class="md-textarea aqua-textarea disabled  form-control" rows="4" placeholder="•vfvfvf&#10;•fvfvf&#10;•vfvfvf&#10;•dvfvfsd"></textarea>
                                                            <label for="todo" class="">What to discuss?</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline Her my-2">
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
                                <!--details a meeting Modal ends-->

                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>
                <!--Meeting Card Ends-->

            </section>


            </div>
                        
        </div>
               
    </div>
    <!-- Panel Meeting ends-->

</div>

<?php
    
    include 'her-footer.php';

?>