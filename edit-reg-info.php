<?php

require_once 'vendor/autoload.php';

use App\classes\Registration;

$id=$_GET['id'];
$queryResult=Registration::getInfoBtId($id);
$regResult=mysqli_fetch_assoc($queryResult);

//echo '<pre>';
//print_r($regResult);

$message = ' ';
if (isset($_POST['btnUpdate'])) {
    $message = Registration::updateInfo($_POST);

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
        <div class="col-md-5 m-auto">
            <br/>
            <a href="registration.php" class="btn btn-outline-primary" style="alignment: center ">New Registration </a>
            <a href="reg-history.php" class="btn btn-outline-primary" style="align-content: center">View Registration
                Info</a>
            <!--            <h1 style="color: green;" id="">--><?php //echo $message ?><!--</h1>-->
            <?php
            if ($message==" "){

            }else {
                echo '<h1 style="color: green;" id="">';
                echo '<script type="text/javascript">alert("'.$message.'");</script>';
                echo '</h1>';
            }

            ?>

        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="col-md-12">
        <h1 class="btn-light" style="alignment: center ">Enter your valid information</h1>
    </div>
    <br/>
    <br/>
    <div class="col-md-12 btn-light m-auto">
        <br/>
        <form action="" method="post" id="registrationForm">
            <div class="col-md-10">
                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">First Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="first_name" class="form-control" id="firstName" value="<?php echo $regResult['first_name']?>"/>
                        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $regResult['id']?>"/>
                        <span id="firstNameError" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Last Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="last_name" class="form-control" id="lastName" value="<?php echo $regResult['last_name']?>"/>
                        <span id="lastNameError" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo $regResult['email']?>"/>
                        <span id="emailError" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="password"  value="<?php echo $regResult['password']?>"/>
                        <span id="passwordError" class="text-danger"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="confirm-password" class="form-control" id="confirmPassword" value="<?php echo $regResult['password']?>"/>
                        <span id="confirmPasswordError" class="text-danger"></span>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Phone no</label>
                    <div class="col-sm-8">
                        <input type="number" name="phone_number" class="form-control"id="phoneNo" value="<?php echo $regResult['phone_number']?>"/>
                        <span id="phoneNo" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Date of Birth</label>
                    <div class="col-sm-8">
                        <input type="date" name="date_of_birth" class="form-control" id="dateOfBirth" value="<?php echo $regResult['date_of_birth']?>"/>
                        <span id="DateOfBirth" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Gender</label>
                    <div class="col-sm-8">
                        <label><input type="radio" name="gender" value="male" id="gender" <?php echo ($regResult['gender']=='male')?'checked':'' ?>> Male</label>
                        <label><input type="radio" name="gender" value="female" <?php echo ($regResult['gender']=='female')?'checked':'' ?>> Female</label>
                        <span id="genderError" class="text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-4 font-weight-bold">Address</label>
                    <div class="col-sm-8">
                        <textarea name="Address" rows="5" class="form-control"> <?php echo $regResult['Address']?></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-form-label col-sm-5"></label>
                    <div class="col-sm-3">
                        <input class="btn btn-danger btn-block" type="reset" name="btnReset">
                    </div>
                    <div class=" col-sm-3">
                        <input class="btn btn-success btn-block" type="SUBMIT" id="btn" value="Update" name="btnUpdate">
                    </div>
                </div>
        </form>
    </div>
</div>


<script src="assets/js/jquery-3.2.1.js"></script>
<script src="assets/js/proper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/my-script.js"></script>
</body>
</html>