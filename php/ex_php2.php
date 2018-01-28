<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf-8" />
<title></title>
</head>

<body>
<h1>php</h1>
<!-- you must run php on a server(ex: localhost) or
else it will not know how to run php code -->
<?php
  echo (10+10)."</br>";
  $name = "steve";
  echo "hello, ".$name."</br>";
  var_dump(1==2);
  echo "</br>";
  if(false){
    echo "it's true"."</br>";
  }
  else{
    echo "it's false"."</br>";
  }
?>
<h1>JavaScript</h1>
<script>
  document.write((10+10)+"</br>");
  name = "steve";
  document.write("hello, "+name+"</br>");
  document.write((1==2)+"</br>");
  if(false){
    document.write("it's true"+"</br>");
  }
  else{
    document.write("it's false"+"</br>");
  }
</script>

</body>
</html>
