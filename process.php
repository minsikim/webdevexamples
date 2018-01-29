<?php
echo $_POST['title'];
echo "</br>";
echo $_POST['author'];
echo "</br>";
echo $_POST['description'];
echo "</br>";

// sql query
  $conn = mysqli_connect("localhost","root","0531dmswl");
  mysqli_select_db($conn, 'salingerms');

  $sql = "INSERT INTO topic (title,description,author,created)
  VALUES('".$_POST['title']."','".$_POST['description']."','".$_POST['author']."',now())";

  echo $sql;

  $result = mysqli_query($conn, $sql);

  header("Location:http://localhost/index.php")
 ?>
