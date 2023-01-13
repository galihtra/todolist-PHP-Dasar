<?php

require_once __DIR__. "/model/TodoList.php";
require_once __DIR__. "/business-logic/ShowTodoList.php";
require_once __DIR__. "/business-logic/AddTodoList.php";
require_once __DIR__. "/business-logic/RemoveTodoList.php";
require_once __DIR__. "/view/ViewShowTodoList.php";
require_once __DIR__. "/view/ViewAddTodoList.php";
require_once __DIR__. "/view/ViewRemoveTodoList.php";
require_once __DIR__. "/helper/Input.php";


echo "Todolist Application".PHP_EOL;

viewShowTodoList();
