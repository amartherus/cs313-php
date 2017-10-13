<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html>
<form action="thankyou.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputuserName4" class="col-form-label">Username</label>
      <input type="userName" class="form-control" id="inputuserName4" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4" class="col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="col-form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" class="col-form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity" class="col-form-label">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Gilbert">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState" class="col-form-label">State</label>
      <input type="text" class="form-control" id="inputState" placeholder="AZ">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip" class="col-form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip" placeholder="85295">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>

<!-- bootstrap stuff -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</html>
