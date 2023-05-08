<?php
include('./dbconnect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $obj->delete($id);
    header('location:index.php');
}
?>