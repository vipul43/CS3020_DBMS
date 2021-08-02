<?php
$username = "root";
$password = "password";
$database = "University";
$table = "department";

try {
  $mysqli = new mysqli("localhost", $username, $password, $database);
  echo "<h2>LOW BUDGET DEPARTMENT</h2><ol>";
  foreach($mysqli->query("SELECT dept_name FROM $table WHERE budget < 85000") as $row) {
    echo "<ul>" . $row['dept_name'] . "</ul>";
  }
  echo "</ol>";
} catch (mysqli_sql_exception $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}