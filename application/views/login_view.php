<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Simple Login with CodeIgniter</title>
  </head>
  <body>
    <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
      <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="passowrd" name="password"/>
      <br/>
      <input type="submit" value="Login"/>
    </form>
  </body>
</html>
 -->
 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
  <div class="row">
    <?php if (validation_errors()) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= validation_errors() ?>
        </div>
      </div>
    <?php endif; ?>
    <?php if (isset($error)) : ?>
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="col-md-12">
      <div class="page-header">
        <h1>Login</h1>
      </div>
      <?= form_open() ?>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-default" value="Login">
        </div>
      </form>
    </div>
  </div><!-- .row -->
</div><!-- .container -->