<?php
    session_start();
    require('functions.php');
    if (!isUserLoggedIn()) {
        header("Location: login.php");
        die;
    }
    require('connection.php');
    require('header.php'); 
?>

<main class="px-3">
<h1>My Secret Diary</h1>
<?php
    if (!empty($_SESSION['success'])) {
?>
<div class="alert alert-info"><?= $_SESSION['success']?></div>
<?php
        $_SESSION['success'] = "";
    }
?>
<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
<p class="lead">
<a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white">Learn more</a>
</p>
</main>

<?php
    require('footer.php');    
?>