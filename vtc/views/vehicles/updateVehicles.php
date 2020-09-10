  <?php
  foreach ($vehiclesById as $vehicles) {
  ?>
    <div class="container">
      <form method="post">
        <div class="form-group">
          <label for="addDrivers">Brand</label>
          <input type="text" class="form-control" name="brand" value="<?php echo $vehicles->getBrand(); ?>" />
        </div>
        <div class="form-group">
          <label for="addDrivers">Models</label>
          <input type="text" class="form-control" name="models" value="<?php echo $vehicles->getModels(); ?>" />
        </div>
        <div class="form-group">
          <label for="addDrivers">Color</label>
          <input type="text" class="form-control" name="color" value="<?php echo $vehicles->getColor(); ?>" />
        </div>
        <div class="form-group">
          <label for="addDrivers">Registration</label>
          <input type="text" class="form-control" name="registration" value="<?php echo $vehicles->getRegistration(); ?>" />
        </div>

        <button type="submit" class="btn btn-primary" name="modify">Update Vehicles!</button>
      </form>
    </div>
  <?php
  }
  ?>