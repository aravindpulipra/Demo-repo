<?php
include_once("sqlconnect.php");

$db = new stdDatabase();

// When the form data is submited
if($_POST) {
    // Insert the data to the db table
    if($_REQUEST['edit']=='') {  
        $sts = $db->newStudent($_POST['name'],$_POST['email'],$_POST['mark']);
        $msg = "New student added successfully.";
    }
    else {
        $sts = $db->editStudent($_REQUEST['edit'],$_POST['name'],$_POST['email'],$_POST['mark']);
        $msg = "Student details updated successfully.";        
    }
    // If success, redirect to the main page with a success nessage
    header("Location: sqlform.php?success=$msg");
}

// If edit link is pressed
if(@$_REQUEST['edit']!='') {

    $data = $db->getStudent($_REQUEST['edit']);
}


// If delete link is pressed
if(@$_REQUEST['delete']!='') {

    $data = $db->deleteStudent($_REQUEST['delete']);

    // If success, redirect to the main page with a success nessage
    if($data)
        header("Location: sqlform.php?success=Student information deleted successfully.");
    else  
        header("Location: sqlform.php?error=Unable to delete this student info.");  
          
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
  <form method="post">
    <div class="row">
        <div class="col">
            <?php
            $msgClass   = '';
            $msgTitle   = '';
            $msgMessage = '';

            if(@$_REQUEST['success']!='') {
                $msgClass   = 'success';
                $msgTitle   = 'Success';
                $msgMessage = $_REQUEST['success'];  
            }

            if(@$_REQUEST['error']!='') {
                $msgClass   = 'danger';
                $msgTitle   = 'Error';
                $msgMessage = $_REQUEST['error'];  
            }
            if($msgMessage!="") {
                ?>
                <div class="alert alert-<?php echo $msgClass?>">
                    <strong><?php echo $msgTitle?></strong> <?php echo $msgMessage?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>    
    <div class="row">
        <div class="col">
            <label for="exampleFormControlInput1" class="form-label">Student's Name</label>
            <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo @$data['name']?>">
        </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="exampleFormControlInput1" class="form-label">Student's Email Address</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo @$data['email']?>">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="exampleFormControlInput1" class="form-label">Student's Mark</label>
        <input type="text" class="form-control" placeholder="Enter Mark" name="mark" value="<?php echo @$data['mark']?>">
      </div>
    </div>  
    <div class="row">
      <div class="col">
        <br/>
        <button type="submit" class="btn btn-primary btn-xs float-end"><?php echo (@$_REQUEST['edit']!='')?"Update":"Add"?></button>
      </div>
    </div>           
  </form>
</div>

<div class="container mt-3">
  <h2>List of Student</h2>
  <div class="row">
  <table class="table">
    <?php
        $students = $db->getAllStudents();

        if($students->num_rows>0) {
            ?>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mark</th>
                <th colspan="2"></th>
            </tr>            
            <?php
            while($row = $students->fetch_assoc()) {
                ?>
                
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['mark']?></td>
                        <td><a href="sqlform.php?edit=<?php echo $row["id"]?>">Edit</a></td>
                        <td><a href="sqlform.php?delete=<?php echo $row["id"]?>">Delete</a></td>
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
