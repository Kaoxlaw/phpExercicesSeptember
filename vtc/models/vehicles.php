<?php
require_once 'models.php';
class Vehicles extends Models
{
  private $id_vehicles;
  private $brand;
  private $models;
  private $color;
  private $registration;

  public function getId_vehicles()
  {
    return $this->id_vehicles;
  }

  public function getBrand()
  {
    return $this->brand;
  }
  public function setBrand($brand)
  {
    return $this->brand = $brand;
  }

  public function getModels()
  {
    return $this->models;
  }
  public function setModels($models)
  {
    return $this->models = $models;
  }

  public function getColor()
  {
    return $this->color;
  }
  public function setColor($color)
  {
    return $this->color = $color;
  }

  public function getRegistration()
  {
    return $this->registration;
  }
  public function setRegistration($registration)
  {
    return $this->registration = $registration;
  }

  public function create($brand, $models, $color, $registration)
  {
    $bdd = Models::getConnection();
    $sql = $bdd->prepare(" INSERT INTO vehicles (brand, models, color, registration) VALUES ('$brand', '$models', '$color', '$registration') ");

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php?action=addVehicles");
  }

  public function update($id, $brand, $models, $color, $registration)
  {
    $bdd = Models::getConnection();
    $sql = $bdd->prepare(" UPDATE vehicles SET brand = '" . $brand . "', models = '" . $models . "'
    , color = '" . $color . "', registration = '" . $registration . "' WHERE id_vehicles = " . $id);

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php?action=addVehicles");
  }
}
