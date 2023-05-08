<?php
include('./dbconnect.php');

$id = $_GET['id'] ? $_GET['id'] : "";


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$image_file = $_FILES["image"]["name"];

if (!isset($image_file)) {
    die('No file uploaded.');
}

// Move the temp image file to the images/ directory
move_uploaded_file(
    // Temp image location
    $_FILES['image']["tmp_name"],

    // New image location, __DIR__ is the location of the current PHP file
    __DIR__ . "/images/" . $image_file
);

if ($id) {
    $obj->update($id, $name, $email, $mobile,$image_file);
    header('location:index.php');
} else {
    $obj->add($name, $email, $mobile, $image_file);
    header('location:index.php');
}

?>