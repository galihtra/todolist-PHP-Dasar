<?php

require_once "../model/TodoList.php";
require_once "../business-logic/AddTodoList.php";
require_once "../business-logic/ShowTodoList.php";
require_once "../business-logic/RemoveTodoList.php";

addTodoList("Harini saya badmood");
addTodoList("Besok makan");
addTodoList("Belajar sampai bodoh");
addTodoList("Saya ingin belajar");
addTodoList("Nonton Drakor");

showTodoList();

removeTodoList(3);

showTodoList();