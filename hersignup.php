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
        <link href="css/style.min.css" rel="stylesheet" />
        <link href="css/addons-pro/steppers.min.css" rel="stylesheet" />
        <style>
            .dropdown-content li>span {
                color: #52585f;
            }

            .select-wrapper {
                margin-top: 0;
                margin-bottom: 0;
            }

            .md-form {
                margin-top: 0;
                margin-bottom: 0;
            }

            .md-form input[type="text"]:focus:not([readonly]) {
                box-shadow: 0 1px 0 0 #febb33 !important;
                border-bottom: 1px solid #febb33 !important;
            }

            .md-form input[type="email"]:focus:not([readonly]) {
                box-shadow: 0 1px 0 0 #febb33 !important;
                border-bottom: 1px solid #febb33 !important;
            }

            .md-form input[type="password"]:focus:not([readonly]) {
                box-shadow: 0 1px 0 0 #febb33 !important;
                border-bottom: 1px solid #febb33 !important;
            }

            .md-form label {
                color: #485057;
                font-weight: 500;
            }

            .md-form input[type="text"]:focus:not([readonly])+label {
                color: #febb33 !important;
            }

            .md-form input[type="email"]:focus:not([readonly])+label {
                color: #febb33 !important;
            }

            .md-form input[type="password"]:focus:not([readonly])+label {
                color: #febb33 !important;
            }

            .select-wrapper>label.mdb-main-label {
                top: 0;
                font-weight: 500;
                color: #485057;
            }

            ul.stepper .step.active:before {
                background-color: #febb33;
            }


            .btn-secondary {
                border-color: #febb33;
            }
        </style>
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

    <div class="edge-header peach-gradient"></div>
    <div class="container free-bird">
        <div class="row">
            <div class="col-md-8 col-lg-10 mx-auto float-none white z-depth-1 py-2 px-2 mb-4">
                <!--Title of the page -->
                <div class="card-body">
                    <div class="media">
                        <div class="media-body">
                            <h2 class="h2-responsive">
                                <strong>Sign-up as a HER </strong>
                            </h2>
                        </div>
                        <img class="d-flex mr-3" src="./images/icons/HER.png" alt="Her Icon" />
                    </div>

                    <form action="settings/action.php" method="POST">
                        <ul class="stepper linear">
                            <li class="step active">
                                <div class="step-title waves-effect waves-dark">Step 1- Insert your e-mail</div>
                                <div class="step-new-content">
                                    <div class="row">
                                        <div class="md-form col-12 ml-auto mt-5 mb-4">
                                            <input name="email" id="email-linear" type="email" class="form-control validate" required>
                                            <label for="email-linear">Your e-mail</label>
                                        </div>
                                    </div>
                                    <div class="step-actions">
                                        <button class="waves-effect waves-dark btn btn-sm btn-warning next-step">Continue</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Step 2 - Create and Confirm a password</div>
                                <div class="step-new-content">
                                    <div class="mt-5 mb-5">
                                        <div class="row">
                                            <div class="md-form col-12 ml-auto">
                                                <div class="row mb-4 mt-4">
                                                    <div class="col">
                                                        <div class="md-form">
                                                            <input name="all_password" id="password" type="password" class="form-control validate" required>
                                                            <label for="password">Create a password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="md-form">
                                                            <input name="confirmpassword" id="password2" type="password" class="form-control" required>
                                                            <label for="password2">Confirm your password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="md-form col-12 ml-auto">

                                            </div>
                                        </div>
                                        <div class="step-actions">
                                            <button class="waves-effect waves-dark btn btn-sm btn-warning next-step">Continue</button>
                                            <button class="waves-effect waves-dark btn btn-sm btn-outline-warning previous-step">Back</button>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Step 3 - Fill in your information</div>
                                <div class="step-new-content">
                                    <div class="form-row mb-4 mt-5">
                                        <div class="col">
                                            <div class="md-form">
                                                <input name="firstname" type="text" id="materialRegisterFormFirstName" class="form-control" required />
                                                <label for="materialRegisterFormFirstName">First name </label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <!-- Last name -->
                                            <div class="md-form">
                                                <input name="lastname" type="text" id="materialRegisterFormLastName" class="form-control" required />
                                                <label for="materialRegisterFormLastName">Last name</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <select name="status"  class="mdb-select md-form  dropdown-warning" required>
                                                <option disabled selected value=""></option>
                                                <option value="fulltime">Working (Fulltime)</option>
                                                <option value="parttime">Working (Parttime)</option>
                                                <option value="unemployed">Unemployed</option>
                                                <option value="selfemployed">Selfemployed</option>
                                            </select>
                                            <label class="mdb-main-label">Status</label>
                                        </div>
                                        <div class="col">
                                            <div class="md-form">
                                                <input name="birth"  type="text" id="date-picker-example" class="form-control datepicker" required>
                                                <label for="date-picker-example">Birth Date</label>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <select name="gender" class="mdb-select md-form  dropdown-warning" required>
                                                <option disabled selected value=""></option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="Other">Other</option>
                                                <option value="Rather not say">Rather not say</option>
                                            </select>
                                            <label class="mdb-main-label">Gender</label>
                                        </div>
                                        <div class="col">
                                            <select name="legalStatus"  class="mdb-select md-form  dropdown-warning" required>
                                                <option disabled selected></option>
                                                <option value="Belgian Citizen">Belgian Citizen</option>
                                                <option value="EU Citizen">EU Citizen</option>
                                                <option value="recognized-refugee">Recognized refugee</option>
                                                <option value="subsidary-protection">Subsidiary protection</option>
                                                <option value="asylum-seeker">Asylum seeker</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <label class="mdb-main-label">Legal Status</label>
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <select name="country" class="mdb-select md-form  dropdown-warning" required>
                                                <option selected></option>
                                                <?php
                                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                                $countrycheck->execute();

                                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                    <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                                                <?php } ?>
                                            </select>
                                            <label class="mdb-main-label">Country of Origin</label>
                                        </div>
                                        <div class="col">
                                            <select name="degreeCountry" class="mdb-select md-form  dropdown-warning">
                                                <option selected></option>
                                                <?php
                                                $countrycheck=$db->prepare("SELECT country_name FROM countries");
                                                $countrycheck->execute();

                                                while($countryinfo=$countrycheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                    <option value="<?php echo $countryinfo['country_name'] ?>"><?php echo $countryinfo['country_name'] ?></option>

                                                <?php } ?>
                                            </select>
                                            <label class="mdb-main-label">Country of Origin Highest Degree</label>
                                        </div>

                                    </div>
                                    <div class="form-row mb-4">
                                        <div class="col">
                                            <select class="mdb-select md-form  dropdown-warning" name="town">
                                                <option selected></option>
                                                <?php
                                                $citycheck=$db->prepare("SELECT city FROM cities");
                                                $citycheck->execute();

                                                while($cityinfo=$citycheck->fetch(PDO::FETCH_ASSOC)) { ?>

                                                    <option value="<?php echo $cityinfo['city'] ?>"><?php echo $cityinfo['city'] ?></option>

                                                <?php } ?>
                                            </select>
                                            <label class="mdb-main-label">Resident City/Town</label>
                                        </div>
                                    </div>
                                    <div class="step-actions mb-5">
                                        <button class="waves-effect waves-dark btn btn-sm btn-warning next-step">Continue</button>
                                        <button class="waves-effect waves-dark btn btn-sm btn-outline-warning previous-step">Back</button>
                                    </div>
                                </div>
                            </li>
                            <li class="step">
                                <div class="step-title waves-effect waves-dark">Step 4 - Finish!</div>
                                <div class="step-new-content">
                                    <div class="form-check mt-3 mb-5">
                                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                        <label class="form-check-label" for="materialUnchecked">
                                            I agree with <a href="terms_of_use.html" class="deep-orange-text" style="padding: 0;">the terms
                                                and conditions,
                                                privacy and GDPR policies. </a>Your personal
                                            information will not be shared with any third party
                                        </label>
                                    </div>
                                    <div class="step-actions mb-5">
                                        <input class="btn btn-warning" type="submit" name="hersignup" value="Submit">
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
