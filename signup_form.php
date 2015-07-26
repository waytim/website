<!doctype html>
<html>
<head>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
<script src='https://code.jquery.com/jquery-1.11.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<title>Era PSOBB Server Signup</title>
</head>
<body>

<h2 class='text-center'>Era PSOBB Server Signup</h2>
<br>
<h3 class='text-center'>Please complete the form to create an account</h3><br>
<div class='container'>
<div class='row'>

<div class=''>
<form class="form-horizontal" method="POST" action="signup.php" >
  <div class="form-group">
    <label for="inputEmail3" class="col-xs-5 control-label">Account Name</label>
    <div class="col-xs-3">
      <input type="text" name='username' class="form-control" placeholder='Desired account name'>
    </div>
  </div>
  
  <div class="form-group">
    <label for="password1" class="col-xs-5 control-label">Password</label>
    <div class="col-xs-3">
      <input type="password" name='password1' class="form-control" placeholder="Password">
    </div>
  </div>

    <div class="form-group">
    <label for="password1" class="col-xs-5 control-label">Password (confirm)</label>
    <div class="col-xs-3">
      <input type="password" name='password2' class="form-control" placeholder="Password Confirm">
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-xs-5 control-label">Email</label>
    <div class="col-xs-3">
      <input type="text" name='aabf1' class="form-control" placeholder='Used for account recovery'>
    </div>
  </div>
  
    <div class="form-group">
    <label for="inputEmail3" class="col-xs-5 control-label">Email (confirm)</label>
    <div class="col-xs-3">
      <input type='text' name="aabf2" class="form-control" placeholder='Email Confirm'>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" name='submit' class="btn btn-default">Register!</button>
    </div>
  </div>
  
</form>
</div>

</div> <!-- ends row -->
</div> <!-- ends container -->

</body>
</html>
