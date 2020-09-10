<?php
foreach ($driversById as $drivers) {
?>
  <div class="container">
    <form method="post">
      <div class="form-group">
        <label for="addDrivers">FirstName</label>
        <input type="text" class="form-control" name="firstName" value="<?php echo $drivers->getFirstName(); ?>" />
      </div>
      <div class="form-group">
        <label for="addDrivers">LastName</label>
        <input type="text" class="form-control" name="lastName" value="<?php echo $drivers->getLastName(); ?>" />
      </div>

      <button type="submit" class="btn btn-primary" name="modify">Modify Drivers!</button>
    </form>
  </div>
<?php
}
?>