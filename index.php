<?php
$conn = mysqli_connect("localhost","root","","baadi_1");
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
<head>
<title>Student CRUD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="mb-3">Student List</h4>
    <a href="add.php" class="btn btn-sm btn-primary mb-2">Add Student</a>

    <table class="table table-bordered table-sm">
        <tr class="bg-light">
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th>
            <th>Address</th><th>Faculty</th><th>Class</th><th>Action</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['address'] ?></td>
            <td><?= $row['faculty'] ?></td>
            <td><?= $row['class'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" 
                   onclick="return confirm('Delete?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>
