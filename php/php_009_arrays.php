<?php
    // numerical  array without explicit index
    $paper [] = 'Copier'; // index 0
    $paper [] = 'Inkjet'; // index 1
    $paper [] = 'Laser' ; // index 2

    // numerical array with explicit index
    $paper [0] = 'Copier';
    $paper [1] = 'Inkjet';
    $paper [2] = 'Laser' ;

    // associative array
    $paper ['copier'] = "Copier & multipurpose";
    $paper ['inkjet'] = "Inkjet printer";
    $paper ['laser '] = "Laser printer";

    // using array keyword
    $paper = array ("Copier", "Inkjet", "Laser");

    // using array keyword for associative array
    $paper = array (
        'copier' => "Copier & multipurpose",
        'inkjet' => "Inkjet printer",
        'laser ' => "Laser printer",
    );

    // foreach as loop for numerical array
    foreach ($paper as $item) {
        echo "$j: $item <br>";
        ++$j;
    }

    // foreach as loop for associative array
    foreach ($paper as $item => $description) {
        echo "$item: $description <br>";
    }

    // walking through an associative array using each and list
    while (list ($item, $description) = each ($paper))
        echo "$item: $description <br>";

    // using list keyword
    list ($a, $b) = array ('Alice', 'Bob');

    // multidimensional array
    $products = array (
        'paper' => array (
            'copier' => "Copier & multipurpose",
            'inkjet' => "Inkjet printer",
            'laser ' => "Laser printer"
        ),
        'pens' => array (
            'ball' => "Ball point",
            'hilite' => "Highlighters",
            'marker' => "Markers"
        ),
        'misc' => array (
            'tape' => "Sticky tape",
            'glue' => "Adhesives",
            'clips' => "Paperclips"
        )
    );

    foreach ($product as $section => $items)
        foreach ($item as $key => $value)
            echo "$section:\t$key\t($value) <br>";
    
    // array funvtion is_array () to check whether variable is an array
    echo (is_array ($product)) ? "is an array" : "is not an array";

    // array function count () to get number of array elements
    echo count ($product);

    // option 1 to force recursive counting of all subarray elements
    echo count ($product, 1);

    // sorting an array
    sort ($product);
    sort ($product, SORT_STRING);
    sort ($numarr , SORT_NUMERIC);
    rsort($numarr , SORT_NUMERIC); // reverse order

    // shuffle array elements
    shuffle ($cards);

    /* array function to take a string containing several items separated by a single character
    (or string of characters) and then place each of these items into an array. 
    One handy example is to split up a sentence into an array containing all its words.
    */
    $words = explode (' ', 'This is a sentence with seven words');
    $words = explode ('***', 'A***sentence***with***asterisks');

    /* array function extract to extract each array elements into variables.
    Be careful with this approach, though, because if any extracted variables conflict with
    ones that you have already defined, your existing values will be overwritten.
    */
    extract ($_GET);

    /* To avoid this possibility, you can use one of the many additional parameters 
    available to this function as follow. In this case, all the new variables will begin 
    with the given prefix string followed by an underscore, so $q will become $fromget_q.
    */
    extract ($_GET, EXTR_PREFIX_ALL, 'fromget');

    // array function compact to create an array from variables
    $fname = "Steve";
    $lname = "Jobs";
    $nname = "Steve";

    $contact = compact ('fname', 'lname', 'nname');

    /* array function reset
    When the foreach...as construct or the each function walks through an array, it
    keeps an internal PHP pointer that makes a note of which element of the array it
    should return next. If your code ever needs to return to the start of an array, you can
    issue reset , which also returns the value of that element. Examples of how to use this
    function are as follows:
    */
    reset ($product);

    /* array function end
    As with reset , you can move PHP’s internal array pointer to the final element in an
    array using the end function, which also returns the value of the element, and can be
    used as in these examples:
    */
    end ($product);
?>