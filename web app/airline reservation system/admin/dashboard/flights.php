<?php session_start();
if (isset($_SESSION['uid'])) {
?>
    <?php

    $con = mysqli_connect("localhost:3307", "root", "", "airline_reservation");
    ?>

    <!DOCTYPE html>

    <html lang="en" dir="ltr">

    <head>

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
                                    Flights
                                </h4>



                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#flightaddModal">
                                    Add Flights
                                </button>


                                <?php



                                $query_run = mysqli_query($con, "select * from flight_list");
                                ?>
                                <table class="table table-dark table-hover">

                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Plan No.</th>
                                            <th scope="col">Airline Name</th>
                                            <th scope="col">Airport To Take</th>
                                            <th scope="col">Airport To Land</th>
                                            <th scope="col">Daparture Date/Time</th>
                                            <th scope="col">Arrival Date/Time</th>
                                            <th scope="col">Seats</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Date/Time</th>
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
                                                    <td><?php echo $row['plane_no']; ?></td>
                                                    <td><?php echo $row['airline_name']; ?></td>
                                                    <td><?php echo $row['airport_from']; ?></td>
                                                    <td><?php echo $row['airport_to']; ?></td>
                                                    <td><?php echo $row['departure_datetime']; ?></td>
                                                    <td><?php echo $row['arrival_datetime']; ?></td>
                                                    <td><?php echo $row['seats']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                    <td><?php echo $row['date_created']; ?></td>

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
                    <h5 class="modal-title" id="exampleModalLabel">Add Flight</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="">
                    <div class="modal-body">


                        <div class="form-group">
                            <label>Plane No</label>
                            <input type="text" name="planeno" class="form-control" placeholder="Plane No" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label>Airlines</label>
                                <select class="form-control" name="airlinename" required>
                                    <option selected disabled value="">Airline</option>
                                    <option>Air India</option>
                                    <option>Indigo</option>
                                </select>

                            </div>


                        </div>

                        <div class="form-group">
                            <label>Airport To Take</label>
                            <input type="text" name="att" class="form-control" placeholder="Airport To Take" required>
                        </div>


                        <div class="form-group">
                            <label>Airport To Land</label>
                            <input type="text" name="atl" class="form-control" placeholder="Airport To Land" required>
                        </div>


                        <div class="form-group">
                            <label>Arrival Date</label>
                            <input type="text" name="ad" id="ad" class="form-control" placeholder="Arrival Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">

                        </div>
                        <div class="form-group">
                            <label>Daparture Date</label>
                            <input type="text" name="dd" id="dd" class="form-control" placeholder="Daparture Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">
                        </div>

                        <div class="form-group">
                            <label>Seats</label>
                            <input name="seats" class="form-control" placeholder="Seats" required maxlength="3">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" placeholder="Price" required maxlength="6">
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" id="date1" name="date1" placeholder="Date" required>
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
                            <label>Plane No</label>
                            <input type="text" name="planeno" id="planeno" class="form-control" placeholder="Plane No" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label>Airlines</label>
                                <select class="form-control" name="airlinename" id="airlinename" required>
                                    <option selected disabled value="">Airline</option>
                                    <option>Air India</option>
                                    <option>Indigo</option>
                                </select>

                            </div>


                        </div>

                        <div class="form-group">
                            <label>Airport To Take</label>
                            <input type="text" name="att" id="att" class="form-control" placeholder="Airport To Take" required>
                        </div>


                        <div class="form-group">
                            <label>Airport To Land</label>
                            <input type="text" name="atl" id="atl" class="form-control" placeholder="Airport To Land" required>
                        </div>

                        <div class="form-group">
                            <label>Daparture Date</label>
                            <input type="text" name="dd2" id="dd2" class="form-control" placeholder="Daparture Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">
                        </div>

                        <div class="form-group">
                            <label>Arrival Date</label>
                            <input type="text" name="ad2" id="ad2" class="form-control" placeholder="Arrival Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">

                        </div>

                        <div class="form-group">
                            <label>Seats</label>
                            <input name="seats" class="form-control" id="seats" placeholder="Seats" required maxlength="3">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Price" required maxlength="6">
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" id="date2" name="date2" placeholder="Date" required>
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
        // seats
        $('#seats').keyup(function() {
            if ($(this).val() > 100) {
                alert("No seats valid above 100");
                $(this).val('100');
            }
        });

        // date
        $('#date2').val(new Date().toJSON().slice(0, 10));

        $(document).ready(function() {
            $('.editbtn').on('click', function() {
                $('#editmoadal').modal('show');


                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#planeno').val(data[1]);
                $('#airlinename').val(data[2]);
                $('#att').val(data[3]);
                $('#atl').val(data[4]);
                $('#dd2').val(data[5]);
                $('#ad2').val(data[6]);
                $('#seats').val(data[7]);
                $('#price').val(data[8]);
                $('#date').val(data[9]);



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




    </body>



    <!-- insert record -->

    <?php




    if (isset($_POST['insertdata'])) {

        $plane_no = $_POST['planeno'];
        $airline_nm = $_POST['airlinename'];
        $airport_tt = $_POST['att'];
        $airport_tl = $_POST['atl'];
        $departure_d = $_POST['dd'];
        $arrival_d = $_POST['ad'];
        $seats = $_POST['seats'];

        $price = $_POST['price'];
        $date1 = $_POST['date1'];




        $query = mysqli_query($con, "insert into flight_list(plane_no,airline_name,airport_from,airport_to,departure_datetime,arrival_datetime,seats,price,date_created)
            values('$plane_no','$airline_nm','$airport_tt','$airport_tl','$departure_d','$arrival_d','$seats','$price','$date1')");


        if ($query) {
            echo "<script>alert('Flight Added');</script>";
        } else {
            echo "<script>alert('Flight Not  Added');</script>";
        }
    }
    ?>


    <!-- edit record -->

    <?php

    if (isset($_POST['editdata'])) {
        $id = $_POST['update_id'];
        $plane_no = $_POST['planeno'];
        $airline_nm = $_POST['airlinename'];
        $airport_tt = $_POST['att'];
        $airport_tl = $_POST['atl'];
        $departure_d2 = $_POST['dd2'];
        $arrival_d2 = $_POST['ad2'];
        $seats = $_POST['seats'];
        $price = $_POST['price'];
        $date2 = $_POST['date2'];


        $u = mysqli_query($con, "update flight_list  set plane_no='$plane_no', airline_name='$airline_nm', airport_from='$airport_tt' ,airport_to='$airport_tl', departure_datetime='$departure_d2', arrival_datetime='$arrival_d2', seats='$seats', price='$price', date_created='$date2'
            where id='$id' ");


        if ($u) {
            echo "<script>alert('Flight detail updated');</script>";
        } else {
            echo "<script>alert('Flight detail not updated');</script>";
        }
    }
    ?>






    <!-- delete record -->




    <?php

    if (isset($_POST['deletedata'])) {
        $id = $_POST['delete_id'];


        $d = mysqli_query($con, "delete from flight_list where id='$id'");
    }
    ?><?php
    } else {
        header("location:../access.php");
    }
        ?>