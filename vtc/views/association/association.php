<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id_Association</th>
        <th scope="col">Drivers</th>
        <th scope="col">Vehicles</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($list as $drivers) {
        echo "<tr>";
        echo "<td>" . $drivers->getId_association() . "</td>";
        echo "<td>" . $drivers->getDrivers() . "</td>";
        echo "<td>" . $drivers->getVehicles() . "</td>";
        echo "<td> <a href=''><img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></a></td>";
        echo "<td> <a href=''><img src='./Ressources/icons/delete.png' style='width:30px;height:30px;'></a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<div class="container">
  <div class="form-group">
    <label for="sel1">Drivers:</label>
    <select class="form-control" id="sel1">
      <option>Choose a Drivers</option>
      <?php
      require_once '../models/association.php';
      $association = new Association();
      $association->displayDrivers();
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="sel1">Vehicles:</label>
    <select class="form-control" id="sel1">
      <option>Choose a Vehicles</option>
      <option>2</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Add Association!</button>
</div>