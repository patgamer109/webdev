<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather api</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    
    <link href="style.css" rel="stylesheet">
    <?php
        require("getweather.php");
    ?>
</head>
<body>
    <div class="container">
        <h1>What's the Weather?</h1>            
        <form action="index.php">
            <div class="form-group">
                <label for="city">Enter the name of the city</label>
                <input class="form-control" value="<?php echo $city; ?>" name="city" id="city" required placeholder="Eg. London, Milan, Paris...">                
            </div>
            <div class="form-group">
                <button class="btn btn-primary">SUBMIT</button>
            </div>
        </form>
        <?php 
            if ($weather || $error) {
                if ($weather) {
                    echo "<div class='alert alert-success' role='alert'>" . $weather . "</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>" . $error . "</div>";
                }
            } 
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>