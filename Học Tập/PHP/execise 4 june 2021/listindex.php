<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/vendors/bootstrap/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Salary</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                </tr>
            </thead>

        <?php 
            if (count($users) > 0):
                foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['Name']; ?></td>
                        <td><?php echo $user['Description']; ?></td>
                        <td><?php echo $user['Salary']; ?></td>
                        <td><?php echo $user['Gender']; ?></td>
                        <td><?php echo $user['Birthday']; ?></td>
                        <td>
                            <a href="?controller=user&action=view&id=<?php echo $user['id'] ?>">View</a>
                            <a href="?controller=user&action=edit&id=<?php echo $user['id'] ?>">Edit</a>
                            <a href="?controller=user&action=delete&id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;
            endif;
        ?>

        </table>
    </div>
</body>
</html>