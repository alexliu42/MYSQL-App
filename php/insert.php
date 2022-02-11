<?php
// Define the constants for host, dbname, username and password
define('DBHOST', 'localhost');
define('DBNAME', 'groupprojectcpsc2221');
define('DBUSER', 'root');
define('DBPASS', '');


    $mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

  
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $PeopleID = $_POST['PeopleID'];
      $FName = $_POST['FName'];
      $LName = $_POST['LName'];
      $Phone = $_POST['Phone'];
      $Email = $_POST['Email'];

      $sql = "INSERT INTO `people` (`PeopleID`,`FName`,`LName`,`Phone`,`Email`) VALUES ('{$PeopleID}','{$FName}','{$LName}','{$Phone}','{$Email}')";

      
      if ($result = $mysqli->query($sql)) {
        echo "<h1>";
        echo "Sucessfully inserted the data!";
        echo "</h1>";
      }
      else{
        echo "<h1>";
        echo $mysqli->error;
        echo "</h1>";
      }

    }





?>
