<?php
session_start();
$errors = null;

if (array_key_exists('errors', $_SESSION) && count($_SESSION['errors']) > 0) {
    $errors = $_SESSION['errors'] ?? array();
    $_SESSION['errors'] = [];
}

?>


<!doctype html>
<html lang="en">
<?php
include_once('../views/elements/head.php')
?>

<body>
    <section>
        <?php
        include_once('../views/elements/header.php')
        ?>
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form class="row g-3" method="post" action='validation.php'>
                        <div class="row mt-3 pt-3">
                            <div class="col-md-5">

                                <h2 class='mb-5'>Child's Details</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <?php
                                        if (isset($errors['child_first_name'])) {

                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_first_name'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>


                                        <?php
                                        }
                                        ?>
                                        <label for="child-first-name" class="form-label">First name</label>

                                        <input type="text" class="form-control" id="child-first-name" name="child_first_name">
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        if (isset($errors['child_middle_name'])) {


                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_middle_name'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <label for="child-middle-name" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" id="child-middle-name" name="child_middle_name">
                                    </div>

                                    <div class="col-md-6">
                                        <?php
                                        if (isset($errors['child_last_name'])) {

                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_last_name'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>


                                        <?php
                                        }
                                        ?>
                                        <label for="child-last-name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="child-last-name" name="child_last_name">
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        if (isset($errors['child_suffix'])) {


                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_suffix'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <label for="child-suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="child-suffix" name="child_suffix">
                                    </div>
                                    <div class="col-12">
                                        <label for="time-of-birth" class="form-label">Time of birth(24 hr)</label>
                                        <input type="text" class="form-control timepicker" id="timepicker-one" name="timepicker_one">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sex" class="form-label">Sex</label>
                                        <select id="sex" class="form-select" name="sex">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="child-date-of-birth" class="form-label">Date of Birth(Mo/Day/Year)</label>
                                        <input type="date" class="form-control" id="child-date-of-birth" name="child_date_of_birth">
                                    </div>
                                    <div class="col-12">
                                        <?php
                                        if (isset($errors['child_facility_name'])) {


                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_facility_name'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        <label for="child-facility-name" class="form-label">Facility Name(If not institution, give street and number)</label>
                                        <input type="text" class="form-control" id="child-facility-name" name="child_facility_name">
                                    </div>
                                    <div class="col-12">
                                        <?php
                                        if (isset($errors['child_city'])) {
                                            # code...

                                        ?>
                                            <div class="alert-warning">
                                                <ul>
                                                    <?php
                                                    foreach ($errors['child_city'] as $error) {
                                                        echo "<li>" . $error . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                        <label for="child-city-town-location" class="form-label">City, Town or Location of Birth</label>
                                        <input type="text" class="form-control" id="child-city-town-location" name="child_city">
                                    </div>
                                    <div class="col-12">
                                        <label for="child-country-of-birth" class="form-label">Country of Birth</label>
                                        <input type="text" class="form-control" id="child-country-of-birth" name="child_country_of_birth">
                                    </div>

                                    <h2 class='pt-4'>Father's Details</h2>
                                    <p>Father's Current Legal Name</p>
                                    <div class="col-md-6">
                                        <label for="father-first-name" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="father-first-name" name="father_first_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="father-middle-name" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" id="father-middle-name" name="father_middle_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="father-last-name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="father-last-name" name="father_last_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="father-suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="father-suffix" name="father_suffix">
                                    </div>
                                    <div class="col-12">
                                        <label for="father-time-of-birth" class="form-label">Time of birth(24 hr)</label>
                                        <input type="text" class="form-control timepicker" id="timepicker-two" name="timepicker_two">
                                    </div>
                                    <h2 class='pt-4'>Certifier Details'</h2>
                                    <div class="col-12">
                                        <label for="certifier-name" class="form-label">Certifier Name</label>
                                        <input type="text" class="form-control" id="certifier-name" name="certifier_name">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Title</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="md" value="md">
                                            <label class="form-check-label" for="md">MD</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="do" value="do">
                                            <label class="form-check-label" for="do">DO</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="hospital-admin" value="hospital admin">
                                            <label class="form-check-label" for="hospital-admin">HOSPITAL ADMIN</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="cnm" value="cnm">
                                            <label class="form-check-label" for="cnm">CNM/CM</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="other-midwife" value="other midwife">
                                            <label class="form-check-label" for="other-midwife">OTHER MIDWIFE</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="other" value="other">
                                            <label class="form-check-label" for="other">OTHER (Specify)</label>
                                        </div>
                                        <input type="text" class="form-control" name="other">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date-certified" class="form-label">Date Certified(Mo/Day/r)</label>
                                        <input type="date" class="form-control" id="date-certified" name="date_certified">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="date-field-by-register" class="form-label">Date Field by Register(Mo/Day/r)</label>
                                        <input type="date" class="form-control" id="date-field-by-register" name="date_field_by_register">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="telephone" class="form-label">Telephone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="ur" class="form-label">UR#</label>
                                        <input type="text" class="form-control" id="ur" name="ur">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="reffering-hospital" class="form-label">Reffering Hospital</label>
                                        <input type="text" class="form-control" id="reffering-hospital" name="reffering_hospital">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-5">
                                <h2>Mother's Details</h2>
                                <p>Mother's current legal name</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="mother-first-name" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="mother-first-name" name="mother_first_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mother-middle-name" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" id="mother-middle-name" name="mother_middle_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mother-last-name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="mother-last-name" name="mother_last_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mother-suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="mother-suffix" name="mother_suffix">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-date-of-birth" class="form-label">Date of Birth(Mo/Day/Year)</label>
                                        <input type="date" class="form-control" id="mother-date-of-birth" name="mother_date_of_birth">
                                    </div>
                                    <br>
                                    <p><strong>mother's Name Prior to First Marriage:</strong></p>
                                    <div class="col-md-6">
                                        <label for="marriage-first-name" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="marriage-first-name" name="marriage_first_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="marriage-middle-name" class="form-label">Middle name</label>
                                        <input type="text" class="form-control" id="marriage-middle-name" name="marriage_middle_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="marriage-last-name" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="marriage-last-name" name="marriage_last_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="marriage-suffix" class="form-label">Suffix</label>
                                        <input type="text" class="form-control" id="marriage-suffix" name="marriage_suffix">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-birthplace" class="form-label">Birthplace(state, Territory or Foreign Country)</label>
                                        <input type="text" class="form-control" id="mother-birthplace" name="mother_birthplace">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="residence-of-mother-state" class="form-label">Residence of Mother State</label>
                                        <input type="text" class="form-control" id="residence-of-mother-state" name="residence_of_mother_state">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-country" class="form-label">Country</label>
                                        <input type="text" class="form-control" id="mother-country" name="mother_country">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-city-town-or-location" class="form-label">City, Town or Location</label>
                                        <input type="text" class="form-control" id="mother-city-town-or-location" name="mother_city_town_or_location">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-street-and-number" class="form-label">Street and number</label>
                                        <input type="text" class="form-control" id="mother-street-and-number" name="mother_street_and_number">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="mother-apartment-no" class="form-label">Apartment No</label>
                                        <input type="text" class="form-control" id="mother-apartment-no" name="mother_apartment_no">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="mother-zip-code" class="form-label">Zip Code</label>
                                        <input type="number" class="form-control" id="mother-zip-code" name="mother_zip_code">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Inside City Limit?</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="toggle" id="yes" value="yes">
                                            <label class="form-check-label" for="yes">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="toggle" id="no" value="no">
                                            <label class="form-check-label" for="no">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>








        </div>
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <!-- time picker -->
    <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/wickedpicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.timepicker').wickedpicker({
                twentyFour: false,
                upArrow: 'wickedpicker__controls__control-up',
                downArrow: 'wickedpicker__controls__control-down',
                close: 'wickedpicker__close',
                hoverState: 'hover-state',
                title: 'Timepicker',
                showSeconds: false,
                secondsInterval: 1,
                minutesInterval: 1,
                beforeShow: null,
                show: null,
                clearable: false
            });
        });
    </script>
</body>

</html>