<?php // declare (strict_types=1);?> <!-- MUST BE IN THE FIRST LINE TO WORK -->
<!-- Check if proper variables are inserted wiht proper data types  -->
<!DOCTYPE html>
<?php //include('includes/newclass.inc.php');


include('includes/autoloader.inc.php');
 ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPOOP</title>
</head>
<body>
    
<form action="index.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
  <label for="designation">Designation:</label><br>
  <input type="text" id="designation" name="designation" value=""><br><br>


    

  <input type="text" id="drinking" name="drinking" value=""><br><br>
  <input type="submit" name="submit" value="Submit">
</form>
    
    <?php 
    
    $person = new Person;
    
    echo $person->fname;
    echo "<br>";
    $pet = new pet;
    echo $pet->owner();


if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])) { 

        $name=htmlspecialchars($_POST['fname']);
        $age=htmlspecialchars($_POST['age']);
        $designation=htmlspecialchars($_POST['designation']);
        $drink=htmlspecialchars($_POST['drinking']);

        $createNewPerson = new newPerson($name,$age,$designation);
        newPerson::setDrinkingAge($drink);
        //unset($createNewPerson); //for running deconstruct 
        echo "<br>Drinking Age is ".newPerson::$drinking_age." years old <br>"; // static is accessable anywhere and so is its method
        // $createNewPerson->setName($name,$age,$designation) ; //->wihtout constructor
        echo "<br>";
       
        echo $createNewPerson->name;
        echo $createNewPerson->age;
        echo $createNewPerson->designation;

    }

   
    ?>
     
    <!--  -->

</body>
</html>