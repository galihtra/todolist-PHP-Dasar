<?php

require_once __DIR__. "/../model/TodoList.php";
require_once __DIR__. "/../helper/Input.php";
require_once __DIR__. "/../business-logic/RemoveTodoList.php";

function viewRemoveTodoList() {
    echo "Remove TODO" . PHP_EOL;

    $option = input("Number (press x to cancel)");

    if ($option == "x") {
        echo "Canceled remove todo" . PHP_EOL;
    } else {
        $success = removeTodoList($option);

        if ($success) {
            echo "Delete successfully number " . $option .PHP_EOL;
        } else {
            echo "Delete Failed number " . $option .PHP_EOL;
        }
    }

}