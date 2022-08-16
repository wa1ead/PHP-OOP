<?php

#ACCESSING PROPERTIES:
class Person1
{
    #PROPERTIES:
    public $firstName = "WALID";
    public $lastName = "DRAA";
    public $age = 22;
}

$myObj = new Person1();
echo $myObj->firstName . "\n";
$myObj->firstName = "WAHID";
echo $myObj->firstName . "\n";


#ACCESSING CONSTANTS:
class Person2
{
    #CONSTANT:
    const AVG_LIFE_SPAN = 80;
    public $firstName = "WALID";
    public $lastName = "DRAA";
    public $age = 22;
}

$myObj = new Person2();
echo $myObj::AVG_LIFE_SPAN . "\n";


#ACCESSING METHODS:
class Person3
{
    const AVG_LIFE_SPAN = 80;
    public $firstName = "WALID";
    public $lastName = "DRAA";
    public $age = 22;

    #METHODS:
    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
}

$myObj = new Person3();
$myObj->setFirstName("REDA");
echo $myObj->firstName . "\n";
$myObj->getFirstName();
echo $myObj->firstName . "\n";


#ACCESSING CONSTRUCTORS:
class Person4
{
    const AVG_LIFE_SPAN = 80;
    public $firstName;
    public $lastName;
    public $age;

    #CONSTRUCTOR:
    function __construct()
    {
        $this->firstName = "WALID";
        $this->lastName = "DRAA";
        $this->age = 22;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
}

$myObj = new Person4();
echo $myObj->getFirstName() . "\n";


#PASSING PARAMETERS:
class Person5
{
    const AVG_LIFE_SPAN = 80;
    public $firstName;
    public $lastName;
    public $age;

    #CONSTRUCTOR PARAMETERS:
    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
}

#PASSING:
$myObj = new Person5("WALID", "DRAA", 22);
echo $myObj->getFirstName() . "\n";


#INHERITANCE:
class Person6
{
    public $firstName;
    public $lastName;
    public $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        echo "Person Constructor" . PHP_EOL;
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    public function getFullName()
    {
        echo "Person->getFullName()" . PHP_EOL;
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

#INHERITANCE KEYWORD: extends
class Author1 extends Person6
{
    public $penName = "Dostoievski";

    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }
    public function getFullName()
    {
        echo "Author->getFullName()" . PHP_EOL;
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

$newAuthor = new Author1("WALID", "DRAA", 22);
echo $newAuthor->getFullName() . "\n";


#PROTECTED PROPERTIES & METHODS:
class Person7
{
    protected $firstName;
    protected $lastName;
    protected $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author2 extends Person7
{
    protected $penName = "Dostoievski";

    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }
    public function getCompleteName()
    {
        return $this->firstName . " " . $this->lastName . " A.K.A " . $this->penName . PHP_EOL;
    }
}

$newAuthor = new Author2("WALID", "DRAA", 22);
#ACCESSING:
echo $newAuthor->getCompleteName() . "\n";


#PRIVATE PROPERTIES & METHODS:
class Person8
{
    private $firstName;
    private $lastName;
    private $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author3 extends Person8
{
    private $penName = "Dostoievski";

    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }
    public function getCompleteName()
    {
        #ACCESSING:
        return $this->getFullName() . " A.K.A " . $this->penName . PHP_EOL;
    }
}

$newAuthor = new Author3("WALID", "DRAA", 22);
echo $newAuthor->getCompleteName() . "\n";


#STATIC PROPERTIES & METHODS:
class Person9
{
    private $firstName;
    private $lastName;
    private $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author4 extends Person9
{
    public static $centuryPopular = "19th";
    private $penName = "Dostoievski";

    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }
    public function getCompleteName()
    {
        #ACCESSING:
        return $this->getFullName() . " A.K.A " . $this->penName . PHP_EOL;
    }
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }
}

echo Author4::$centuryPopular . "\n";
echo Author4::getCenturyAuthorWasPopular() . "\n";


#MULTIPLE CONSTRUCTORS:
class Person10
{
    private $firstName;
    private $lastName;
    private $age;

    #PARENT CONSTRUCTOR:
    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        // echo "Person Constructor" . PHP_EOL;
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author5 extends Person10
{
    public static $centuryPopular = "19th";
    private $penName;

    #CHILD CONSTRUCTOR:
    function __construct($nwFirst = "", $nwLast = "", $nwAge = "", $nwPenName = "")
    {
        // echo "Author Constructor" . PHP_EOL;
        #ACCESSING PARENT:
        parent::__construct($nwFirst, $nwLast, $nwAge);

        $this->penName = $nwPenName;
    }
    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->getFullName() . " A.K.A " . $this->penName . PHP_EOL;
    }
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }
}

$newAuthor = new Author5("WALID", "DRAA", 22, "Dostoievski");
echo $newAuthor->getCompleteName() . "\n";


#DESTRUCTOR:
class Person11
{
    private $firstName;
    private $lastName;
    private $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        // echo "Person Constructor" . PHP_EOL;
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author6 extends Person11
{
    public static $centuryPopular = "19th";
    private $penName;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "", $nwPenName = "")
    {
        // echo "Author Constructor" . PHP_EOL;
        parent::__construct($nwFirst, $nwLast, $nwAge);

        $this->penName = $nwPenName;
    }
    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }

