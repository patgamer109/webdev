<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail sender</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
        if ($_POST) {
            // error_reporting(E_ALL);
            // ini_set("display_errors", 1);
            $headers = ["from" => "mymail@gmail.com"];
            $mailTo = $_POST["mailTo"];
            $mailSubject = $_POST["mailSubject"];
            $mailBody = $_POST["mailBody"];
            if ($mailTo == "") {
                echo "<p>specify email address for receiver</p>";
            } else if ($mailSubject == "") {
                echo "<p>specify subject</p>";
            } else if ($mailBody == "") {
                echo "<p>specify text for mail</p>";
            } else {
                // it always give error if it's used on localhost, cause we have not smtp server
                $resp = mail($mailTo, $mailSubject, $mailBody, $headers);
                if ($resp) {
                    echo "<p>mail sended<br> to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
                } else {
                    echo "<p>something wrong on email sending<br>resp: " . $resp . "<br>to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
                }
            }
        }
    ?>
    <p>Please enter data and click button to send mail</p>
    <form method="post">
        <div class="row">
            <label for="mailTo" class="col-1 col-form-label">To</label>
            <div class="col-3">
                <input type="email" class="form-control" id="mailTo" name="mailTo" placeholder="to@example.com">
            </div>
        </div>
        <div class="row">
            <label for="mailSubject" class="col-1 col-form-label">Subject</label>
            <div class="col-5">
                <input type="text" class="form-control" id="mailSubject" name="mailSubject" placeholder="subject of mail">
            </div>
        </div>
        <div class="row">
            <label for="mailBody" class="col-1 col-form-label">Message</label>
            <div class="col-5">
                <textarea class="form-control" id="mailBody" name="mailBody" placeholder="text of mail"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-1">
                <input type="submit" value="Send">
            </div>
        </div>        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>