<?php
    // single line comment

    /*
    multi line comment
    */

    #Single Line Comment

    /*
    PHP syntax 
    every statement ends with a semi-colon
    */

    //echo ouputs to the page - we can inclde html tags
    // note: echo is not a function

    echo "<h1>\"Hello world\" </h1><br>";
    echo "\"Hello\" World<br>
this is Gyo";
    echo "Hello World\"ee\"<br>";
    // <!-- Most of PHP is case insensitive
    // variables *are* case sensitive 

    // variables ih PHP:
    // -names must start with  a $
    // - names can include numbers, letters, _(but cannot start with a number)
    // - data type of a variable can be changed

    // $week5 - valid
    // $_week5 - valid
    // $5thweek - notvalid

    // $today ="Tuesday";
    $kor = 80;
    $English = 100;
    $total = $kor + $English;
    echo "$total<br>";
    $avg = $total / 2;
    echo $avg;
    // quote, you must 'escape the characters with a back slash
    $today = "Tuesday";
    echo 'Today is ' . $today; // . is used to concatenate strings
    //join strings together
    $course = 'COMP4515';
    echo "<br> and the course is $course <br>";

    //Note: PHP treats single and double quotes, double quotes will interpolate (print out the value of) valiable

    /* 
    Data types in PHP
    integer 5
    float 5.0
    string "", ''
    boolean true, false

    
    */
    var_dump($course); // automatically echos
    echo "<br>";
    print_r($course); // automatically echos
    echo "<br>";

    echo gettype($course); //prints the data type
    echo "<br>";
    echo is_string($course); // returns true or false returns 1 = true otherewise returns nothing
    echo "<br>";
    echo is_bool(false);
    echo "<br>";

    /* 
    to create a constant, use define() with two args:
    the name of the constant, and the value
    
    */
    define('PI', 3.14159); //normally in all caps
    echo PI; // no dollar sign with const variable
    //php.net/manual

    //execution operator
    $output = `ls -l`;
