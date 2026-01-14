<?php
$conn = mysqli_connect("localhost","root","","baadi_1");
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM student WHERE id=$id"));

if(isset($_POST['update'])){
    mysqli_query($conn,"UPDATE student SET
    name='$_POST[name]',
    email='$_POST[email]',
    phone='$_POST[phone]',
    address='$_POST[address]',
    faculty='$_POST[faculty]',
    class='$_POST[class]'
    WHERE id=$id");

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4>Edit Student</h4>

    <form method="POST">
        <input class="form-control mb-2" name="name" value="<?= $data['name'] ?>">
        <input class="form-control mb-2" name="email" value="<?= $data['email'] ?>">
        <input class="form-control mb-2" name="phone" value="<?= $data['phone'] ?>">
        <input class="form-control mb-2" name="address" value="<?= $data['address'] ?>">
        <input class="form-control mb-2" name="faculty" value="<?= $data['faculty'] ?>">
        <input class="form-control mb-3" name="class" value="<?= $data['class'] ?>">

        <button name="update" class="btn btn-primary btn-sm">Update</button>
        <a href="index.php" class="btn btn-secondary btn-sm">Back</a>
    </form>
</div>

</body>
</html>
