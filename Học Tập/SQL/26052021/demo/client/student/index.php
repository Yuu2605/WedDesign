<?php

require('../config/database.php');

//Bước 2: Viết câu sql
$sql = "SELECT * FROM students";

$result = $conn->query($sql);

$students = $result->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($students);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <a href="create.php">Create new student</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Student Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Dob</th>
            <th></th>
        </tr>

        <?php
        if (count($students) > 0) :
            foreach ($students as $student) : ?>
                <tr>
                    <td><?php echo $student['id'] ?></td>
                    <td><?php echo $student['student_id'] ?></td>
                    <td><?php echo $student['first_name'] ?></td>
                    <td><?php echo $student['last_name'] ?></td>
                    <td><?php echo $student['email'] ?></td>
                    <td><?php echo $student['dob'] ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $student['id'] ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $student['id'] ?>" onclick="return confirm('Are you sure')">Delete</a>
                    </td>
                </tr>
            <?php endforeach;
        else :
            ?>
            <tr>
                <td colspan="6">No result</td>
            </tr>
        <?php endif; ?>
    </table>
</body>

</html>