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
        echo "<td>" . $drivers->getIdDrivers() . "</td>";
        echo "<td>" . $drivers->getFirstName() . "</td>";
        echo "<td>" . $drivers->getLastName() . "</td>";
        echo "<td> <a href='?action=updateDrivers&id_drivers=" . $drivers->getIdDrivers() . "'><img src='./Ressources/icons/edit.png' style='width:30px;height:30px;'></a></td>";
      ?>
      <td>
        <img src='./Ressources/icons/delete.png' style='width:30px;height:30px;' data-toggle="modal"
          data-target="#exampleModal-<?php echo $drivers->getIdDrivers(); ?>">
      </td>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal-<?php echo $drivers->getIdDrivers(); ?>" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Really?! Him: <?php echo $drivers->getFirstName() . " " . $drivers->getLastName()  ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a href="?action=deleteDrivers&id_drivers='<?php echo $drivers->getIdDrivers(); ?>'">
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