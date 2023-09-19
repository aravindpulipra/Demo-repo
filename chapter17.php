<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      class Employee{
            public $name;
            public $salary;
            public function __construct($name, $salary) {
                $this->name = $name;
                $this->salary = $salary;
                
            }
            public function show_details(){
                echo "Name=".$this->name;
                echo "<br>";
                echo "Salary=".$this->salary;
                echo "<br>";
            }
      }
      $e1=new Employee("Aravind", 10000);
      
      
      $e1->show_details();
      $e2=new Employee("Anup" ,20000);
      
      
      $e2->show_details();
    ?>
    
    
</body>
</html>