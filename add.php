<?php
include('./dbconnect.php');

$id = $_GET['id'] ? $_GET['id'] : "";
if ($id) {
    $result = $obj->getProductbyID($id);
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <style>
        .form {
            width: 100%;
            background-color: #eeee;
            box-sizing: border-box;
            margin-top: 3%;
        }

        input {
            width: 97%;
            padding: 12px 20px;
            display: flex;
        }

        input[type="submit"] {
            background-color: green;
            color: white;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <form action="insert.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" class="form">
        <fieldset>
            <legend>Enter the Details:</legend>
            <input type="text" name="name" id="name" placeholder="name" value="<?php echo $row['name']; ?>"><br>
            <hr>
            <input type="text" name="email" placeholder="email" value="<?php echo $row['email']; ?>"><br>
            <hr>
            <input type="text" name="mobile" placeholder="number" value="<?php echo $row['mobile']; ?>"><br>
            <hr>
            <input type="file" name="image" id="image">
            <?php if ($id) { ?> <span>Previous Image is:</span> <img src="./images/<?php echo $row['image']; ?>"
                    alt="previous image" width="60px" height="60px"> <?php } ?>
            <hr>
            <input type="submit" value="submit">
        </fieldset>
    </form>
</body>

</html>