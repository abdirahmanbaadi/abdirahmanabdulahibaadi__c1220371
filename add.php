<?php
$conn = mysqli_connect("localhost","root","","baadi_1");

if(isset($_POST['submit'])){
    mysqli_query($conn,"INSERT INTO student
    (name,email,phone,address,faculty,class)
    VALUES
    ('$_POST[name]','$_POST[email]','$_POST[phone]',
     '$_POST[address]','$_POST[faculty]','$_POST[class]')");

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4>Add Student</h4>

    <form method="POST">
        <form method="POST">

    <label>Name</label>
    <input type="text" name="name" class="form-control mb-2" required
           pattern="[A-Za-z ]+" title="xarfo kaliya gali maha number">

    <label>Phone</label>
    <input type="text" name="phone" class="form-control mb-2" required
           pattern="[0-9]+" title="number kaliya gali maha xarfo">

    <label>Email</label>
    <input type="email" name="email" class="form-control mb-2" required>

    <label>Address</label>
    <input type="text" name="address" class="form-control mb-2"
           pattern="[A-Za-z0-9 ]+" title="Fadlan gali address sax ah">

    <label>Faculty</label>
    <input type="text" name="faculty" class="form-control mb-2" required
           pattern="[A-Za-z ]+" title="xarfo kaliya gali maha number">

    <label>Class</label>
    <input type="text" name="class" class="form-control mb-2" required
           pattern="[A-Za-z0-9 ]+" title="gali magaca classka">

    <button type="submit" name="submit" class="btn btn-primary mt-2">Save</button>
</form>

    </form>
</div>

</body>
</html>
