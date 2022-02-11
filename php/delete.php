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
     
      $sql = "DELETE FROM `people` WHERE `PeopleID` = '{$PeopleID}'"; 

      
      if ($result = $mysqli->query($sql)) {
        if($mysqli->affected_rows==0){
            echo "<h1>";
            echo "No data found!";
            echo "</h1>";
        }
        else{
            echo "<h1>";
            echo "Sucessfully deleted the data!";
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
