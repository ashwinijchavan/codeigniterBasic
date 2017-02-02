<?php echo include('header.php'); ?>
<?php echo validation_errors('<div class="error">', '</div>'); ?>
<div class="container">
<form class="form-horizontal" action="<?php echo site_url('loginproject/admin_login') ?>">
  <fieldset>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Username" name="uname">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputEmail" placeholder="Password" name="pass">
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="reset" class="btn btn-default">Cancel
        <input type="submit" class="btn btn-primary">Submit
      </div>
    </div>
  </fieldset>
</form>
</div>
<?php echo include('footer.php'); ?>

