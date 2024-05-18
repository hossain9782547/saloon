<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('menu.php'); ?>

<form method="get" action="student_add_save.php">
    <table>
    <tr>
        <th colspan="2">Student Add</th>
    </tr>
    <tr>
        <td>ID</td>
        <td><input type="text" name="sid"></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><input type="text" name="fullName"></td>
    </tr>
    <tr>
        <td>Program</td>
        <td><input type="text" name="program"></td>
    </tr>
    <tr>
        <td><input type="submit" value="Save"></td>
        <td></td>
    </tr>
</table>
</form>
</body>
</html>