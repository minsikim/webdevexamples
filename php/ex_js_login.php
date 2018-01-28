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

?>
<script>
  password = prompt("비밀번호");
  if(password=="1234"){
    document.write("hello");
  }
  else{
    password = prompt("일치하지 않습니다.\n다시 비밀번호를 입력하세요");
    document.write("hello");
  }
</script>

</body>
</html>
