<?php

require_once __DIR__ . '/vendor/autoload.php';

use vaishali\HelloWorld\Index;

$objGreet = new Index();

echo $objGreet->sayHello( "Hello Vaishali! First Composer assignment completed successfully " );

?>