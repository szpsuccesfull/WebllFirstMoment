


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Giovanny & Samuel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/insert">Insert </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link"  href="http://localhost/WebllFirstMoment/update">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/delete">Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/WebllFirstMoment/select">query</a>
      </li>
    </ul>
  </div>
</nav> 

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


