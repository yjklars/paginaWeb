<?php
session_start();
session_unset();
session_destroy();

if(isset($_SERVER['HTTP_REFERER'])){
    $url=$_SERVER['HTTP_REFERER'];
}
else{
    $url="IndexPrueba.php";
}

header("Location: $url");
exit();
?>