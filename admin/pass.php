<?php
include('header.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <br />
  <h2 class="page-header">Change Account Password</h2>

  <div class="col-md-6">
    <form method="POST" action="changepass.php">

      <div class="form-group">
        <h5><strong>New Password</strong></h5>
        <input type="password" id="pass" name="pass" minlength="4" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group">
        <h5><strong>Confirm New Password</strong></h5>
        <input type="password" id="cfpass" name="cfpass" minlength="4" class="form-control" placeholder="Confirm New Password" required>
      </div>
      <br />

      <button class="btn btn-lg btn-primary btn-block" type="submit" id="changepass" name="changepass">Change Password</button>

    </form>
  </div>

</div>
</div>
</div>

<?php
include('footer.php');
?>