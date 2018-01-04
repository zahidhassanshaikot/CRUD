<?php
require_once 'vendor/autoload.php';
use App\classes\Registration;

$message = '';
$queryResult = Registration::getAllInfo();

if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $message=Registration::DeleteInfo($id);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 m-auto">
		<br/>
            <a href="registration.php" class="btn btn-outline-primary" style="alignment: center ">New Registration </a>
            <a href="reg-history.php"  class="btn btn-outline-primary" style="align-content: center">View Registration Info</a>
            <h1 style="color: green"><?php  echo $message ?></h1>
        </div>
    </div>
</div>

<hr/>


<div class="container col-md-11" >
<table class="table table-inverse">

    <tr class="btn-dark text-md-center">
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile No</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Edit/Delete</th>
    </tr>

    <?php while ( $student = mysqli_fetch_assoc($queryResult)){ ?>

        <tr class="btn-light">
        <td><?php echo $student['id']; ?></td>
        <td><?php echo $student['first_name']; ?></td>
        <td><?php echo $student['last_name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><?php echo $student['phone_number']; ?></td>
        <td><?php echo $student['date_of_birth']; ?></td>
        <td><?php echo $student['gender']; ?></td>
        <td><?php echo $student['Address']; ?></td>
        <td>
            <a href="edit-reg-info.php?id=<?php echo $student['id']; ?>">Edit </a>||
            <a href="?delete=true&id=<?php echo $student['id']; ?>" onclick="return confirm('Are You Sure Delete this info...? ')">Delete</a>
        </td>


    </tr>
    <?php }?>

</table>

</div>

<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/proper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/my-script.js"></script>
</body>
</html>