<?php 

include 'mentor-header.php';

$mentorcheck=$db->prepare("SELECT * FROM mentor where user_id=:user_id");
$mentorcheck->execute(array(
'user_id' => $_SESSION['user_id']
));
$mentorinfo=$mentorcheck->fetch(PDO::FETCH_ASSOC);


?>
<div class="col-md-9 mb-4">
<!-- Nav tabs -->
<ul class="nav nav-tabs md-tabs nav-justified primary-color lighten-2" role="tablist">
<li class="nav-item">
<a class="nav-link"  href="mentor-info.php" >
<i class="fas fa-user pr-2"></i>Info</a>
</li>


</ul>
<!-- Nav tabs -->

<!-- Tab panels -->
<div class="tab-content">
<!-- Panel 111-Information Starts-->
<div class="tab-pane fade in show active" id="panel111" role="tabpanel">
<div class="container py-5 z-depth-1">
<!--Section: Content-->
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">
<h3 class="font-weight-bold">
You are editing your information
</h3>
<hr />
    <form action="../settings/action.php" method="POST" class="mx-5">
        <div class="form-row">
            <div class="col">
                <!-- First name -->
                <div class="md-form md-outline my-2">
                        <input type="text" id="firstName" class="form-control" value="<?php echo $mentorinfo['firstname'] ?>" name="firstname" />
                    <label for="firstName">First name</label>
                </div>
            </div>
            <div class="col">
                <!-- Last name -->
                <div class="md-form md-outline my-2">
                        <input type="text" id="lastName" class="form-control" value="<?php echo $mentorinfo['lastname'] ?>" name="lastname"/>
                    <label for="lastName">Last name</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col select-outline">
                <select class="mdb-select md-form md-outline my-2" id="gender" name="gender">
                    <option selected><?php echo $mentorinfo['gender'] ?></option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                    <option value="Rather not say">Rather not say</option>
                </select>
            <label for="gender">Gender</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <div class="md-form md-outline">
                    <input placeholder="Selected date" id="date-picker-example" type="text" class="form-control datepicker" name="birth" value="<?php echo $mentorinfo['birth'] ?>">
                    <label for="date-picker-example">Birth Date</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col select-outline">
                <select class="mdb-select md-form md-outline my-2" id="cont"
                    searchable="Search here.." name="country">
                    <option selected><?php echo $mentorinfo['country'] ?></option>
                    <?php 
                    $countrycheck=$db->prepare("SELECT country_name FROM countries");
                    $countrycheck->execute();
                    $countcountry=0;
                    while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { $countcountry++?>

                    <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                    <?php } ?>

                </select>
                <label for="cont">Country</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col select-outline">
                <select class="mdb-select md-form md-outline my-2" id="stat"
                    searchable="Search here.." name="legalStatus">
                    <option selected><?php echo $mentorinfo['legalStatus'] ?></option>
                    <option value="Citizen">Citizen </option>
                    <option value="recognized-refugee">Recognised refugee
                    </option>
                    <option value="subsidary-protection">Subsidiary protection
                    </option>
                    <option value="asylum-seeker">Asylum seeker</option>
                    <option value="other">Other</option>
                </select>
                <label for="stat">Legal Status</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col select-outline">
                <select class="mdb-select md-form md-outline my-2" id="levStu"
                    searchable="Search here.." name="evelofStudy">
                    <option selected><?php echo $mentorinfo['levelofStudy'] ?></option>
                    <option value="Bachelor">Bachelor</option>
                    <option value="Master">Master</option>
                    <option value="PHD">PHD</option>
                </select>
                <label for="levStu">Level of Study</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                
                <div class="md-form md-outline my-2">
                    <input type="text" id="currentJob" class="form-control" value="<?php echo $mentorinfo['job'] ?>" name="job"/>
                    <label for="currentJob">Current Job</label>
                </div>
            </div>
            <div class="col">
                
                <div class="md-form md-outline my-2">
                    <input type="number" id="workEx" class="form-control" value="<?php echo $mentorinfo['experience'] ?>" name="experience" />
                    <label for="workEx">Working Experience</label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col select-outline">
                <select class="mdb-select md-form md-outline my-2" id="worSec"
                    searchable="Search here.." name="sector">
                    <option selected><?php echo $mentorinfo['sector'] ?></option>
                    <?php 
                    $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                    $sectorcheck->execute();
                    
                    while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { ?>

                    <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>

                    <?php } ?>
                </select>
                <label for="worSec">Sector</label>
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                
                <div class="md-form md-outline my-2">
                    <input type="text" id="phone" class="form-control" value="<?php echo $mentorinfo['tel'] ?>" name="tel"/>    
                    <label for="phone">Phone Number</label>
                </div>
            </div>
            
        </div>
        <div class="form-row">
            <div class="md-form">
                <input type="text" name="user_id" id="materialRegisterFormLastName" class="form-control" value="<?php echo $_SESSION['user_id'] ?>" hidden="" />
            </div>
        </div>
        <div class="text-right">
            <input class="btn btn-primary" type="submit" name="mentorupdate" value="Update">
        </div>
    </form>

<!--Your info Edit mode-->
<?php
  include 'mentor-footer.php';
?>