<?php
session_start();
include 'header.php';
include 'side.php';


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
                            <form method="POST" action="#">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="frist_name">First Name: <?php $_SESSION["first_name"] ?> </label>
                      
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name: <?php $_SESSION["last_name"] ?></label>

                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email: <?php $_SESSION["email"] ?></label>
                      
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="phone_number">Phone Number: <?php $_SESSION["phone_number"] ?></label>
                      
                    </div>
                </div>
                    <div class="form-group">
                      <label> Simptom Description: <textarea class="form-control"></textarea></label>
                      
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
<?php
include "footer.php";
?>