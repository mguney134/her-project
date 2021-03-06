<?php include 'her-header.php'; ?>
<!-- Tabbed Nav starts -->
<div class="col-md-9 mb-4">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs nav-justified deep-orange lighten-2" role="tablist">
        <li class="nav-item">
            <a class="nav-link" href="her-info.php" role="tab">
                <i class="fas fa-user pr-2"></i>Info</a>
        </li>

        <li class="nav-item ">
            <a class="nav-link" href="her-background.php" role="tab">
                <i class="fas fa-file-alt pr-2"></i>Background</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="her-competences.php" role="tab">
                <i class="fas fa-cogs pr-2"></i>Competences</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="her-networking.php" role="tab">
                <i class="fas fa-project-diagram pr-2"></i>Networking</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="her-meeting.php" role="tab">
                <i class="fas fa-user-friends pr-2"></i>Meet</a>
        </li>
    </ul>
    <!-- Nav tabs -->
    <!-- Tab panels -->
    <div class="tab-content">
        <!-- Panel 333-Competences starts-->
        <div class="tab-pane fade in show active">
            <div class=" py-5 z-depth-1">
                <!--Section: Content-->
                <section class="px-md-3 mx-md-3 text-center text-lg-left dark-grey-text">


                    <div class="mb-4">
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Languages</p>
                            </div>
                            <div class="col-4 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Language &nbsp</p>
                            </div>
                            <div class="col-4 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Level &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Delete &nbsp</p>
                            </div>
                        </div>
                        <?php
                        $langcheck = $db->prepare("SELECT * FROM herlanguages where her_id=:her_id");
                        $langcheck->execute(array(
                            'her_id' => $herinfo['her_id']
                        ));

                        while ($langinfo = $langcheck->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="row my-2">
                                <div class="col-2">

                                </div>
                                <div class="col-4 pb-1">
                                    <p class="mb-0"><?php echo $langinfo['language_name'] ?> &nbsp</p>
                                </div>
                                <div class="col-4  pb-1">
                                    <p class="mb-0"><?php echo $langinfo['level'] ?> &nbsp</p>
                                </div>
                                <div class="col-2  pb-1">
                                    <div class="mb-0">
                                        
                                        <a class="m-0 btn-floating btn-sm btn-secondary" href="../settings/action.php?id=<?php echo $langinfo['id']; ?>&langdelete=ok"><i class="fas fa-trash-alt"></i></a> &nbsp
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <br>

                    <!--div>
                        
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Hard Skills</p>
                            </div>
                            <div class="col-10 ">
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>
                                 <span class="m-0 pb-1 ">dcvdvdsv &nbsp</span>

                            </div>
                        </div>
                                        
                       
                    </div-->

                    <br>
                    <br>
                    <div>
                        <!--title-->
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text mb-0">Soft Skills</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Communication skills &nbsp</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Interpersonal skills &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Teamwork skills &nbsp</p>
                            </div>
                            <div class="col-2">
                                <div class="mb-0">
                                    
                                    <a class="m-0 btn-floating btn-sm btn-secondary" href="../settings/action.php?softskillid=<?php echo $herinfo['her_id']; ?>&softskilldelete=ok"><i class="fas fa-trash-alt"></i></a> &nbsp
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT communication FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $communications = explode(",", $softskillinfo['communication']);

                                foreach ($communications as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>

                            </div>
                            <div class="col-3  ">

                                <?php
                                $softskillcheck = $db->prepare("SELECT interpersonal FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $interpersonal = explode(",", $softskillinfo['interpersonal']);

                                foreach ($interpersonal as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-2 ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT teamwork FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $teamwork = explode(",", $softskillinfo['teamwork']);

                                foreach ($teamwork as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>

                        </div>
                        <br>

                        <!--title-->

                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Adaptability and Learnability &nbsp</p>
                            </div>
                            <div class="col-3 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Analytical Skills &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Leadership Skills &nbsp</p>
                            </div>
                            <div class="col-2 border-bottom ">
                                <p class="m-0 pb-1 font-weight-bold">Organization Skills &nbsp</p>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-2">
                                <p class="text-right h5-responsive font-weight-bold deep-orange-text"></p>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT adaptability FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $adaptability = explode(",", $softskillinfo['adaptability']);

                                foreach ($adaptability as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-3  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT analytical FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $analytical = explode(",", $softskillinfo['analytical']);

                                foreach ($analytical as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-2  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT leadership FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $leadership = explode(",", $softskillinfo['leadership']);

                                foreach ($leadership as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>
                            <div class="col-2  ">
                                <?php
                                $softskillcheck = $db->prepare("SELECT organizational FROM soft_skills where her_id=:her_id");
                                $softskillcheck->execute(array(
                                    'her_id' => $herinfo['her_id']
                                ));
                                $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);

                                $organizational = explode(",", $softskillinfo['organizational']);

                                foreach ($organizational as $val) { ?>

                                    <span class="m-0 pb-1 "><i class="fas fa-circle fa-xs mr-1"></i><?php echo $val ?></span><br>

                                <?php  } ?>
                            </div>

                        </div>

                    </div>
                    <br> <br> <br> 
                    <div class="col-md-12 mb-4 mt-5 mb-5 mx-4">
                        <h3 class="font-weight-bold">Edit/ Add Language </h3>
                        <hr />
                        <form action="../settings/action.php" method="POST">
                            <div class="row mb-3">
                                <!-- Language-->
                                <div class="col-6 my-3 text-left">
                                    <label class="deep-orange-text mb-0 pl-2 text-left"><small>Language</small></label>
                                    <select class="browser-default custom-select Her" name="language_name" id="langName">
                                        <option disabled selected>Language</option>
                                        <?php
                                        $languagecheck = $db->prepare("SELECT language FROM languages");
                                        $languagecheck->execute();

                                        while ($languageinfo = $languagecheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                            <option value="<?php echo $languageinfo['language'] ?>"><?php echo $languageinfo['language'] ?></option>

                                        <?php } ?>
                                    </select>
                                    
                                </div>

                                <!-- Language Level-->
                                <div class="col-6 my-3 text-left">
                                    <label class="deep-orange-text mb-0 pl-2 text-left"><small>Level</small></label>
                                    <select class="browser-default custom-select Her" id="lanLevell" name="level">
                                        <option disabled selected>Level</option>
                                        <option value="Native">Native</option>
                                     
                                        <option value="A1">A1 / Basic user - Beginner</option>
                                        <option value="A2">A2 / Basic user - Elementary</option>
                                        <option value="B1">B1 / Independent User - Intermediate</option>
                                        <option value="B2">B2 / Independent User - Upper intermediate</option>
                                        <option value="C1">C1 / Proficient User - Advanced</option>
                                        <option value="C2">C2 / Proficient User - Master</option>
                                    </select>
                                   
                                </div>
                            </div>

                            <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">

                            <div class="text-right" style="margin:0; padding:0">
                                <input class="btn btn-warning" type="submit" name="languageadd" value="Add">
                            </div>

                        </form>
                    </div>
                    <?php
                    $softskillcheck = $db->prepare("SELECT her_id FROM soft_skills where her_id=:her_id");
                    $softskillcheck->execute(array(
                        'her_id' => $herinfo['her_id']
                    ));
                    $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                    if (empty($softskillinfo['her_id'])) {
                    ?>
                        <div class="col-md-12 mb-4 mt-5 mx-4">
                            <h3 class="font-weight-bold">Add Soft Skills</h3>
                            <hr />
                            <form action="../settings/action.php" method="POST">
                                <div class="row mb-3">

                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="cs" name="communication[]">
                                            <option disabled selected></option>
                                            <option value="Verbal Communication">Verbal Communication</option>
                                            <option value="Presentation">Presentation</option>
                                            <option value="Negotiation">Negotiation</option>
                                            <option value="Nonverbal Communication">Nonverbal Communication</option>
                                            <option value="Persuasion">Persuasion</option>
                                            <option value="Writing Skills">Writing Skills</option>
                                            <option value="Public Speaking">Public Speaking</option>
                                            <option value="Reading Body Language">Reading body language</option>
                                            <option value="Storytelling">Storytelling</option>
                                            <option value="Visual Communication">Visual communication</option>
                                            <option value="Writing Reports and Proposals">Writing reports and proposals</option>
                                        </select>
                                        <label for="cs">Communication skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="is" name="interpersonal[]">
                                            <option disabled selected></option>
                                            <option value="Relating & Inspiring">Relating & Inspiring</option>
                                            <option value="Presentation">Conflict handling</option>
                                            <option value="Negotiation">Negotiation</option>
                                        </select>
                                        <label for="is">Interpersonal skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ts" name="teamwork[]">
                                            <option disabled selected></option>
                                            <option value="Group Dynamics">Group Dynamics</option>
                                            <option value="Group Decision Making">Group Decision Making</option>
                                            <option value="Collaboration">Collaboration</option>
                                            <option value="Dealing With Difficult Situations">Dealing With Difficult Situations</option>
                                            <option value="Dealing With Office Politics">Dealing With Office Politics</option>
                                            <option value="Disability Awareness">Disability Awareness</option>
                                            <option value="Diversity Awareness">Diversity Awareness</option>
                                            <option value="Emotional Intelligence">Emotional Intelligence</option>
                                            <option value="Establishing Interpersonal Relationships">Establishing Interpersonal Relationships</option>
                                            <option value="Empathy">Empathy</option>
                                            <option value="Dealing With Difficult Personalities">Dealing With Difficult Personalities</option>
                                            <option value="Intercultural Competence">Intercultural Competence</option>
                                            <option value="Influence">Influence</option>
                                            <option value="Networking">Networking</option>
                                            <option value="Persuasion">Persuasion</option>
                                            <option value="Self-Awareness">Self-Awareness</option>
                                            <option value="Selling Skills">Selling Skills</option>
                                            <option value="Social Skills">Social Skills</option>
                                            <option value="Team Building">Team Building</option>
                                            <option value="Teamwork">Teamwork</option>
                                        </select>
                                        <label for="ts">Teamwork skills</label>
                                    </div>

                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="aall" name="adaptability[]">
                                            <option disabled selected></option>
                                            <option value="Adjusting To Change">Adjusting To Change</option>
                                            <option value="Managing Tasks">Managing Tasks</option>
                                            <option value="Setting Priorities">Setting Priorities</option>
                                            <option value="Learning Fast">Learning Fast</option>
                                            <option value="Adaptability">Adaptability</option>
                                            <option value="Artistic Aptitude">Artistic Aptitude</option>
                                            <option value="Creativity">Creativity</option>
                                            <option value="Critical Observation">Critical Observation</option>
                                            <option value="Critical Thinking">Critical Thinking</option>
                                            <option value="Desire To Learn">Desire To Learn</option>
                                            <option value="Flexibility">Flexibility</option>
                                            <option value="Innovation">Innovation</option>
                                            <option value="Logical Thinking">Logical Thinking</option>
                                            <option value="Problem Solving">Problem Solving</option>
                                            <option value="Research">Research</option>
                                            <option value="Resourcefulness">Resourcefulness</option>
                                            <option value="Thinking Outside The Box">Thinking Outside The Box</option>
                                            <option value="Tolerance Of Change And Uncertainty">Tolerance Of Change And Uncertainty</option>
                                            <option value="Troubleshooting">Troubleshooting</option>
                                            <option value="Value Education">Value Education</option>
                                        </select>
                                        <label for="aall">Adaptability and Learnability</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ans" name="analytical[]">
                                            <option disabled selected></option>
                                            <option value="Assessing">Assessing</option>
                                            <option value="Gathering Information">Gathering Information</option>
                                            <option value="Decision Making">Decision Making</option>
                                        </select>
                                        <label for="ans">Analytical Skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="les" name="leadership[]">
                                            <option disabled selected></option>>
                                            <option value="Taking Charge">Taking Charge</option>
                                            <option value="Coaching">Coaching</option>
                                            <option value="Delegating">Delegating</option>
                                            <option value="Conflict Resolution">Conflict Resolution</option>
                                            <option value="Decision Making">Decision Making</option>
                                            <option value="Dispute Resolution">Dispute Resolution</option>
                                            <option value="Facilitation">Facilitation</option>
                                            <option value="Giving Clear Feedback">Giving Clear Feedback</option>
                                            <option value="Inspiring People">Inspiring People</option>
                                            <option value="Managing Difficult Conversations">Managing Difficult Conversations</option>
                                            <option value="Managing Remote/Virtual Teams">Managing Remote/Virtual Teams</option>
                                            <option value="Meeting Management">Meeting Management</option>
                                            <option value="Mentoring">Mentoring</option>
                                            <option value="Motivating">Motivating</option>
                                            <option value="Project Management">Project Management</option>
                                            <option value="Resolving Issues">Resolving Issues</option>
                                            <option value="Successful Coaching">Successful Coaching</option>
                                            <option value="Supervising">Supervising</option>
                                            <option value="Talent Management">Talent Management</option>
                                        </select>
                                        <label for="les">Leadership Skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ors" name="organizational[]">
                                            <option disabled selected></option>
                                            <option value="Designing">Designing</option>
                                            <option value="Planning">Planning</option>
                                            <option value="Implementing">Implementing</option>
                                        </select>
                                        <label for="ors">Organizational Skills</label>
                                    </div>


                                </div>

                                <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">

                                <div class="text-right" style="margin:0; padding:0">
                                    <input class="btn btn-warning" type="submit" name="softskillsadd" value="Add">
                                </div>

                            </form>
                        </div>
                    <?php  } else { ?>

                        <div class="col-md-12 mb-4 mt-5 mx-4">
                            <h3 class="font-weight-bold">Update Soft Skills</h3>
                            <hr />
                            <form action="../settings/action.php" method="POST">
                                <div class="row mb-3">

                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="cs" name="communication[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT communication FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $communications = explode(",", $softskillsinfo['communication']);

                                            $softskillcheck = $db->prepare("SELECT communication FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $communication = explode(",", $softskillinfo['communication']);

                                            foreach ($communications as $val) { ?>

                                                <option <?php if (in_array($val, $communication)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="cs">Communication skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="is" name="interpersonal[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT interpersonal FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $interpersonals = explode(",", $softskillsinfo['interpersonal']);

                                            $softskillcheck = $db->prepare("SELECT interpersonal FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $interpersonal = explode(",", $softskillinfo['interpersonal']);

                                            foreach ($interpersonals as $val) { ?>

                                                <option <?php if (in_array($val, $interpersonal)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="is">Interpersonal skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ts" name="teamwork[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT teamwork FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $teamworks = explode(",", $softskillsinfo['teamwork']);

                                            $softskillcheck = $db->prepare("SELECT teamwork FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $teamwork = explode(",", $softskillinfo['teamwork']);

                                            foreach ($teamworks as $val) { ?>

                                                <option <?php if (in_array($val, $teamwork)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="ts">Teamwork skills</label>
                                    </div>

                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="aall" name="adaptability[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT adaptability FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $teamworks = explode(",", $softskillsinfo['adaptability']);

                                            $softskillcheck = $db->prepare("SELECT adaptability FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $teamwork = explode(",", $softskillinfo['adaptability']);

                                            foreach ($teamworks as $val) { ?>

                                                <option <?php if (in_array($val, $teamwork)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="aall">Adaptability and Learnability</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ans" name="analytical[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT analytical FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $teamworks = explode(",", $softskillsinfo['analytical']);

                                            $softskillcheck = $db->prepare("SELECT analytical FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $teamwork = explode(",", $softskillinfo['analytical']);

                                            foreach ($teamworks as $val) { ?>

                                                <option <?php if (in_array($val, $teamwork)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="ans">Analytical Skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="les" name="leadership[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT leadership FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $teamworks = explode(",", $softskillsinfo['leadership']);

                                            $softskillcheck = $db->prepare("SELECT leadership FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $teamwork = explode(",", $softskillinfo['leadership']);

                                            foreach ($teamworks as $val) { ?>

                                                <option <?php if (in_array($val, $teamwork)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="les">Leadership Skills</label>
                                    </div>
                                    <div class="col-3 select-outline">
                                        <select class="mdb-select md-form md-outline Her my-2" multiple id="ors" name="organizational[]">
                                            <option disabled selected></option>
                                            <?php
                                            $softskillscheck = $db->prepare("SELECT organizational FROM all_soft_skills");
                                            $softskillscheck->execute();
                                            $softskillsinfo = $softskillscheck->fetch(PDO::FETCH_ASSOC);
                                            $teamworks = explode(",", $softskillsinfo['organizational']);

                                            $softskillcheck = $db->prepare("SELECT organizational FROM soft_skills where her_id=:her_id");
                                            $softskillcheck->execute(array(
                                                'her_id' => $herinfo['her_id']
                                            ));
                                            $softskillinfo = $softskillcheck->fetch(PDO::FETCH_ASSOC);
                                            $teamwork = explode(",", $softskillinfo['organizational']);

                                            foreach ($teamworks as $val) { ?>

                                                <option <?php if (in_array($val, $teamwork)) {
                                                            echo "selected";
                                                        } ?> value="<?php echo $val ?>"><?php echo $val ?></option>

                                            <?php  } ?>
                                        </select>
                                        <label for="ors">Organizational Skills</label>
                                    </div>


                                </div>

                                <input type="text" name="her_id" hidden="" value="<?php echo $herinfo['her_id'] ?>">

                                <div class="text-right" style="margin:0; padding:0">
                                    <input class="btn btn-warning" type="submit" name="softskillsupdate" value="Update">
                                </div>

                            </form>
                        </div>

                    <?php  } ?>
                </section>
            </div>
        </div>
        <!-- Panel 333-Competences Ends-->
    </div>
</div>
<?php include 'her-footer.php'; ?>