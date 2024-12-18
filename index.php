<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // instantiating
    class Beverage
    {
        public $color, $opacity, $temperature;
    }
    $tea = new Beverage();
    $tea->temperature = "hot";
    echo nl2br($tea->temperature . "\n");

    // method
    class Beverage2
    {
        public $temperature, $color, $opacity;
        function getInfo()
        {
            return "This beverage is " . $this->temperature . " and " . $this->color . ".";
        }
    }

    $soda = new Beverage2();
    $soda->color = "black";
    $soda->temperature = "cold";
    echo nl2br($soda->getInfo() . "\n");

    // constructor
    class Beverage3
    {
        public $temperature, $color, $opacity;
        function __construct($temperature, $color)
        {
            $this->temperature = $temperature;
            $this->color = $color;
        }
        function getInfo()
        {
            return "This beverage is $this->temperature and $this->color.";
        }
    }
    $soda2 = new Beverage3("cold", "black");
    echo nl2br($soda2->getInfo() . "\n");

    // inheritance
    class Milk extends Beverage
    {
        function __construct()
        {
            $this->temperature = "cold";
        }
    }

    // overriding methods
    class Milk2 extends Beverage2
    {
        function __construct()
        {
            $this->temperature = "cold";
        }
        function getInfo()
        {
            return parent::getInfo() . " I like my milk this way.";
        }
    }

    $drink = new Milk2();
    echo nl2br($drink->getInfo() . "\n");

    //protected members
    class Beverage4
    {
        private $temperature, $color;
        protected $opacity;
        // The opacity property is accessed in a subclass, so setting it to private would be too restrictive. However, it is never accessed outside of the class so public is more permissive than we need.
        function __construct($temperature, $color)
        {
            $this->temperature = $temperature;
            $this->color = $color;
        }
        function getInfo()
        {
            return "This beverage is $this->temperature and $this->color.";
        }
    }
    class Milk3 extends Beverage4
    {
        function setOpacity($opacity)
        {
            $this->opacity = $opacity;
        }
    }

    // getters and setters
    class Beverage5
    {
        private $color;
        function setColor($color)
        {
            $this->color = strtolower($color);
        }
        function getColor()
        {
            return $this->color;
        }
    }

    $soda = new Beverage5();

    //static members
    class AdamsUtils
    {
        public static $the_answer = 42;
        public static function addTowel($string)
        {
            return $string . " and a towel.";
        }
    }

    $items = "I brought apples";

    echo nl2br(AdamsUtils::$the_answer . "\n");
    echo nl2br(AdamsUtils::addTowel($items) . "\n");
    ?>
</body>

</html>