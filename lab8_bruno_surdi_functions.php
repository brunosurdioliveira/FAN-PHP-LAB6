<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: lab 8 - This lab will introduce you to including external files, functions and reinforce your HTML/CSS and PHP posting. 
-->

<?php 
    // Create a function called sanitizeArray()
    // $array as an argument
    function sanitizeArray($array) {
        // Loop over the choice array and foreach value
        foreach($array as $key => $val){

        // Sanitize your incoming data with htmlentities()
        $cleaned[$key] = htmlentities($val);

        // assign the existing key and value to a new clean array
        $cleanedArray[$key] = $cleaned[$key];
        }

        // return the array of sanitized values
        return array($cleanedArray);
    }
?>