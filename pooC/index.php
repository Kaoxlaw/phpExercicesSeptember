<?php
require_once 'Controllers/BookControllers.php';
require_once 'Views/header.html';

$book = new BookControllers();

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'ajouter') {
    $book->add();
  }
} else {
  var_dump('liste');
}