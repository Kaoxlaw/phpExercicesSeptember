<?php
require_once './models/association.php';

class AssociationControllers
{
  public function addAssociation()
  {
    require_once './views/association/association.php';

    $association = new Association();
    if (isset($_POST['submit'])) {
      $drivers = $association->setDrivers($_POST['drivers']);
      $vehicles = $association->setVehicles($_POST['vehicles']);

      $association->create($drivers, $vehicles);
    }
  }
  public function displayAssociation()
  {
    $association = new Association();
    $list = $association->display();

    require_once './views/association/association.php';
  }
}