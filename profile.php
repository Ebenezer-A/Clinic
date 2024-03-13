<?php
include 'header.php';
include 'side.php';

$error = $_GET['error']
?>

<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Paitient Information</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="profile-form.php">
                <div class="row">
                  <div class="form-group col-6">
                    <label for="frist_name">First Name</label>
                    <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus
                      value="<?php echo $_SESSION["first_name"]; ?>">
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                    <input id="last_name" type="text" class="form-control" name="last_name"
                      value="<?php echo $_SESSION["last_name"]; ?>">
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email"
                      value="<?php echo $_SESSION["email"]; ?>">
                    </div>
                    <div class="form-group col-6">
                      <label for="phone_number">Phone Number</label>
                      <input id="phone_number" type="text" class="form-control" name="phone_number"
                        value="<?php echo $_SESSION["phone_number"]; ?>">
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label class="d-block">Status: </lable>
                          <div class="pretty p-default p-curve">
                            <input type="radio" name="emergency_status" value="FALSE" />
                            <div class="state p-primary-o">
                              <label>Normal</label>
                            </div>
                          </div>
                          <div class="pretty p-default p-curve">
                            <input type="radio" name="emergency_status" value="TRUE" />
                            <div class="state p-danger-o">
                              <label>Emergency</label>
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-6">
                        <label>Date Time Picker</label>
                        <input type="datetime-local" class="form-control datetimepicker <?php echo $error ? 'is-invalid' : ''; ?>"
                          name="scheduled_for" value="<?php echo date('Y-m-d\TH:i'); ?>">
                        <div class="invalid-feedback">
                          <?php echo $error; ?>
                        </div>
                        </div>
                </div>
                <div class="form-group">
                  <label> Simptom Description</label>
                  <textarea class="form-control" name="simptom_description"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
    <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/forms-advanced-forms.js"></script>
<?php
include "footer.php";
?>