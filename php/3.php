<?php
// this information is drawn from the URL after the '?',
// that is generated by 3.html GET method from the submit button
// if(!emtpy($_GET['title'])){
// echo $_GET['title'];
// echo "</br>";
// echo $_GET['description'];
// }
// this information is drawn from server
// that is sent by 3.html POST method from the submit button
    echo $_POST['title'];
    echo "</br>";
    echo $_POST['description'];
 ?>