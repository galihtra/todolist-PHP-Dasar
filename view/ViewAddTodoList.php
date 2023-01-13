<?php

require_once __DIR__. "/../model/TodoList.php";
require_once __DIR__. "/../helper/Input.php";
require_once __DIR__. "/../business-logic/AddTodoList.php";

function viewAddTodoList() {
    echo "Add TODO" . PHP_EOL;

    $todo = input("Todo (press x to cancel)");

    if ($todo == "x") {
        // Cancel
    } else {
        addTodoList($todo);
    }
}
