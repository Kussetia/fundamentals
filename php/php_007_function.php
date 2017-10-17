<?php
    $first_name = "Henry";
    $last_name = "Gates";

    // pseudofunction / construct - can be called without parentheses
    print "Print is a pseudofunction";
    echo "Echo is a pseudofunction";

    // php built-in functions
    echo strrev (".olleH"); // reverse string - Hello
    echo str_repeat ("Hip ", 2) // repeat string - Hip Hip
    echo strtoupper ("hooray!"); // string to uppercase - HOORAY!

    // create a function to return a single value
    function full_name ($first_name, $last_name) {
        $first_name = ucfirst (strtolower ($first_name));
        $last_name = ucfirst (strtolower ($last_name));
        return $first_name . " " .$last_name;
    }

    // create function to return an array value
    function names ($first_name, $last_name) {
        return array ($first_name, $last_name);
    }

    // Do not pass arguments by reference
    function names (&first_name, &last_name) {
        return array ($first_name, $last_name);
    }

    // Returning global variables
    function full_name ($first_name, $last_name) {
        $first_name = ucfirst (strtolower ($first_name));
        $last_name = ucfirst (strtolower ($last_name));
        global $name = $first_name . " " .$last_name;
        return $name;
    }

    // include file
    include "library.php";

    // include once - avoid include requested file again
    include_once "library.php";

    // require file - will not continue program execution if file is not found
    require "library.php";

    // require once
    require_once "library.php";

    // PHP function compatibility to check function existance
    if function_exists ("array_combine") {
        // statement to execute if function exists
    }
?>