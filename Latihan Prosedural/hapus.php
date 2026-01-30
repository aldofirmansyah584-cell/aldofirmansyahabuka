<?php 

include 'fungsi.php';
hapusMahasiswa($_GET['id']);
header("Location: index.php");

?>