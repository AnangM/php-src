--TEST--
passing first parameter of __set() by ref
--FILE--
<?php

class test {
    function __set(&$name, $val) { }
}

$t = new test;
$name = "prop";
$t->$name = 1;

echo "Done\n";
?>
--EXPECTF--
Fatal error: Method test::__set() cannot take arguments by reference in %s on line %d
