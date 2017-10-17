<?php
    $object = new User;
    $temp = new User ('name', 'password');
    print_r ($object); // display information about a variable in human-readable form   

    // accessing object properties
    $object -> name = 'Steve';
    $object -> password = 'mypass';

    // calling object's method
    $object -> save_user ();

    Class User {
        public $name, $password;

        function save_user {
            echo "User information saved.";
        }
    }

    Class Name {
        public $name;

        // constructor
        // function Name ($name_string) {
        //     $name = $name_string;
        // }

        // another method defining constructor
        // method names beginning with a double underscore ( __ ) are reserved, 
        // and you should not create any of this form.
        function __construct ($name_string) {
            // constructor code here
        }

        // destructor
        function __destruct () {
            // destructor code here
        }

        // special variable $this to access the current object's properties
        function get_name () {
            return $this -> name;
        }

        /* static method
         - it is called on a class, not on an object
         - it has no access to any object's properties 
        */
        static function str_name () {
            echo "This is a static methoc message";
        }
    }

    /* Copying an object
     - Both $name1 and $name2 refer to the same object, so changing the name property of $name2
       to 'Jobs' also sets that property for $name1
    */
    $name1 = new Name;
    $name1 -> name = 'Steve';
    $name2 = $name1;
    $name2 -> name = 'Jobs';

    /* Cloning an object
     - create new instance of the class and copies the property values 
       from the original instance to the new instance
    */
    $name3 = new Name;
    $name3 -> name = 'Steve';
    $name4 = clone $name3;
    $name4 -> name = 'Jobs';

    // calling static method
    Name :: str_name ();

    class Test {
        // declaring properties
        public $name = "Paul Smith"; // valid
        public $age = 42; // valid
        public $time = time(); // invalid - calls a function
        public $score = $level * 2; // invalid - uses an expression
    }

    class Translate {
        // declaring constants
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        const GERMAN = 3;

        static function lookup () {
            echo self :: SPANISH;
        }
    }

    // access constant directly without need to create instance of the class
    Translate :: lookup (); 

    /* Property and method scope
     - public : (default) properties and methods can be referenced from outside the code
     - protected : properties and methods can be referenced only by the object's class methods
       and those of any subclasses
     - private : these members can be referenced only by methods within the same class,
       not by subclasses
    */

    class Test {
        /* Static properties and methods
         - accessible without an instantiation of the class
         - cannot be accessed directly within an instance of a class, but a static method can
        */
        static $static_property = "I'm static";

        function get_sp () {
            return self :: $static_property;
        }
    }

    $temp = new Test ();
    echo Test :: $static_property;
    echo $temp -> get_sp ();
    echo $temp -> static_property; // invalid - static property cannot be accessed from instance of the class

    // inheritance
    // class Subscriber extends User

    /* the parent operator
    If you write a method in a subclass with the same name as one in its parent class, its
    statements will override those of the parent class. Sometimes this is not the behavior
    you want, and you need to access the parent’s method. To do this, you can use the
    parent operator
    */
    class Dad {
        function test () {
            echo "[class Dad] I am your father";
        }
    }

    class Son extends Dad {
        function test () {
            echo "[class Son] I am Luke";
        }
        function test2 () {
            parent :: test ();
        }
    }

    /* subclass constructors
    When you extend a class and declare your own constructor, you should be aware that
    PHP will not automatically call the constructor method of the parent class. If you
    want to be certain that all initialization code is executed, subclasses should always call
    the parent constructors.
    */
    class Wildcat {
        public $fur;

        function __construct () {
            $this -> fur = "TRUE";
        }
    }

    class Tiger extends Wildcat {
        parent :: __construct (); // CALL PARENT CONSTRUCT FIRST
        $this -> stripes = "TRUE";
    }

    /* final methods
    When you wish to prevent a subclass from overriding a superclass method, you can
    use the final keyword.
    */
    class User {
        final function copyright () {
            echo "This method is final and cannot be overriden by subclass"
        }
    }
?>