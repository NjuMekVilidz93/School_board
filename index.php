<?php function __autoload($class) {
  require_once "classes/$class.php";

}
include "create.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>School board</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SCHOOL BOARD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
<!--EndNavbar-->
<!--tABLE WITH LIST OF THE STUDENTS-->
<div class="container mt-4">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4">All students</h4>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Grades</th>
              <th scope="col">Average</th>
              <th scope="col">Board</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $student = new Student();
              $rows = $student->select();

              foreach ($rows as $row) {
             ?>
                <tr>
                  <th scope="row"><?php echo $row['id']; ?></th>
                  <td><a href="select.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a></td>
                  <td><?php echo $row['grades']; ?></td>
                  <td><?php echo $row['average']; ?></td>
                  <td><?php echo $row['board']; ?></td>
                  <td><?php if($row['board'] == '') echo "Fail"; else echo "Pass";?></td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h4 class="mb-4">Add students</h4>
        <form method="post" action="index.php">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="grades">Grades:</label>
            <input type="text" class="form-control" name="grades" placeholder="Enter grades">
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
