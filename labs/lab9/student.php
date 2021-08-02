<?php
$username = "root";
$password = "Saivipul@1729";
$database = "University";
$table = "student";

try {
  $mysqli = new mysqli("localhost", $username, $password, $database);
  echo "<h2>STUDENT</h2><ol>";
  $query = "SELECT * FROM student";
  $result = $mysqli->query($query);
  echo '<table border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Monospace">ID</font> </td> 
          <td> <font face="Monospace">name</font> </td> 
          <td> <font face="Monospace">dept_name</font> </td> 
          <td> <font face="Monospace">tot_cred</font> </td> 
      </tr>';
  while ($row = $result->fetch_assoc()) {
        $field1name = $row["ID"];
        $field2name = $row["name"];
        $field3name = $row["dept_name"];
        $field4name = $row["tot_cred"];

        echo '<tr> 
                  <td> <font face="Monospace">'.$field1name.'</td> 
                  <td> <font face="Monospace">'.$field2name.'</td> 
                  <td> <font face="Monospace">'.$field3name.'</td> 
                  <td> <font face="Monospace">'.$field4name.'</td> 
              </tr>';
  }
  $result->free();
  echo "</ol>";
} catch (mysqli_sql_exception $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}