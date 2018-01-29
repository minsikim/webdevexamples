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
    </nav>
  </div>
  <div class="contents">
    <?php
    if(empty($_GET['id'])){
      echo "<p>Hello</p>";
    }
    else{
      echo file_get_contents("nav".$_GET['id'].".txt");
    }
     ?>
  </div>

</body>
</html>
