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
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;
    
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';

        if ($_POST) {
            // error_reporting(E_ALL);
            // ini_set("display_errors", 1);
            // $headers = ["from" => "mymail@gmail.com"];
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
                // $resp = mail($mailTo, $mailSubject, $mailBody, $headers);
                // if ($resp) {
                //     echo "<p>mail sended<br> to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
                // } else {
                //     echo "<p>something wrong on email sending<br>resp: " . $resp . "<br>to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
                // }
                $mail = new PHPMailer(true);
                try {
                    //Server settings
                    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'SMTP.gmail.com';                       //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'pcasadei653@gmail.com';                //SMTP username
                    $mail->Password   = 'phantom479!GO';                        //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                
                    //Recipients
                    $mail->setFrom('pcasadei653@gmail.com', 'Mailer');
                    // $mail->addAddress('joe@example.net', 'Joe User');    //Add a recipient
                    $mail->addAddress($mailTo);             //Name is optional
                    // $mail->addReplyTo('info@example.com', 'Information');
                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');
                
                    //Attachments
                    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = $mailSubject;
                    $mail->Body    = $mailBody;
                    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                
                    $mail->send();
                    echo "<p>mail sended<br> to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
                } catch (Exception $e) {
                    echo "<p>something wrong on email sending<br>Mailer error: " . $mail->ErrorInfo . "<br>to: " . $mailTo . "<br>subject is: " . $mailSubject . "<br>text is: " . $mailBody . "</p>";
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