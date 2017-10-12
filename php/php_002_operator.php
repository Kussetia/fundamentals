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
    /* The OR operator can cause unintentional problems in if statements,
       because the second operand will not be evaluated if the first is evaluated as TRUE.
    */

    if ($c > $a xor $c < $b); // exclusive or
    if ! ($c > $a); // not (negation)
    if not ($c > $a); // not (negation)

    // bitwise operator
    // 12 ^ 9

    // Ternary operator
    // ? x : y

    /* Operator precedence
       ()           parenthesis
       ++ --        increment / decrement
       !            logical
       * / %        arithmetic
       + - .        arithmetic and string
       << >>        bitwise
       < <= > >= <> comparison
       == != === !==comparison
       &            bitwise (and references)
       ^            bitwise
       |            bitwise
       &&           logical
       ||           logical
       ? :          ternary
       = += -= *= /= .= %= &= != ^= <<= >>=
                    assignment
       and          logical
       xor          logical
       or           logical
    */

    /* Associativity
     - some operators require processing from right to left,
       and this direction of processing is called the operator’s associativity 
     - Associativity becomes important in cases in which you do not explicitly force
       precedence, so you need to be aware of the default actions of operators.
    */
    $level = $score = $time = 0;

    /* Identity operator
     - prevents PHP from automatically converting types
     - As with forcing operator precedence, whenever you have any doubt about how PHP will
       convert operand types, you can use the identity operator to turn this behavior off
    */
    $a = "1000";
    $b = "+1000";
    
    if ($a == $b) echo "1"; // equality operator (==)
    if ($a === $b) echo "2"; // identity operator (===)
    if ($a != $b) echo "3"; // equality operator (!=)
    if ($a !== $b) echo "4"; // identity operator (!==)
?>