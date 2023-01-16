<?php session_start();
if (isset($_SESSION['uid'])) {
?>
    <?php

    $con = mysqli_connect("localhost:3307", "root", "", "airline_reservation");
    ?>
    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <head>

        <head>
            <meta charset="UTF-8">
            <title> Dashboard</title>
            <link rel="stylesheet" href="./css/d_style.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


            <style>
                td {
                    vertical-align: middle !important;
                }

                td p {
                    margin: unset;
                }

                img {
                    max-width: 100px;
                    max-height: 150px;
                }
            </style>

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

                    <a type="button" class="lo" href="../index.php"><i class="fas fa-sign-out-alt"></i></a>
                    <?php
                    if (isset($_POST['lo'])) {
                        session_destroy();
                    }

                    ?>
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
                                <h4>
                                    Airports
                                </h4>



                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flightaddModal">
                                    Add Airport
                                </button>


                                <?php



                                $query_run = mysqli_query($con, "select * from airport_list");
                                ?>
                                <table class="table table-dark table-hover">

                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Airport name</th>
                                            <th scope="col">Location</th>

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
                                                    <td><?php echo $row['airport']; ?></td>
                                                    <td><?php echo $row['location']; ?></td>

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
                    <h5 class="modal-title" id="exampleModalLabel">Add Airport</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">


                        <div class="form-group">
                            <label>Airport name</label>
                            <input type="text" name="an1" id="an1" class="form-control" placeholder="Airport name" required>
                        </div>

                        <div class="form-group">
                            <label>location</label>
                            <input type="text" name="lc1" id="lc1" class="form-control" placeholder="location" required>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Flight</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Airport name</label>
                            <input type="text" name="an" id="an" class="form-control" placeholder="Airport" required>
                        </div>
                        <div class="form-group">
                            <label>location</label>
                            <input type="text" name="lc" id="lc" class="form-control" placeholder="location" required>
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

                        <h6>Do you want to delete flight detail..?</h6>


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
                $('#an').val(data[1]);
                $('#lc').val(data[2]);


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
    </script>







    <!-- insert record -->

    <?php



    if (isset($_POST['insertdata'])) {

        $airportnm = $_POST['an1'];
        $location = $_POST['lc1'];




        $query = mysqli_query($con, "insert into airport_list(airport,location)
        values('$airportnm','$location')");


        if ($query) {
            echo "<script>alert('Airport Added');</script>";
        } else {
            echo "<script>alert('Airport Not  Added');</script>";
        }
    }
    ?>


    <!-- edit record -->

    <?php

    if (isset($_POST['editdata'])) {
        $id = $_POST['update_id'];
        $airportnm = $_POST['an'];
        $location = $_POST['lc'];



        $u = mysqli_query($con, "update airport_list  set airport='$airportnm', location='$location'
         where id='$id' ");


        if ($u) {
            echo "<script>alert('Airport detail updated');</script>";
        } else {
            echo "<script>alert('Airport detail not updated');</script>";
        }
    }
    ?>






    <!-- delete record -->




    <?php

    if (isset($_POST['deletedata'])) {
        $id = $_POST['delete_id'];


        $d = mysqli_query($con, "delete from airport_list where id='$id'");
        if ($d) {
            echo "<script>Record deleted</script";
        } else {
            echo "<script>Record not deleted</script";
        }
    }
    ?><?php
    } else {
        header("location:../access.php");
    }
        ?>