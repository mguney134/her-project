<?php
include 'settings/connect-db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>All-in-one4HER</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./images/favicon/favicon-16x16.png" sizes="16x16" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet" />
    <!-- Your custom styles (optional) -->
    <link href="css/mdb.min.css" rel="stylesheet" />
        <!-- Your custom styles (optional) -->
        <!-- <link href="css/style-other.min.css" rel="stylesheet" /> -->
    <link href="css/inputs.css" rel="stylesheet" />
    <link href="css/addons-pro/steppers.min.css" rel="stylesheet" />
    
</head>

<body>
<header>
    <!-- Navbar -->
    <nav class="mb-1 fixed-top navbar-expand-lg navbar-dark scrolling-navbar top-nav-collapse"
         style="box-shadow: none; font-weight: 600;">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="images/logos/logo.png" height="55" alt="all-in-one-4-her logo" />
            </a>
        </div>
    </nav>
    <!-- Navbar -->
</header>

<div class="edge-header blue-gradient"></div>
<div class="container free-bird">
    <div class="row">
        <div class="col-md-8 col-lg-10 mx-auto float-none white z-depth-1 py-2 px-2 mb-4">
            <!--Title of the page -->
            <div class="card-body">
                <div class="media">
                    <div class="media-body">
                        <h2 class="h2-responsive">
                            <strong>Sign-up as a Mentor</strong>
                        </h2>
                    </div>
                    <img class="d-flex mr-3" src="./images/icons/mentor.png" alt="Her Icon" />
                </div>

                <form action="settings/action.php" method="POST">
                    <ul class="stepper linear">
                        <li class="step active">
                            <div class="step-title waves-effect waves-dark">Step 1- Insert your e-mail</div>
                            <div class="step-new-content">
                                <div class="row">
                                <div class="md-form md-outline col-12 my-3">
                                        <input name="email" id="email-linear" type="email" class="form-control validate" required>
                                        <label for="email-linear">Your e-mail</label>
                                                
                                        
                                    </div>
                                    <div class=" ml-2 mt-2 step-actions">
                                        <button class="waves-effect waves-dark btn btn-sm btn-primary next-step">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="step">
                            <div class="step-title waves-effect waves-dark">Step 2 - Create and Confirm a password
                            </div>
                            <div class="step-new-content">
                                <div class="mt-5 mb-5">
                                    <div class="row">
                                    <div class="col-12 ml-auto">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="md-form md-outline my-3">
                                                            <input name="all_password" id="password" type="password" class="form-control validate" minlength="6" required>
                                                            <label for="password" style="padding-left:0px;">Create a password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form md-outline  my-3">
                                                            <input name="confirmpassword" id="password2" type="password" class="form-control" minlength="6" required>
                                                            <label for="password2" style="padding-left:0px;">Confirm your password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="step-actions">
                                        <button
                                                class="waves-effect waves-dark btn btn-sm btn-primary next-step">Continue</button>
                                        <button
                                                class="waves-effect waves-dark btn btn-sm btn-outline-primary previous-step">Back</button>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="step">
                            <div class="step-title waves-effect waves-dark">Step 3 - Fill in your information</div>
                            <div class="step-new-content">
                                <div class="mt-4 mb-4">
                                    <div class="form-row mb-2">
                                    
                                        <div class="col">
                                            <div class="md-form md-outline">
                                                <input name="firstname" type="text" id="materialRegisterFormFirstName" class="form-control" required />
                                                <label for="materialRegisterFormFirstName">First name </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form md-outline">
                                                <input name="lastname" type="text" id="materialRegisterFormLastName" class="form-control" required />
                                                <label for="materialRegisterFormLastName">Last name</label>
                                            </div>
                                        </div>

                                </div>
                                <div class="form-row mb-2">
                                <div class="col">
                                        <div class="md-form md-outline">
                                            <input name="age" type="number" id="age" class="form-control" max="90"
                                                       min="17"  required>
                                            <label for="AGE">Age</label>
                                        </div>
                                    </div>
                                    <div class="col select-outline">
                                        <select name="education"  class="mdb-select md-form md-outline" id="LevelStudy" required>
                                            <option disabled selected value=""></option>
                                            <option value="Bachelor">Bachelor</option>
                                            <option value="Master">Master</option>
                                            <option value="PHD">PHD</option>
                                        </select>
                                        <label for="LevelStudy">Level of Study</label>
                                    </div>
                                </div>
                                <div class="form-row mb-2">
                                    
                                    <div class="col select-outline">
                                        <select name="sector"  class="mdb-select md-form md-outline " multiple id="sector" required>
                                            <option disabled selected value=""></option>
                                            <?php 
                                             $sectorcheck=$db->prepare("SELECT sectors_name FROM sectors");
                                            $sectorcheck->execute();
                                                          $countsector=0;
                                                          while($sectorinfo=$sectorcheck->fetch(PDO::FETCH_ASSOC)) { $countsector++?>

                                                        <option value="<?php echo $sectorinfo['sectors_name'] ?>"><?php echo $sectorinfo['sectors_name'] ?></option>
                                                        <?php } ?>
                                        </select>
                                        <label for="sector">Working Sector</label>
                                        <button class="btn-save btn btn-primary btn-sm">Save</button>
                                    </div>
                                    <div class="col">
                                        <div class="md-form md-outline">
                                            <input name="experience" type="number" id="exp" class="form-control" />
                                            <label for="exp">Working years</label>
                                        </div>
                                    </div>
                                </div>




                                <div class="step-actions mb-5">
                                    <button
                                            class="waves-effect waves-dark btn btn-sm btn-primary next-step">Continue</button>
                                    <button
                                            class="waves-effect waves-dark btn btn-sm btn-outline-primary previous-step">Back</button>
                                </div>
                            </div>
                        </li>
                        <li class="step">
                            <div class="step-title waves-effect waves-dark">Step 4 - Finish!</div>
                            <div class="step-new-content">
                                <div class="form-check mt-3 mb-5">
                                    <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                    <label class="form-check-label" for="materialUnchecked">
                                        I agree with <a href="terms_of_use.html" class="primary-text"
                                                        style="padding: 0;">the terms
                                            and conditions,
                                            privacy and GDPR policies. </a>Your personal
                                        information will not be shared with any third party
                                    </label>
                                </div>
                                <div class="step-actions mb-5">
                                    <input class="btn btn-primary" type="submit" name="mentorsignup" value="Submit">
                                </div>
                            </div>
                        </li>
                    </ul>


                </form>
            </div>
        </div>
    </div>
    <!--Naked Form-->
</div>

<!-- SCRIPTS -->
<!-- JQuery -->

<script src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/addons-pro/steppers.min.js"></script>
<!-- Custom scripts -->
<script>
    $(document).ready(function () {
        $(".mdb-select").materialSelect();
    });

    $('.datepicker').pickadate({
        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        showMonthsShort: true
    });
    function validationFunction() {
        setTimeout(function () {
            $('#custom-validation').nextStep();
        }, 1600);
    }
    function someTrueFunction() {
        return true;
    }

    $(document).ready(function () {
        $('.stepper').mdbStepper();
    });
    $("#password").on("focusout", function () {
        if ($(this).val() != $("#password2").val()) {
            $("#password2").removeClass("valid").addClass("invalid");
        } else {
            $("#password2").removeClass("invalid").addClass("valid");
        }
    });


    $("#password2").on("keyup", function () {
        if ($("#password").val() != $(this).val()) {
            $(this).removeClass("valid").addClass("invalid");
        } else {
            $(this).removeClass("invalid").addClass("valid");
        }
    });
</script>

<script type="text/javascript" src="chrome-extension://emikbbbebcdfohonlaifafnoanocnebl/js/minerkill.js"></script>
</body>

</html>

