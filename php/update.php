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

    
      $sql = "UPDATE `people` SET `FName` = '{$FName}',`LName` = '{$LName}',`Phone` = '{$Phone}',`Email` = '{$Email}' WHERE `PeopleID` = '{$PeopleID}'";

      
      if ($result = $mysqli->query($sql)) {
        if($mysqli->affected_rows==0){
            echo "<h1>";
            echo "No data found!";
            echo "</h1>";
        }
        else{
            echo "<h1>";
            echo "Sucessfully updated the data!";
            echo "</h1>";
        }
      }
      else{
        echo "<h1>";
        echo $mysqli->error;
        echo "</h1>";
      }

    }





?>
