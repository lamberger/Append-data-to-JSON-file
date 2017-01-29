<?php
    // Copy file content. Returns the file in a string
    $json_file_data = file_get_contents('data.json');
    
    //Takes a JSON encoded string and converts it into a PHP variable.
    $jObject = json_decode($json_file_data);
?>