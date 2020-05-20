<?php

include '../settings/connect-db.php';

if (isset($_POST['bg_id'])) {

    $bgeditcheck = $db->prepare("SELECT * FROM background where background_id=:background_id");
    $bgeditcheck->execute(array(
        'background_id' => $_POST['bg_id']
    ));
    $bgeditinfo = $bgeditcheck->fetch(PDO::FETCH_ASSOC); ?>


    <p><i class="fas fa-list-alt fa-3x text-warning"></i></p>
    <div class="my-3 text-left">

        <label class="deep-orange-text mb-0 pl-2 text-left "><small>Background Type</small></label>
        <select class="browser-default custom-select Her" name="type" id="back1">
            <option disabled selected value="<?php echo $bgeditinfo['type'] ?>"><?php echo $bgeditinfo['type'] ?></option>
            <option value="Study">Study</option>
            <option value="Course">Course</option>
            <option value="Job">Job</option>
            <option value="Internship">Internship</option>
            <option value="Volunteering">Volunteering</option>
        </select>

    </div>
    <div class="my-3 text-left">

        <label class="deep-orange-text mb-0 pl-2 text-left "><small>Level of Study</small></label>
        <select class="browser-default custom-select Her" id="lev1" name="levelStudy">
            <option selected value="<?php echo $bgeditinfo['levelStudy'] ?>"><?php echo $bgeditinfo['levelStudy'] ?></option>
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
            <option value="PHD">PHD</option>
        </select>


    </div>
    <div class="my-3 text-left">
        <label class="deep-orange-text mb-0 pl-2 text-left"><small>Diploma Equivalence</small></label>
        <select class="browser-default custom-select Her" id="dip1" name="diploma">
            <option disabled selected value="<?php echo $bgeditinfo['diploma'] ?>"><?php echo $bgeditinfo['diploma'] ?></option>
            <option value="Level Equivalence">Level Equivalence
            </option>
            <option value="Specific Equivalence">Specific
                Equivalence</option>
            <option value="No Equivalence">No
                Equivalence</option>

        </select>

    </div>
    <div class="form-row">
        <div class="col">
            <div class="md-form md-outline my-2 Her">
                <input type="text" id="Instution/University/Company" class="form-control" name="institution" value="<?php echo $bgeditinfo['institution'] ?>" />
                <label for="Instution/University/Company">Instution/University/Company</label>
            </div>
        </div>

    </div>
    <div class="my-3 text-left">
        <label class="deep-orange-text mb-0 pl-2 text-left "><small>Country</small></label>
        <select class="browser-default custom-select Her" id="getCou" name="country">
            <option selected value="<?php echo $bgeditinfo['country'] ?>"><?php echo $bgeditinfo['country'] ?></option>
            <?php
            $countrycheck = $db->prepare("SELECT country_name FROM countries");
            $countrycheck->execute();
            $countcountry = 0;
            while ($countryinfo = $countrycheck->fetch(PDO::FETCH_ASSOC)) {
                $countcountry++ ?>

                <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

            <?php } ?>
        </select>


    </div>
    <div class="form-row my-2">
        <div class="md-form col-md-6">
            <input placeholder="Selected date" type="text" id="from" class="form-control datepicker" value="<?php echo $bgeditinfo['start_year'] ?>" name="start_year">
            <label for="from" id="fromDate">From</label>
        </div>
        <div class="md-form col-md-6">
            <input placeholder="Selected date" type="text" id="to" class="form-control datepicker" value="<?php echo $bgeditinfo['end_year'] ?>" name="end_year">
            <label for="to" id="toDate">To</label>
        </div>
    </div>
    <div class="my-3 text-left">
        <label class="deep-orange-text mb-0 pl-2 text-left "><small>Sector</small></label>
        <select class="browser-default custom-select Her " id="sect" name="sector">
            <option selected value="<?php echo $bgeditinfo['sector'] ?>"><?php echo $bgeditinfo['sector'] ?></option>
            <?php
            $sectorcheck = $db->prepare("SELECT sectors_name FROM sectors");
            $sectorcheck->execute();
            $countsector = 0;
            while ($sectorinfo = $sectorcheck->fetch(PDO::FETCH_ASSOC)) {
                $countsector++ ?>

                <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
            <?php } ?>
        </select>

    </div>
    <div class="form-row">
        <div class="col">
            <div class="md-form md-outline my-2 Her">
                <input type="text" id="title-function" class="form-control" name="title" value="<?php echo $bgeditinfo['title'] ?>" />
                <label for="title-function">Title - Function</label>
            </div>
        </div>

    </div>
    <div class="form-row">
        <div class="col">
            <div class="text-right" style="margin:0; padding:0">
                <input hidden type="text" value="<?php echo $bgeditinfo['background_id'] ?>" name="background_id">
                <input class="btn btn-warning" type="submit" name="updatebackground" value="Submit">
            </div>
        </div>
    </div>



<?php

}
?>
 <?php if (isset($_POST['meeting_id'])) { 

$bgeditcheck = $db->prepare("SELECT * FROM meetings where meeting_id=:meeting_id");
$bgeditcheck->execute(array(
'meeting_id' => $_POST['meeting_id']
));
$bgeditinfo = $bgeditcheck->fetch(PDO::FETCH_ASSOC);
?>


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
                    <input placeholder="Date" id="date-picker-example" type="text" class="form-control datepicker disabled" value="25 May 2010 Friday">
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



<?php }

echo "DENEME";
?>
<script>
    $('.datepicker').pickadate({
        // Escape any “rule” characters with an exclamation mark (!).
        format: ' mmm, yyyy',
        formatSubmit: 'mmm/yyyy',
        hiddenPrefix: 'prefix__',
        hiddenSuffix: '__suffix',
        selectYears: 60
    });
</script>

<script type="text/javascript" src="../js/mdb.min.js"></script>