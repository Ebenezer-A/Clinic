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
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus value=<?php $_SESSION["first_name"] ?> >
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" value=<?php $_SESSION["last_name"] ?>>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" value=<?php $_SESSION["email"] ?>>
                      <div class="invalid-feedback">
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="phone_number">Phone Number</label>
                      <input id="phone_number" type="text" class="form-control" name="phone_number" value=<?php $_SESSION["phone_number"] ?>>
                    </div>
                </div>
                    <div class="form-group">
                      <label> Simptom Description</label>
                      <textarea class="form-control"></textarea>
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