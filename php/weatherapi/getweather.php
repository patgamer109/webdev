<?php
    $city = "";
    $weather = "";
    $error = "";
    $var = "";
    if (!empty($_GET["city"])) {
        $city = str_replace(" ", "", trim($_GET["city"]));
        $url = "https://weather-forecast.com/locations/" . $city . "/forecasts/latest";
        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
        ); 
        // to obscure warning use @ before file_get_contents
        $content = @file_get_contents($url, false, stream_context_create($arrContextOptions));        
        if ($content) {
            // echo $content;
            $ini = strpos($content,"3 days)");
            $end = strpos($content, "</span>", $ini);
            $weather = strip_tags(substr($content, $ini + 7, $end - $ini));
            // this instruction stop the page and print the string/variable
            // die($weather);
        } else {
            $error = "no data found";
        }
    }
    
?>