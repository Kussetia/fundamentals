<?php
    /* Local variable
       Because $temp was neither created within the longdate function
       nor  passed to it as a parameter, longdate cannot access it.

       The reason for this is that, by default, variables created within a function are local to
       that function, and variables created outside of any functions can be accessed only by
       nonfunction code.
    */
    $temp = "The date is ";
    
    // This code snippet output only the date, not the preceding text.
    echo longdate (time());

    // This code snippet solve the issue of $temp variable scope
    echo $temp . longdate (time());

    // This code snippet solve the issue of $temp variable scope
    echo longdate1 ($temp, time());

    function longdate ($timestamp) {
        return $temp . date ("l F jS Y", $timestamp);
    }

    function longdate1 ($temp, $timestamp) {
        return $temp . date ("l F jS Y", $timestamp);
    }

    /* Global variable
     - you should use global variables with caution
     - create them only when you absolutely cannot find another way of achieving the result you desire
     - in general, programs that are broken into small parts and segregated data are less buggy and easier to maintain 
    */
    global $GLOBAL_VARIABLE;    

    function test () {
        /* Static variable
         - local variable inside a function that would keep its value for the next time the function is called
         - it does not start with a fresh copy of the variable each time the function is called
         - you cannot assign the result of an expression in static variable definition
         - static variable can be initialized only with predetermined values
        */
        static $count = 0;
        echo $count++;
    }

    /* Super global variables
     - predefined variables that are available since PHP 4.1.0
     - they are provided by the PHP environment but are global within the program, accessible absolutely everywhere
     - they are structured as associative arrays

     $GLOBALS   All variables that are currently defined in the global scope of the script.
     $_SERVER   Information such as headers, paths, and script locations
     $_GET      Variables passed to the current script via the HTTP Get method
     $_POST     Variables passed to the current script via the HTTP Post method
     $_FILES    Items uploaded to the current script via the HTTP Post method
     $_COOKIE   Variables passed to the current script via HTTP cookies
     $_SESSION  Session variables available to the current script
     $_REQUEST  Contents of information passed from the browser; by default, $_GET , $_POST , and $_COOKIE
     $_ENV      Variables passed to the current script via the environment method
    */
    $came_from = $_SERVER['HTTP_REFERER'];

    /* Superglobals and security
     - superglobal variable are often used by hackers trying to find exploits to break into your website
       by load up $_POST , $_GET , or other superglobals with malicious code, such as Unix or MySQL commands 
       that can damage or display sensitive data if you naïvely access them
     - you should always sanitize superglobals before using them.
     - one way to sanitize it is via the PHP htmlentities function that will converts all characters into HTML entities
       so that they are rendered harmless.
     - Using the htmlentities function for sanitization is an important practice in any circumstance where user 
       or other third-party data is being processed for output, not just with superglobals.
    */
    $came_from = htmlentities($_SERVER['HTTP_REFERER']);
?>