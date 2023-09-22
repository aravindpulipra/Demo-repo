<?php
//  $host = "localhost";
//  $user = "root";
//  $pass = "";
//  $database = "db1";

//  $connection = mysqli_connect($host, $user, $pass, $database);
//  if($connection) {
//     echo "Succesfully Connected";
//  }else{
//     die("Could not Connect");
//  }
//  //collct form data
//  $name = $_POST['name'];
//  $email = $_POST['email'];
//  $mark = $_POST['Mark'];

//  $sql = "INSERT INTO contact (name, email, Mark) VALUES('$name', '$email','$mark')";
//  if(mysqli_query($connection, $sql));{
//     echo "Rcord inserted";
//  }

//  mysqli_close($connection);

 class stdDatabase {
   private $host     = "localhost";
   private $username = "root";
   private $password = "";
   private $database = "student_database";
   private $conn;

   public function  __construct() {

      $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
   }

   public function newStudent($name,$email,$mark) {
      $sts = mysqli_query($this->conn,"INSERT INTO `contact` (`name`,`email`,`mark`) values ('$name','$email','$mark')");

      if($sts)
         return true;
      else
         return false;
   }

   public function editStudent($id,$name,$email,$mark) {
      $sts = mysqli_query($this->conn,"UPDATE `contact` SET `name`='$name', `email`='$email', `mark`='$mark' WHERE `id`='$id'");

      if($sts)
         return true;
      else
         return false;
   }   

   public function getAllStudents() { 

      $sql = "SELECT * FROM contact";
      $result = $this->conn->query($sql);
      return  $result;
   }

   public function getStudent($id) { 

      $sql = "SELECT name,email,mark FROM contact WHERE id='$id'";
      $result = $this->conn->query($sql);
      if($result) {
         $row = $result->fetch_assoc();
         return $row;
      }
      else
         return false;
   } 

   public function deleteStudent($id) { 

      $sql = "DELETE FROM contact WHERE id='$id'";
      $result = $this->conn->query($sql);
      if($result) {
         return true;
      }
      else
         return false;
   }      
}
