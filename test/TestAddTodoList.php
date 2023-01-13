<?php

require_once "../model/TodoList.php";
require_once "../business-logic/AddTodoList.php";

addTodoList("Galih");
addTodoList("Jhon");
addTodoList("Randy");

var_dump($todoList);