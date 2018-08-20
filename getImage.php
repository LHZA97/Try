<?php
  include ('db.php');
  
  $id = $_GET['ID'];
  // do some validation here to ensure id is safe

  $link = mysql_connect("localhost", "root", "1234");
  mysql_select_db("BrowniesDB");
  $sql = "SELECT Image FROM Brownies WHERE ID=$id";
  $result = mysql_query("$sql");
  $row = mysql_fetch_assoc($result);
  mysql_close($link);

  header("Content-type: image/jpeg");
  echo $row['Image'];
?>