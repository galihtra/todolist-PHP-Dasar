<?php

require_once "../view/ViewShowTodoList.php";
require_once "../business-logic/AddTodoList.php";

addTodoList("Baca buku 15 menit");
addTodoList("Lari Pagi di hari minggu");
addTodoList("Makan pagi");

viewShowTodoList();