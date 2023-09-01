<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script>
        $(() => {       
            $("form").submit(function (e) {
                e.preventDefault();
                let error = "";
                if ($("#mailTo").val() == "") {
                    error+="mail to is required<br>";
                }
                if ($("#mailSub").val() == "") {
                    error+="subject is required<br>";
                }
                if ($("#mailTxt").val() == "") {
                    error+="message is required<br>";
                }
                if (error != "") {
                    $("#error").html('<div class="alert alert-danger"><strong>There were errors in your form:</strong><p>' + error + '</p></div>');
                    // return false;
                } else {
                    // this method cause double click effect on button submit, don't use
                    // this but use return false or return true on php 
                    $("form").unbind("submit").submit();
                    // return true;
                }
                
            })
        })
    </script>
</head>
<body>
    <?php    
        print_r($_POST);
        // we need to use validation on client (javasciprit) and validation on server (php)
        // two type of validation are needed cause the script can be loaded bypassing client
        // direct using the service
        $error = "";
        if ($_POST) {
            
            if (!$_POST["mailTo"]) {
                $error.="mail to is required<br>";
            } else {
                if (filter_var($_POST["mailTo"], FILTER_VALIDATE_EMAIL) === false) {
                    $error.=$_POST["mailTo"] . "is not a valid email address<br>";
                }
            }            
            if (!$_POST["mailSub"]) {
                $error.="subject is required<br>";
            }
            if (!$_POST["mailTxt"]) {
                $error.="message is required<br>";
            }
            if ($error != "") {
                $error = '<div class="alert alert-danger"><strong>There were errors in your form:</strong><p>' . $error . '</p></div>';
            } else {
                $emailTo = $_POST["mailTo"];
                $mailSub = $_POST["mailSub"];
                $mailTxt = $_POST["mailTxt"];
                $headers = "From: mymail@mydomain.it";
                //$resp = mail($mailTo, $mailSub, $mailTxt, $headers);
                // $resp = "";
                $resp = "smtp server not found";
                if (!$resp) {
                    $error = '<div class="alert alert-success"><strong>Mail sended:</strong><p>all right!</p></div>';
                } else {
                    $error = '<div class="alert alert-danger"><strong>Something wrong on sending email:</strong><p>' . $resp . '</p></div>';
                }
            }
        }
    ?>
    <div class="container">
        <h1>Get in touch!</h1>
        <div id="error"><?php echo $error;?></div>
        <form method="post">
            <div class="mb-3">
                <label for="mailTo" class="form-label">mail to</label>
                <input type="email" class="form-control" id="mailTo" name="mailTo" placeholder="enter your email address">
                <small class="text-muted">we'll never share your email with anyone else</small>
            </div>
            <div class="mb-3">
                <label for="mailSub" class="form-label">subject</label>
                <input type="text" class="form-control" id="mailSub" name="mailSub" placeholder="enter the subject">
            </div>
            <div class="mb-3">
                <label for="mailTxt" class="form-label">message</label>
                <textarea class="form-control" rows="3" id="mailTxt" name="mailTxt" placeholder="enter the email text message"></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</body>
</html>