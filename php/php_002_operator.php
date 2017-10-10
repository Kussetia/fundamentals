<?php
    $a = 1;
    $b = 2;
    $s1 = "string 1";
    $s2 = "string 2";

    // arithmetic operator
    $c = $a + $b; // addition
    $c = $a - $b; // subtraction
    $c = $a * $b; // multiplication
    $c = $a / $b; // division
    $c = $a % $b; // division remainder / modulus
    $c = ++$a; // increment $a first then just assign
    $c = $a++; // assign first then just increment $a
    $c = --$b; // decrement

    // assignment operators
    $c  = $a;
    $c  += 5; // $c = $c + 5
    $c  -= 3; // $c = $c - 3
    $c  *= 2; // $c = $c * 2
    $c  /= 4; // $c = $c / 4
    $c  %= 6; // $c = $c % 6
    $s1 .= $s2; // $s1= $s1 . $s2 (concatenation)

    // comparison operators
    if ($a == $b) echo "equal";
    if ($a != $b) echo "not equal";
    if ($a  > $b) echo "greater than";
    if ($a  < $b) echo "less than";
    if ($a >= $b) echo "greater than or equal";
    if ($a <= $b) echo "less than or equal";

    // logical operators
    if ($c > $a  && $c < $b); // and
    if ($c > $a and $c < $b); // and (low precedence)
    if ($c > $a  || $c < $b); // or
    if ($c > $a  or $c < $b); // or (low precedence)
    if ($c > $a xor $c < $b); // exclusive or
    if ! ($c > $a); // not (negation)
?>