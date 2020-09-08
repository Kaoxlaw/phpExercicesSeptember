<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id_Vehicles</th>
        <th scope="col">Brand</th>
        <th scope="col">Models</th>
        <th scope="col">Colors</th>
        <th scope="col">Registration</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($list as $drivers) {
        echo "<tr>";
        echo "<td>" . $drivers->getId_vehicles() . "</td>";
        echo "<td>" . $drivers->getBrand() . "</td>";
        echo "<td>" . $drivers->getModels() . "</td>";
        echo "<td>" . $drivers->getColor() . "</td>";
        echo "<td>" . $drivers->getRegistration() . "</td>";
        echo "<td> <a href=''><img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></a></td>";
        echo "<td> <a href=''><img src='./Ressources/icons/delete.png' style='width:30px;height:30px;'></a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>



<div class="container">
  <form method="post">
    <div class="form-group">
      <label for="addDrivers">Brand</label>
      <input type="text" class="form-control" name="brand" />
    </div>
    <div class="form-group">
      <label for="addDrivers">Models</label>
      <input type="text" class="form-control" name="models" />
    </div>
    <div class="form-group">
      <label for="addDrivers">Color</label>
      <input type="text" class="form-control" name="color" />
    </div>
    <div class="form-group">
      <label for="addDrivers">Registration</label>
      <input type="text" class="form-control" name="registration" />
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Add Vehicles!</button>
  </form>
</div>