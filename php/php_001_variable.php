<?php
    // php commands ended with a semicolon
    // character $ used in front of all variables
    // PHP is a very loosely typed language, variables do not have to be declared before they are used, and that PHP always converts variables to the type required by their context when they are accessed.

    // Three different type of variable assignment
    $number = 1; // this is a number
    $string = "Hello"; // this is a string
    $bool = true; // this is boolean
    $bool = false; // this is boolean
    $words = array ("one","two","three"); // this is an array

    $integer = 1; // integer
    $float = 0.5; // floating point

    echo words[1]; //display the array value
    // multidimensional array
    $matrix = array (array ("A1","A2","A3")
                     array ("B1","B2","B3")
                     array ("C1","C2","C3"));
    echo $matrix[0][1]; // display A2, array index start from 0

    /* Variable naming rules:
     - start with a letter of alphabet or underscore
     - can contain only alphabet, numeric, or underscore
     - may not contain spaces
     - names are case-sensitive
    */

    // assign a literal string, preserving the exact contents
    $msg = 'this is a literal string';
    
    // let php attemps to evaluate variable value within a string (variable substitution)
    $msg = "$count people have viewed your profile";

    // escaping characters - only work on double-quoted string
    // only escaped apostrophe \' and escaped backslash \\ are recognised in single-quoted string
    $text = "It\'s interesting";
    $text = "Date \t Time"; // insert a tab
    $text = "Date \n Time"; // insert a newline
    $text = "Date \r Time"; // insert a carriage return

    /* multiple line commands - here-document / heredoc construct
     - no need to add linefeed character \n to add new line just press Return and start a new line
     - the closing _END; tag must appear right at the start of a new line
     - the closing _END; tag must be the only thing on that line, not even a comment is allowed to be added after it
     - once you have closed a multiline block, you are free to use the same tag name again
     - you are free to use all the single and double quotes you like within a heredoc without escaping them with a slash (\)
     - the _END tag is user-defined name and replaceable with any name
    */

    $citation = <<<_END
    Debugging is twice as hard as writing the code in the first place.
    Therefore, if you write the code as cleverly as possible, you are,
    by definition, not smart enough to debug it.

    - $author.
_END;

    // implicit casting
    $a = 56;
    $b = 12;
    $c = $a / $b; // PHP will automatically converts the result to floating point

    /* explicit casting
       (int) (integer)
       (bool) (boolean)
       (float) (double) (real)
       (string)
       (array)
       (object)
    */
    $c = (int) ($a / $b); 
    /* place the expression within parentheses to ensure that the value of the entire 
       expression is casted, otherwise, only the variable $a would have been cast to an integer
    */
?>