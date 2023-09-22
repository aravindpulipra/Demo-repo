<?php
include_once("sqlconnect.php");

$db = new stdDatabase();

if($_POST) {
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>New Student</h2>
  <p>Please enter the student details below</p>
  <form method="post" action="sqlform.php">
  <div class="row">
      <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Student's Name</label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Student's Email Address</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="exampleFormControlInput1" class="form-label">Student's Mark</label>
        <input type="text" class="form-control" placeholder="Enter Mark" name="mark">
      </div>
    </div>  
    <div class="row">
      <div class="col">
        <br/>
        <button type="button" class="btn btn-primary btn-xs float-end">Submit</button>
      </div>
    </div>           
  </form>
</div>

</body>
</html>
