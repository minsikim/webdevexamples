<?php
  $conn = mysqli_connect("localhost","root","0531dmswl");
  mysqli_select_db($conn, 'salingerms');
  $result = mysqli_query($conn, 'SELECT * from topic');
  // the condition below returns NULL when row is empty,
  // and NULL is false in php language
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8" />
  <link rel="stylesheet" href="/css/style.css">
  <title>Salinger.MS</title>
</head>

<body>
  <div id="top" align="center">
  	<header>
      <a href="/index.php"><img src="/img/main.png" width=150px/></a>
  		<h1>Salinger.MS</h1>
  	</header>
    <nav>
      <?php
        echo file_get_contents("cat.txt");
       ?>
       <a id="add" href="http://localhost/write.php"><cat>+</cat></a>
    </nav>
  </div>
  <div class="contents">
    <?php
    if(empty($_GET['id'])){
      echo "<p>Hello</p>";
    }
    else{
      echo file_get_contents("nav".$_GET['id'].".txt");
      echo '</br>';
    }
    while($row = mysqli_fetch_assoc($result)){
      echo $row['id'];
      echo $row['title'];
      echo $row['author'].'</br>';
    }
     ?>
  </div>

</body>
</html>
