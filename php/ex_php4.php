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
  $list = array("one", "two", "three");
  echo $list[0]."</br>";
  echo $list[1]."</br>";
  echo $list[2]."</br>";
  echo count($list)."</br>";
  $i = 0;
  while($i<count($list)){
    echo $list[$i]."<br/>";
    $i++;
  }
  echo count($list);
?>
<h1>JavaScript</h1>
<script>
  list = new Array("one", "two", "three");
  document.write(list[0]+"</br>");
  document.write(list[1]+"</br>");
  document.write(list[2]+"</br>");
  document.write(list.length+"</br>");
  i = 0;
  while(i<list.length){
    document.write(list[i]+"</br>");
    i++;
  }
    document.write(list.length+"</br>");
</script>

</body>
</html>
