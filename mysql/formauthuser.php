<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form auth user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <style>
        #errMess {
            display: none;
        }
        #sucMess {
            display: none;
        }
    </style>
</head>
<body>
    <?php 
        $errorMessage = ""; 
        $messFromPhp = "";
        $email = "";
        $password = "";
        if ($_POST) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            if ($email == "" || $password == "") {
                $messFromPhp = "email or password are omitted";
            } else {
                // connection to db
                $link = mysqli_connect("localhost", "root", "", "myuserstest");
                if(mysqli_connect_error()) {            
                    die("connection failed");
                }
                // retreive user and password
                $query = "SELECT * FROM users WHERE email = '" . mysqli_real_escape_string($email) . "' AND password = '" . $password . "' LIMIT 1";
                $result = mysqli_query($link, $query);
                if ($result) {            
                    $row = mysqli_fetch_array($result);
                    if ($row) {
                        $messFromPhp = "Hello '" . $row['name'] . "' you are welcome !";
                    } else {
                        $messFromPhp = "user not found";    
                    }                    
                } else {
                    $messFromPhp = "error on query";
                }
            }            
        }        
    ?>
    <div class="container">
        <p>Please enter user and password and click on login to send</p>
        <form method="post" id="formLogin" name="formLogin">
            <div class="row">
                <label for="email" class="col-1 col-form-label">Email</label>
                <div class="col-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="myaccount@example.com" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row">
                <label for="password" class="col-1 col-form-label">Password</label>
                <div class="col-5">
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-1">
                <input type="button" id="buttonSubmit" name="buttonSubmit" value="Login">
                </div>
            </div>        
        </form>
        <div id="errMess"></div>
        <div id="sucMess"></div>
        <div id="sucPhp"><?php echo $messFromPhp;?></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        $("#buttonSubmit").on("click", (evt) => {
            let email = $("#email").val();
            let password = $("#password").val();
            let errMess = $("#errMess");
            let sucMess = $("#sucMess");            
            let formLogin = $('#formLogin');
            let fieldMissing = "";
            let errorMessage = "";
            if (email == "") {
                fieldMissing += "<p>empty email</p>";
            }
            if (password == "") {
                fieldMissing += "<p>empty password</p>";
            }
            if (fieldMissing != "") {
                errorMessage += "<p>emtpy fields: </p>" + fieldMissing;
            } else {
                if (isEmail(email) == false) {
                   errorMessage += "<p>is not a valid email</p>";
                }
            }            
            // alert("errorMessage: " + errorMessage);
            if (errorMessage != "") {
                errMess.html(errorMessage);
                errMess.show();
                sucMess.hide();
            } else {
                sucMess.html("<p>fields are correct</p>");
                sucMess.show();
                errMess.hide();
                formLogin.submit();
            }
        });
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    </script>
</body>
</html>