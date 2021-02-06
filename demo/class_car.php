<?php
// Classes in PHP
// Syntax:
// A little spin of python and OOP languages syntax
// Time to add some functionality
class Car {
    // Time to add some properties
    // Use the special var keyword for class variables
    // **Can choose to define them right off the bat or not!!
    // Lets not forget the access of our variables
    // DO NOT NEED 'var' IF YOU ARE USING A ACCESS KEYWORD
    private $carID = 1111; // Will only be available in this class
    protected $wheels = 4; // Will be available in this class and child classes
    protected $hood = 1; // **DEFAULT is public 
    protected $engine = 1;
    protected $doors = 4;
    protected $windowTint;
    protected $exhaustPipes;
    public $dumbyVar1; // Both public and var are the same thing
    var $dumbyVar2;
    // Lastly, a static variable
    static $color = 'Green'; // This is attached to the class like normal static in java


    // Create the constructor
    function __construct($windowTint, $exhaustPipes) {
        $this->windowTint = $windowTint;
        $this->exhaustPipes = $exhaustPipes; 
    }

    // Create a method
    function greeting() {
        echo 'Hi! How are you? <br>';
        // Just like java can use the '$this' keyword to reference class
        echo 'In greeting function: wheels = ' . $this->wheels . '<br>';
    }
    function moveWheels() {
        echo 'Wheels have moved. <br>';
    }
}

// Here is some inheritance
// Similar syntax to java
class Sedan extends Car {

    private $sedanModel;

    // Inherited constructor
    function __construct($sedanModel, $windowTint, $exhaustPipes) {
        // Call the super constructor
        parent::__construct($windowTint, $exhaustPipes);
        $this->sedanModel = $sedanModel;
    }

    function printLocalClassInfo() {
        echo 'The sedan model is ' . $this->sedanModel . '<br>';
    }
}

// Built in class_exists function
// Takes a parameter string that is the name of the class we are checking for existence
if (class_exists("Car")) {
    echo 'Created <br>';
    // Now we want to instantiate the class
    // use the new keyword!!!!!
    $instance = new Car(true, 2); // Just like OOP
    // Use an arrow to point and call a function
    $instance->greeting();
    $instance->moveWheels();
    // Use the arrow to also point and reference a class member variable
    //echo $instance->wheels . '<br>'; // This is protected
    //echo $instance->doors . '<br>'; // This is protected
    // Can do normal re-assignment
    //$instance->doors = 2;
    //echo 'Now the car has ' . $instance->doors . ' doors <br>'; // This is protected
}
// Another built in function: method_exists
// Takes two parameters, first is a string identifying the class name and the 
// second is a string identifying the method name
if (method_exists("Car", "greeting")) {
    echo 'The method greeting() exists <br>';
}

if (class_exists("Sedan")) {
    echo 'The inherited class exists <br>';
    // Instantiating Inheritance instance
    $inherit = new Sedan('Impreza', true, 3);
    echo 'These are variables and functions from the sedan child class <br>';
    $inherit->greeting();
    $inherit->moveWheels();
    //echo 'How many doors are in the sedan? doors = ' . $inherit->doors . '<br>';
    $inherit->printLocalClassInfo();
}

// Let's try out the static variable
// Use the Car:: syntax and remember to use the $ reference because this is
// no longer an instance variable
echo 'The static variable color of the Car class is ' . Car::$color . '<br>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
