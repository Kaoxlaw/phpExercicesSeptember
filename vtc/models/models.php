<?php

class Models
{
  public static function getConnection()
  {
    try {
      $bdd = new PDO(
        'mysql:host=localhost;dbname=vtc',
        "afpaphp",
        "afpaphp"
      );
    } catch (PDOException $e) {
      print "Erreur";
    }
    return $bdd;
  }

  public function findById($id, $table)
  {
    $bdd = $this->getConnection();

    $sql = $bdd->prepare(" SELECT * FROM $table WHERE id_" . $table . " = " . $id);

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, $table);
    return $result;
  }

  public function display($table)
  {
    $bdd = $this->getConnection();
    $sql = $bdd->prepare(" SELECT * FROM $table ");

    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_CLASS, $table);
    return $result;
  }

  public function deleteById($id, $table)
  {
    $bdd = $this->getConnection();

    $sql = $bdd->prepare(" DELETE FROM $table WHERE id_" . $table . " = " . $id);

    if (!$sql->execute()) {
      die("Not WOrking Bro!");
    }
    header("Location: index.php");
  }
}
