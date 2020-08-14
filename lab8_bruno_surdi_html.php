<!-- 
    Name: Bruno Surdi Oliveira
    Date: July 2020
    Purpose: lab 8 - This lab will introduce you to including external files, functions and reinforce your HTML/CSS and PHP posting. 
-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@600&display=swap" rel="stylesheet">

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

    </style>
  </head>
  <body>
    <h1 id="logo">Welcome to the bankGram</h1>
    <div class="container"><br><br><br>
        <div class="row">
            <div class="col"> <br><br>
                <h1 style="background: #e6e6e64f; padding-left: inherit;">Tell us about your Holdings</h1> <br>

                    <!-- Form that when submitted will post to the output -->
                    <!-- Use the same name for all 5 checkboxes with [] (choice[]) - this will send through the choices as an array of values -->
                    <form action="lab8_bruno_surdi_output.php" method="post" style="padding-left: 100px;">
                        <input type="checkbox" id="value1" name="choice[]" value="Bike">
                        <label for="value1"> I have a bike</label><br>

                        <input type="checkbox" id="value2" name="choice[]" value="Car">
                        <label for="value2"> I have a car</label><br>

                        <input type="checkbox" id="value3" name="choice[]" value="Boat">
                        <label for="value3"> I have a boat</label><br>

                        <input type="checkbox" id="value4" name="choice[]" value="Motorbike">
                        <label for="value4"> I have a motorbike</label><br>
                        
                        <input type="checkbox" id="value5" name="choice[]" value="Dog">
                        <label for="value5"> I have a dog</label><br><br>

                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
            <div class="col">
                <!-- Empty -->
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