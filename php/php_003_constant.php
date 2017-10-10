<?php
    /* defining a constant
       - they must not be prefaced with a $ (as with regular variables)
       - you can define them only using the define function
    */
    define ("ROOT_LOCATION", "usr/local/www/");
    $directory = ROOT_LOCATION;

    /* predefined constants
       _LINE_       current line number of the file 
       _FILE_       the full path and filename of the file
       _DIR_        the directory of the file
       _FUNCTION_   the function name
       _CLASS_      the class name
       _METHOD_     the class method name
       _NAMESPACE_  the name of the current namespace
    */
?>