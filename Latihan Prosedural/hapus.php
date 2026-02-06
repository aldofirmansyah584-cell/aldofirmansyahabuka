<?php 
include 'fungsi.php';

if (isset($_GET['id'])) {
    hapusMahasiswa($_GET['id']);
    header("Location: index.php");
} else {
    header("Location: index.php");
}
?>