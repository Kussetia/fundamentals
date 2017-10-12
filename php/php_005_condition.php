<?php
    $a = 5;
    $b = 3;

    // if statement
    if ($a > $b) {
        echo $a . ' is greater than ' . $b;
    }

    // else statement
    if ($a > $b) {
        echo $a . ' is greater than ' . $b;
    } else {
        echo $a . ' is lower than ' . $b;
    }

    // else if statement
    if ($a > $b) {
        echo $a . ' is greater than ' . $b;
    } elseif {
        echo $a . ' is lower than ' . $b;
    } else {
        echo $a . ' is equal to ' . $b;
    }

    // switch statement
    $page = "Home";

    switch ($page) {
        case "Home" : echo "You selected Home" ; break;
        case "About": echo "You selected About"; break;
        case "News" : echo "You selected News" ; break;
        case "Login": echo "You selected Login"; break;
        case "Links": echo "You selected Links"; break;
        default: echo "Unrecognized selection" ; break;
    }

    // Alternate switch statement syntax
    switch ($page):
        case "Home" : echo "You selected Home" ; break;
        case "About": echo "You selected About"; break;
        case "News" : echo "You selected News" ; break;
        case "Login": echo "You selected Login"; break;
        case "Links": echo "You selected Links"; break;
        default: echo "Unrecognized selection" ; break;
    endswitch;

    // ternary operator on conditional
    $fuel = 1;
    $enough = false;
    echo $fuel < 1 ? "Fill tank now" : "There's enough fuel";

    // Assigning conditional result to a variable
    $enough = $fuel < 1 ? false : true;
?>