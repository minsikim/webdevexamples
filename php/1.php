<!-- if you input the following, it will print '1' in the browser -->
<!-- if '?id=1' is not in its place it will give error -->
<!-- localhost/php/1.php?id=1 -->
<!-- because now id is '1' -->

<!-- this is the basic form of $_GET var which is a special var that is pre-distinguished -->
<!-- it gets values as Strings which is again interpreted as HTML-->
<?php
  echo $_GET['id'];
 ?>
