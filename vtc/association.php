<?php
require_once 'views/header.html';
require_once 'controllers/associationControllers.php';

$association = new AssociationControllers();

$association->displayAssociation();