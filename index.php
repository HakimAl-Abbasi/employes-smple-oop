<?php

    require_once("classes/DB.php");
    require_once("classes/employee.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>oop examples</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button>
    </form>
  </div>
</nav>

<!-- navbar -->

<!-- jomptron  -->
<div class="container">
<div class="jumbotron mt-4">
  <h5>Employes</h5>
 
  <hr class="my-4">
  
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Destination </th>
    </tr>
  </thead>
  <tbody>


        <?php

          $employee = new Employee();
         $rows = $employee->select();

         foreach ($rows as $row)
         {
             ?>
             <tr>

          <th scope="row"><?php echo $row['id'];?></th>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['city'];?></td>
                 <td><?php echo $row['designation'];?></td>
              <td><a href="" class="btn btn-info sm-4"> Edit<i class="fa fa-edit"></i></a> &nbsp; <a href="" class="btn btn-danger sm-3"> Delete<i class="fa fa-edit"></i></a></td>
            </tr>

             <?php
                 }

        ?>

   
  </tbody>
</table>
  
</div>
</div>
<!-- jomptron  -->



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>