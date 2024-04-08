
<!-- The frist two block of php code is to illisture how you can have mutiple section of php code in a single file -->
<?php
    echo 'This is a test';
?>
<?php echo 'This is a test' ?>

<!-- programming basic variables, type and constant Example -->
<?php 


?>

<!-- Array Example -->
<?php
    echo "============================================================\n";
    echo " Array example start here\n";
    // array example
    // Note -> operator is used for accessing proerties and methods of objects and arrays.
    // Note => operator is used for assining value to specific key in array ONLY.
    $a = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
    echo $a . "\n"; # output: Array. Notice: Array to string conversion and the dot operator is used for concatenation in PHP.
    echo $a['a']."\n"; # output: apple\n
?>

<!-- Class Example -->
<?php
    echo "============================================================\n";
    echo " Class example start here\n";
    class foo
    {
        function do_foo()
        {
            echo "Doing foo."; 
        }
    }
    $bar = new foo;
    $bar->do_foo();
?>

<!-- Enumerations Example -->
<?php
    echo "============================================================\n";
    echo " Enum example start here\n";
    // enumration example
    enum Test{
        case A;
        case B;
        case C;
    }
    function testEnum(Test $input) {
        echo $input->name."\n";
    }
    testEnum(Test::A);
    testEnum(Test::B);

    enum Test2: string{
        case A = "apple\n";
        case B = "banana\n";
        case C = "cherry\n";
    }
    function testEnum2(Test2 $input) {
        echo $input->name.", " ;
        echo $input->value;
    }
    testEnum2(Test2::A);
    testEnum2(Test2::B);
?> 

<?php
require __DIR__ . '/vendor/autoload.php';
echo "================================\n";
echo " Monolog example start here\n";
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->warning('Foo');
$loader = require __DIR__ . '/vendor/autoload.php';


// any class in the Acme\Test namespace will be loaded from the current directory
$loader->addPsr4('Acme\\Test\\', __DIR__);



?>


<?php 
    echo "We omitted the last closing tag\n";
    // no closing tag
    // is recommended to omit the PHP closing tag in files containing only PHP code at the end of the file.
    // if the file contain html and php code then it is recommended to use the closing tag.