    public function getCompleteName()
    {
        return $this->getFullName() . " A.K.A " . $this->penName . PHP_EOL;
    }
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }

    #CREATING:
    function __destruct()
    {
        echo "People Respecting Power, And Humilating Cuteness. - " . $this->penName . "\n";
    }
}

$newAuthor = new Author6("WALID", "DRAA", 22, "Dostoievski");
echo $newAuthor->getCompleteName() . "\n";
echo "This Is The End." . PHP_EOL;


#FINAL KEYWORD:
final class Person12
{
    private $firstName;
    private $lastName;
    private $age;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "")
    {
        // echo "Person Constructor" . PHP_EOL;
        $this->firstName = $nwFirst;
        $this->lastName = $nwLast;
        $this->age = $nwAge;
    }

    final public function getFirstName()
    {
        return $this->firstName;
    }
    public function setFirstName($nwName)
    {
        $this->firstName = $nwName;
    }
    protected function getFullName()
    {
        return $this->firstName . " " . $this->lastName . PHP_EOL;
    }
}

class Author7 extends Person12
{
    public static $centuryPopular = "19th";
    private $penName;

    function __construct($nwFirst = "", $nwLast = "", $nwAge = "", $nwPenName = "")
    {
        // echo "Author Constructor" . PHP_EOL;
        parent::__construct($nwFirst, $nwLast, $nwAge);

        $this->penName = $nwPenName;
    }
    public function getPenName()
    {
        return $this->penName . "\n" . PHP_EOL;
    }
    public function getFirstName()
    {
        return $this->penName;
    }

    public function getCompleteName()
    {
        return $this->getFullName() . " A.K.A " . $this->penName . PHP_EOL;
    }
    public static function getCenturyAuthorWasPopular()
    {
        return self::$centuryPopular;
    }
}

$newAuthor = new Author7("WALID", "DRAA", 22, "Dostoievski");
echo $newAuthor->getFirstName() . "\n";



#INTERFACES:
interface Electricty
{
    public function voltage();
    public function electricCordType();
    public function outletStyle();
}

class Television implements Electricty
{
    function changeChannel()
    {
    }
    function adjustVolume()
    {
    }
    public function voltage()
    {
    }
    public function electricCordType()
    {
    }
    public function outletStyle()
    {
    }
}


#ABSTRACT CLASSES:
abstarct class Electricty
{
    abstarct function voltage();
    abstarct function electricCordType();
    abstarct function outletStyle();

    public function powerOn()
    {

    }
    public function powerOff()
    {

    }
}

class Television extends Electricty
{
    function changeChannel()
    {
    }
    function adjustVolume()
    {
    }
    public function voltage()
    {
    }
    public function electricCordType()
    {
    }
    public function outletStyle()
    {
    }
}