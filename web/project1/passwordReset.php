<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<form action="updatePassword.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="userName4" class="col-form-label">Username</label>
      <input type="userName" class="form-control" name="userName4" placeholder="Username">
    </div>
    <div class="form-group col-md-6">
      <label for="oldPassword4" class="col-form-label">Old Password</label>
      <input type="password" class="form-control" name="oldPassword4" placeholder="Old Password">
      <div class="form-group col-md-6">
        <label for="newPassword4" class="col-form-label">Old Password</label>
        <input type="password" class="form-control" name="newPassword4" placeholder="Old Password">
      </div>
    </div>
</html>
