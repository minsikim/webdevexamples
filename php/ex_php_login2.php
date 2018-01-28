<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8" />
<title></title>
</head>

<body>
<!-- you must run php on a server(ex: localhost) or
else it will not know how to run php code -->
<?php
  $password = $_GET["password"];
  if($password=="1234"){
    echo "hello";
  }
  else{
    echo "password is wrong";
  }
?>

</body>
</html>
