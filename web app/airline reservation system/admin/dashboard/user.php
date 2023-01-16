<?php

$con = mysqli_connect("localhost:3307", "root", "", "airline_reservation");
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="./css/d_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />


</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='fa fa-plane icon'></i>
            <div class="logo_name">Dashboard</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>

        <ul class="nav-list">

            <li>
                <a href="index.php">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="home.php">
                    <i class='fa fa-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="booked_flights.php">
                    <i class='fa fa-book'></i>
                    <span class="links_name">Booked Flights</span>
                </a>
                <span class="tooltip">Booked Flights</span>
            </li>
            <li>
                <a href="flights.php">
                    <i class='fa fa-plane-departure'></i>
                    <span class="links_name">Flights</span>
                </a>
                <span class="tooltip">Flights</span>
            </li>
            <li>
                <a href="airline.php">
                    <i class='fa fa-building'></i>
                    <span class="links_name">Airlines</span>
                </a>
                <span class="tooltip">Airlines</span>
            </li>
            <li>
                <a href="airport.php">
                    <i class='fa fa-map-marked-alt'></i>
                    <span class="links_name">Airport</span>
                </a>
                <span class="tooltip">Airport</span>
            </li>
            <li>
                <a href="user.php">
                    <i class='fa fa-users'></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>

            <li class="profile">

                <a href="../index.php"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>


        <div>

            <form method="POST">






                <div class="container">
                    <div class="jumbotron">
                        <div class="card">
                            <h2>
                                Users
                            </h2>



                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flightaddModal">
                                Add User
                            </button>


                            <?php



                            $query_run = mysqli_query($con, "select * from s_user");
                            ?>
                            <table class="table table-dark table-hover">

                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">User Name</th>

                                        <th scope="col">User Email</th>
                                        <th scope="col">Action</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>

                                <?php

                                if ($query_run) {
                                    foreach ($query_run as $row) {
                                ?>
                                        <tbody>
                                            <tr>

                                                <td><?php echo $row['id']; ?></td>

                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td hidden><?php echo $row['password']; ?></td>
                                                <td hidden><?php echo $row['c_password']; ?></td>


                                                <td><button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="#editmodal">
                                                        Edit

                                                    </button>
                                                </td>

                                                <td><button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#deletemodal">
                                                        Delete

                                                    </button>

                                                </td>

                                            </tr>







                                        </tbody>
                                <?php
                                    }
                                } else {

                                    echo "no record found";
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </section>

    <script src="script.js"></script>

</body>

</html>

<!-- insert record -->
<div class="modal fade" id="flightaddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="">
                <div class="modal-body">

                    <h6>User Name</h6>
                    <br>
                    <div class="form-group">

                        <label>User First Name</label>
                        <input type="text" name="ufn" id="ufn" class="form-control" placeholder="User First Name" required>



                        <label>User Last Name</label>
                        <input type="text" name="uln" id="uln" class="form-control" placeholder="User Last Name" required>
                    </div>

                    <div class="form-group">
                        <label>User Email</label>
                        <input type="text" name="ue" id="ue" class="form-control" placeholder="User Email" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>

                        <input type="password" name="pass" class="form-control" id="password" placeholder="Password " required maxlength="10" required>
                    </div>
                    <div class="invalid-feedback">
                        Password Do Not Match
                    </div>

                    <div class=" form-group">
                        <label>Confirm Password</label>
                        <div class="invalid-feedback">
                            Password Do Not Match
                        </div>

                        <input type="password" name="cpass" class="form-control" id="confirm_password" placeholder="Confrim Password" required maxlength="10">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="insertdata" class="btn btn-primary">Save</button>
                </div>
            </form>



        </div>
    </div>
</div>



<!-- edit record -->

<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="">
                <div class="modal-body">

                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <label>User First Name</label>
                        <input type="text" name="ufn2" id="ufn2" class="form-control" placeholder="User First Name" required>



                        <label>User Last Name</label>
                        <input type="text" name="uln2" id="uln2" class="form-control" placeholder="User Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>User Email</label>
                        <input type="text" name="ue2" id="ue2" class="form-control" placeholder="User Email" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>

                        <input type="password" name="pass2" class="form-control" id="password2" placeholder="Password " required maxlength="10" required>
                        <div class="invalid-feedback">
                            Password Do Not Match
                        </div>
                    </div>

                    <div class=" form-group">
                        <label>Confirm Password</label>
                        <div class="invalid-feedback">
                            Password Do Not Match
                        </div>

                        <input type="password" name="cpass2" class="form-control" id="confirm_password2" placeholder="Confrim Password" required maxlength="10">
                    </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="editdata" class="btn btn-primary">Save</button>
                </div>
            </form>



        </div>
    </div>
</div>





<!-- delete record -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="">
                <div class="modal-body">

                    <input type="hidden" name="delete_id" id="delete_id">

                    <h6>Do you want to delete user detail..?</h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    <button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete it</button>
                </div>
            </form>



        </div>
    </div>
</div>
<script type="" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('#date1').val(new Date().toJSON().slice(0, 10));
    //password & cpassword

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


<!-- for edit record-->

<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {
            $('#editmoadal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#ufn2').val(data[1]);
            $('#uln2').val(data[2]);
            $('#ue2').val(data[3]);
            $('#password2').val(data[4]);
            $('#confirm_password2').val(data[5]);



        });
    });
</script>




<!-- for delete record -->
<script>
    $(document).ready(function() {
        $('.deletebtn').on('click', function() {
            $('#deletemoadal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);




        });
    });
    //password & cpassword
    // Example starter JavaScript for disabling form submissions if there are invalid fields

    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        var password = document.getElementById("password2"),
            confirm_password = document.getElementById("confirm_password2");

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





<!-- insert record -->

<?php



if (isset($_POST['insertdata'])) {

    $userfnm = $_POST['ufn'];
    $userlnm = $_POST['uln'];
    $userem = $_POST['ue'];
    $userp = $_POST['pass'];
    $usercp = $_POST['cpass'];



    $query = mysqli_query($con, "insert into s_user(f_name,l_name,email,password,c_password)
        values('$userfnm','$userlnm','$userem','$userp','$usercp')");


    if ($query) {
        echo "<script>alert('User Added');</script>";
    } else {
        echo "<script>alert('User Not  Added');</script>";
    }
}
?>


<!-- edit record -->

<?php

if (isset($_POST['editdata'])) {
    $id = $_POST['update_id'];
    $userfnm2 = $_POST['ufn2'];
    $userlnm2 = $_POST['uln2'];
    $userem2 = $_POST['ue2'];
    $userp2 = $_POST['pass2'];
    $usercp2 = $_POST['cpass2'];


    $u = mysqli_query($con, "update s_user  set f_name='$userfnm2', l_name='$userlnm2',email='$userem2',password='$userp2',c_password='$usercp2'
         where id='$id' ");


    if ($u) {
        echo "<script>alert('User detail updated');</script>";
    } else {
        echo "<script>alert('User detail not updated');</script>";
    }
}
?>






<!-- delete record -->




<?php

if (isset($_POST['deletedata'])) {
    $id = $_POST['delete_id'];


    $d = mysqli_query($con, "delete from s_user where id='$id'");
    if ($d) {
        echo "<script>User deleted</script";
    } else {
        echo "<script>User not deleted</script";
    }
}
?>