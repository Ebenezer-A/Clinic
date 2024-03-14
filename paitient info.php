<?php
include 'header.php';
include 'side.php';
$firstName = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_first_name'] : $_SESSION['first_name'];
$lastName = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_last_name'] : $_SESSION['last_name'];
$email = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_email'] : $_SESSION['email'];
$scheduled_for = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_scheduled_for'] : $_SESSION['scheduled_for'];
$emergency = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_emergency'] : $_SESSION['emergency'];
$description = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_description'] : $_SESSION['description'];
$phoneNumber = $_SESSION['role'] == 'doctor' ? $_SESSION['paitent_phone_number'] : $_SESSION['phone_number'];
?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                <div class="card">
                  <div class="padding-20">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                          aria-selected="true">About</a>
                      </li>
                    </ul>
                    <div class="tab-content tab-bordered" id="myTab3Content">
                      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Full Name</strong>
                            <br>
                            <p class="text-muted"><?php echo $firstName, " ", $lastName; ?>
                            </p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Mobile</strong>
                            <br>
                            <p class="text-muted"><?php echo $phoneNumber; ?>
                            </p>
                          </div>
                          <div class="col-md-3 col-6 b-r">
                            <strong>Email</strong>
                            <br>
                            <p class="text-muted"><?php echo $email; ?>
                            </p>
                          </div>
                          <div class="col-md-3 col-6">
                            <strong>Emergency</strong>
                            <br>
                            <p class="text-muted"><?php echo $emergency; ?>
                            </p>
                          </div>
                          </div>
                          <div class="row">
                          <div class="col-md-3 col-6 b-r">
                            <strong>Scheduled For</strong>
                            <br>
                            <p class="text">
                              <?php echo $scheduled_for; ?>
                              </p>
                            </div>
                          </div>
                        <strong>Simptom Description</strong>
                        <p class="m-t-30"><?php echo $description; ?>
                        </p>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<?php
include "footer.php";
?>