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
      foreach ($list as $vehicles) {
        echo "<tr>";
        echo "<td>" . $vehicles->getId_vehicles() . "</td>";
        echo "<td>" . $vehicles->getBrand() . "</td>";
        echo "<td>" . $vehicles->getModels() . "</td>";
        echo "<td>" . $vehicles->getColor() . "</td>";
        echo "<td>" . $vehicles->getRegistration() . "</td>";
        echo "<td> <a href='?action=updateVehicles&id_vehicles=" . $vehicles->getId_vehicles() . "'><img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></a></td>";
      ?>
        <td>
          <img src='./Ressources/icons/delete.png' style='width:30px;height:30px;' data-toggle="modal" data-target="#exampleModal-<?php echo $vehicles->getId_vehicles(); ?>">
        </td>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal-<?php echo $vehicles->getId_vehicles(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Really?! This Car: <?php echo $vehicles->getBrand() . " " . $vehicles->getModels() . " " . $vehicles->getColor() . ", Registration n." . $vehicles->getRegistration() ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="?action=deleteVehicles&id_vehicles='<?php echo $vehicles->getId_vehicles(); ?>'">
                  <button type=" button" class="btn btn-primary">Delete, REALLY?!</button>
                </a>
              </div>
            </div>
          </div>
        </div>

      <?php
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