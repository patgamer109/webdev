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
      <div class="alert alert-info"><?= $_SESSION['success'] ?></div>
<?php
        $_SESSION['success'] = "";
    }
?>
<form action="savediary.php" method="POST" id="diaryForm">
    <div class="form-group">
    <textarea cols="80" rows="10" name="diary" id="diary"><?= getUserDiary()?></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">SAVE</button>
    </div>
</form>
</main>

<?php
    require('footer.php');    
?>