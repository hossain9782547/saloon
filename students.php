<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<t, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('menu.php'); ?>

<a href="student_add.php">Add Student</a><br>
    <table border="1">
        <tr>
            <th colspan="4">All Students</th>
        </tr>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Program</td>
            <td>Action</td>
        </tr>

        <?php
            include("db_connection.php");
            $q = "SELECT * FROM students";
            $result = mysqli_query($connection, $q);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row["sid"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["program"] ?></td>
                <td>
                    <a href="student_edit.php?sid=<?php echo $row["sid"] ?>">Edit</a>
                    <a href="student_delete.php?sid=<?php echo $row["sid"] ?>">Delete</a>
                </td> 
            </tr>
            <?php
            }
        ?>

    </table>
</body>
</html>