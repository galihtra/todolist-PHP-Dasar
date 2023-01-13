<?php

require_once __DIR__. "/../model/TodoList.php";
require_once __DIR__. "/../business-logic/ShowTodoList.php";
require_once __DIR__. "/../view/ViewAddTodoList.php";
require_once __DIR__. "/../view/ViewRemoveTodoList.php";
require_once __DIR__."/../helper/Input.php";

function viewShowTodoList() {
    while (true) {
        showTodoList();

        echo "MENU" .PHP_EOL;
        echo "1. Tambah Todo" .PHP_EOL;
        echo "2. Hapus Todo" .PHP_EOL;
        echo "x. Keluar" .PHP_EOL;

        $option = input("Option");

        if ($option == "1") {
            viewAddTodoList();
        } else if ($option == "2") {
            viewRemoveTodoList();
        } else if ($option == "x") {
            break;
        } else {
            echo "option is not understood" .PHP_EOL;
        }
    }

    echo "See you again" .PHP_EOL;
}