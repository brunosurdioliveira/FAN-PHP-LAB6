<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: lab 8 - This lab will introduce you to including external files, functions and reinforce your HTML/CSS and PHP posting. 
-->

<!-- the pre tag is used to preformat the text - it will display exactly as written in the HTML code -->
<pre>
  <!-- A quick way to view the content of POST is to use PHP function var_dumb() -->
<?php
    // define('roottest', dirname(__DIR__) . '/' );
    // echo roottest; // /opt/lampp/htdocs/labs/ -- Access the parent of week9 folder

    // Include_once statement to include the function (__DIR__ = dirname(__FILE__))
    define('__ROOT__', (__DIR__ . '/')); // Returns: /opt/lampp/htdocs/labs/week9/
    include_once(__ROOT__ . 'lab8_bruno_surdi_functions.php'); 
    // .../opt/lampp/htdocs/labs/week9/lab8_bruno_surdi_functions.php

    // var_dump the incoming post array variables
    // var_dump($_POST); 

    // SanitizeArray() function to set a local clean array 
    $cleanedArray = sanitizeArray($_POST['choice']);
?>
</pre>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>BankGram</title>

    <style>
    body{
        background-image: url("resources/backgroundnew.png");
    }

    #logo{
        text-align: center;
        font-family: 'Teko', sans-serif;        
        margin: 50px;
        color: black;
        text-shadow: -2px -2px #c15e6ba6;
        letter-spacing: 3px;
        font-size: xxx-large;
    }

    label{
        color: #e4eaef;
    }

    .alert-danger {
        background-color: #f8d7dad9
    }

    </style>

  </head>
  <body>
    <h1 id="logo">BankGram</h1>
    <h1 style="background: #e6e6e64f; text-align: center;">Thank you for your report!</h1><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Disabled just for design -->
            <h2 style="color: #d9e2ed; background: #e6e6e64f; padding-left: inherit;">Tell us about your Holdings</h1> <br>
                <form style="padding-left: 100px;">
                    <input type="checkbox" id="value1" name="choice[]" value="Bike" disabled>
                    <label for="value1"> I have a bike</label><br>
                    <input type="checkbox" id="value2" name="choice[]" value="Car" disabled>
                    <label for="value2"> I have a car</label><br>
                    <input type="checkbox" id="value3" name="choice[]" value="Boat" disabled>
                    <label for="value3"> I have a boat</label><br>
                    <input type="checkbox" id="value4" name="choice[]" value="Motorbike" disabled> 
                    <label for="value4"> I have a motorbike</label><br>
                    <input type="checkbox" id="value5" name="choice[]" value="Dog" disabled>
                    <label for="value5"> I have a dog</label><br><br>

                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary" disabled>Submit</button>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="alert alert-danger" role="alert" style="text-align:center;">
                    <h4 class="alert-heading">The User owns:</h4>
                    <?php 
                    // Loop to display to the user what selections they made
                        foreach($cleanedArray[0] as $element) {
                        echo "$element <br>"; 
                    }
                    ?>
                    <hr>
                    <?php
                        // Use function_exists() to tell the user using an IF statement if the function mysqli_connect exists
                        if (function_exists('mysqli_connect')) {
                            echo "MySQL functions are available";
                        } else {
                            echo "MySQL functions are not available.<br/>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>