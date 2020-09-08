<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($list as $drivers) {
        echo "<tr>";
        echo "<td>" . $drivers->getId() . "</td>";
        echo "<td>" . $drivers->getFirstName() . "</td>";
        echo "<td>" . $drivers->getLastName() . "</td>";
        echo "<td> <a href='./views/updateDrivers.php'><img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></a></td>";
        echo "<td> <a href='./views/deleteDrivers.php'><img src='./Ressources/icons/delete.png' style='width:30px;height:30px;'></a></td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</div>


<div class="container">
  <form method="post">
    <div class="form-group">
      <label for="addDrivers">FirstName</label>
      <input type="text" class="form-control" name="firstName" />
    </div>
    <div class="form-group">
      <label for="addDrivers">LastName</label>
      <input type="text" class="form-control" name="lastName" />
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Add Drivers!</button>
  </form>
</div>