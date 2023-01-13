<?php

require_once "../helper/Input.php";

$name = input("Name");
echo "Hello $name" .PHP_EOL;

$age = input("Age");
echo "Your age $age" .PHP_EOL;
