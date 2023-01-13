<?php

require_once "../view/ViewShowTodoList.php";
require_once "../view/ViewAddTodoList.php";
require_once "../view/ViewRemoveTodoList.php";

addTodoList("Baca buku 15 menit");
addTodoList("Lari Pagi di hari minggu");
addTodoList("Makan pagi");

viewShowTodoList();

viewRemoveTodoList();

viewShowTodoList();