<?php

/**
 * Showing Todo to List
 */
function showTodoList() {
    global $todoList;

    echo "TODOLIST".PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" .PHP_EOL;
    }

}


