<?php include('./dbconnect.php');
$res = $obj->getdata();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudoop</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 3%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #04AA6D;
            color: white;
        }

        a{
            text-decoration: none;
        }

        .addbtn {
            display: flex;
            margin: 0 auto;
            background-color: #04AA6D;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;

        }

        .updatebtn {
            background-color: orange;
            color: black;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        .delbtn {
            background-color: red;
            color: white;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;

        }
    </style>
</head>

<body>
    <a href="add.php"><button class="addbtn">Add Entry</button></a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $res->fetch_assoc()) { ?>
                <tr>
                    <td>
                        <?php echo $row['name']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['mobile'] ?>
                    </td>
                    <td>
                        <img src="./images/<?php echo $row['image'] ?>" alt="image" width="100px" height="100px">
                    </td>
                    <td> <a href="add.php?id=<?php echo $row['id']; ?>"><button class="updatebtn">Update</button></a></td>
                    <td> <a href="delete.php?id=<?php echo $row['id']; ?>"> <button class="delbtn">Delete</button></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>