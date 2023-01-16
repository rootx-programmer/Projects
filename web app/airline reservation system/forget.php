<?php include('./admin/db_con.php'); ?>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-color: #142533;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 700px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, );
            border-radius: 1px;
            padding: 5vmin 5vmin 20vmin 10vmin;
            box-shadow: 5px 50px 50px rgba(0, 0, 0, 0.2);
            border-radius: 1px;


        }

        .login-box h2 {
            padding-bottom: 20px;
            color: skyblue;


        }

        .login-box h2 a {
            margin-left: 60%;
            color: skyblue;
            text-decoration: none;

        }

        .login-box .user-box {

            position: relative;
            padding-top: 5px;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }


        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }

        .login-box .fs {

            margin-top: 25px;
            margin-left: 20%;
            padding: 10px;
        }

        .login-box .fs a {
            text-decoration: none;
        }
    </style>


</head>
<form class="row g-3 needs-validation" novalidate method="POST">

    <div class="login-box">
        <h2 class="l">Change Password</h2>

        <div class="user-box">
            <input type="email" name="email" class="form-control" id="email" required>
            <label for="email" class="form-label">Email</label>
            <div class="invalid-feedback">
                Please Enter a valid Email
            </div>
        </div>
        <div class="user-box">

            <input required type="text" name="phonenumber" id="phone" class="form-control" maxlength="15" onkeyup="validatephone(this);" />
            <label for="phonenumber"><span class="req"> </span> Phone Number</label>
            <div class="invalid-feedback">
                Please Enter a Phone Number
            </div>
        </div>
        <div class="user-box">
            <input type="text" class="form-control" name="dob" required onfocus="this.type='date'" onblur="if(this.value==='')this.type='text'" />
            <label class="form-label" for="text">Birth Date</label>
            <div class="invalid-feedback">
                Please Enter a Birth Date
            </div>
            <div class="user-box">
                <input type="password" name="pass" class="form-control" id="password" required>
                <label for="password" class="form-label">Password</label>
                <div class="invalid-feedback">
                    Please Enter a valid Password
                </div>
            </div>
            <div class="user-box">
                <input type="password" name="cpass" class="form-control" id="confirm_password" required>
                <label for="password" class="form-label">Confirm Password</label>
                <div class="invalid-feedback">
                    Password Do Not Match
                </div>
            </div>








            <div class="col-12">
                <button class="btn btn-outline-primary" name="save" type="submit">Save</button>
            </div>



        </div>



</form>

<?php


if (isset($_POST['save'])) {
    $em = $_POST['email'];
    $pwd = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $dob = $_POST['dob'];
    $mo = $_POST['phonenumber'];


    $s = mysqli_query($con, "select * from s_user where email='$em' and password='$pwd' and cpass='$cpass' and mno='$mo' and dob='$dob' ");


    if ($s) {
        $u = mysqli_query($con, "update S_user   set password ='$pwd',c_password='$cpass'    where password and c_password ");
        echo "<script>alert('Password Update Successfully');</script>";
    } else {
        echo "<script>alert('Something went wrong please enter valid info or check again the field');</script>";
    }
}

?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

</html>