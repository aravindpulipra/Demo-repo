<?php
include_once("sqlconnect.php");

$db = new stdDatabase();

if($_POST) {
   
    $db->newStudent($_POST['name'],$_POST['email'],$_POST['mark']);
    header('Location: sqlform.php');
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
        <button type="submit" class="btn btn-primary btn-xs float-end">Submit</button>
      </div>
    </div>           
  </form>
</div>

<div class="container mt-3">
  <h2>List of Student</h2>
  <div class="row">
  <table class="table">
    <?php
        $students = $db->getStudents();

        if($students->num_rows>0) {
            while($row = $students->fetch_assoc()) {
                ?>
                
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['mark']?></td>
                        <td><a href="sqlform.php?id=<?php echo $row["id"]?>">Edit</a></td>
                    </tr>
                
                <?php
            }
        }
        else {
            ?>
            <table class="table">
                <tr>
                    <td>No Students found!</td>
                </tr>
            </table>    
            <?php
        }
        ?>
  </table>
  </div>
</div>

</body>
</html>
