# FAN-PHP-LAB6
Lab6 of PHP Fundamentals

Purpose
This lab will introduce you to including external files, functions and reinforce your HTML/CSS and PHP posting.

Evaluation
3% of your final grade ( 18 marks )

Submission Due date
When complete, submit the 3 PHP files to the Submission box labelled Lab 8 before July 12

Required Tools
Google Chrome web browser
Text editor with Syntax highlighting. https://atom.io/ or https://www.sublimetext.com/ or Visual Studio Code or other
Xampp 7.4.1
Bootstrap Starter Template - found here https://getbootstrap.com/docs/4.4/getting-started/introduction/
for layout control use the Grid System - https://getbootstrap.com/docs/4.4/layout/grid/
Instructions
You will be doing all your code in HTML/CSS and PHP, testing in the web browser. Don't forget, the code needs to be run through the Web server

Create 3 files. One will be the HTML submission form. One will be your function library included file, and lastly a PHP processing and output file.
title the 3 files with your full name in the file name i.e: lab8_ryan_price_html.php, lab8_ryan_price_functions.php and lab8_ryan_price_output.php
In the lab8_fname_lname_html.php file ( I recommend starting from blank )
Copy and paste the Bootstrap Starter Template ( 1 mark )
In the Body tags
Create an HTML form you can submit that will post to your output.php file ( 2 marks )
In the form add 1 question with 5 checkboxes ( 1 marks )
for the name field of ALL 5 checkboxes use the same name with [].  ie. choice[]
This will send through the choices as an array of values
In lab8_fname_lname_functions.php - This will contain all your custom functions you create, keep it tidy and commented we will be using it in all future labs
Create a function titled sanitizeArray() 
accept an array as an argument ( we will send it the choice array from inside the POST array $_POST['choice'] ) ( 1 mark )
Loop over the choice array and foreach value ( 2 marks )
Sanitize your incoming data with htmlentities() and assign the existing key and value to a new clean array ( 3 marks )
return the array of sanitized values (1 mark)
In lab8_fname_lname_output.php - prepare output for user
use the include statement format defined on Week9 - slide 6 to include your functions file (2 marks) ( read the error and adjust )
var_dump the incoming post array variables ( 1 mark )
use the sanitizeArray() function to set a local clean array (1 mark)
Using a loop display to the user what selections they made ( see screenshot ) (2 marks)
Use function_exists() to tell the user using an IF statement if the function mysqli_connect exists ( 3 marks )