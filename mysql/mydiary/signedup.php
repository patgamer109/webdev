<?php
    session_start();
    require('connection.php');
    require('header.php'); 
?>

<main class="px-3">
<h1>SIGN UP</h1>
<?php
  if (!empty($_SESSION['errors'])) {
?>
  <div class="alert alert-danger"><?= $_SESSION['errors']?></div>
<?php
  $_SESSION['errors'] = "";
  }
?>
<div class="row">
<div class="col-3"></div>
<div class="col-6">
<form method="post" action="signup.php">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember" value="1">
    <label class="form-check-label" for="remember">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-3"></div>
</div>
<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<p class="lead">
<a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
</p>
</main>

<?php
    require('footer.php');    
?>