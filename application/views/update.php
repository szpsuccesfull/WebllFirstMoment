<form action="<?php echo base_url(). "Home/"?>" method= "POST">
  <div class="form-group">
    <div class="col-md-6 mb-3">
      <label >name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="col-md-6 mb-3">
      <label >Last name</label>
      <input type="text" class="form-control" name="Lastname" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-6 mb-3">
      <label >document</label>
      <input type="number" class="form-control" name="document" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>date of  birth</label>
      <input type="date" class="form-control"  name="dateofbirth" required>
    </div>
    <div class="col-md-6 mb-3">
      <label >city of home</label>
      <input type="text" class="form-control" name="cityofhome" required>
    </div>
  </div>
  <div class="col-md-6 mb-3">
      <label >neighborhood</label>
      <input type="text" class="form-control" name="neighborhood"  required>
    </div>
  </div>
  <div class="col-md-6 mb-3">
      <label >cell </label>
      <input type="number" class="form-control" name="cell" required>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">insert</button>
  </div>
  
</form>

