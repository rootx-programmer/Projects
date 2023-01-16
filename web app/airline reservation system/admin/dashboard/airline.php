<?php session_start();
if (isset($_SESSION['uid'])) {
?>
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
                <div class="card">


                    <div class="container-fluid">

                        <div class="col-lg-12">
                            <div class="row">
                                <!-- FORM Panel -->
                                <div class="col-md-5">
                                    <form action="" id="manage-airlines" method="POST" enctype="multipart/form-data">
                                        <div class="card">
                                            <div class="card-header">
                                                Airlines Form
                                            </div>
                                            <div class="card-body">
                                                <input type="hidden" name="id">
                                                <div class="form-group">
                                                    <label class="control-label">Airlines</label>
                                                    <textarea id="" cols="30" rows="2" name="pnm" class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">Logo</label>
                                                    <input type="file" class="form-control" name="pimg">
                                                </div>
                                                <div class="form-group">
                                                    <img src="" alt="" id="cimg">
                                                </div>


                                            </div>

                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-sm btn-primary col-sm-3 offset-md-3" name="sb"> Save</button>
                                                        <button class="btn btn-sm btn-primary col-sm-3" type="cancel"> Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="card-body">



                                    <?php



                                    $query_run = mysqli_query($con, "select * from airlines_list");
                                    ?>
                                    <table class="table table-dark table-hover">

                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Airline Name</th>
                                                <th scope="col">Image</th>

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
                                                        <td><?php echo $row['airlines']; ?></td>
                                                        <td><?php echo "<img src='{$row['logo_path']}' width=250 height=250>"; ?></td>




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
                </div>
            </div>


        </section>

        <script src="script.js"></script>

    </body>

    </html>






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

                        <h6>Do you want to delete airline detail..?</h6>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" name="deletedata" class="btn btn-primary">Yes !! Delete it</button>
                    </div>
                </form>



            </div>
        </div>
    </div>

    <?php




    if (isset($_POST['sb'])) {
        $pnm = $_POST['pnm'];
        $pi = "photos/" . $_FILES['pimg']['name'];
        move_uploaded_file($_FILES['pimg']['tmp_name'], $pi);

        mysqli_query($con, "insert into airlines_list (airlines,logo_path) values('$pnm','$pi')");
        echo "<script>alert('Airline Added');</script>";
    }





    ?>


    <!-- delete record -->




    <?php

    if (isset($_POST['deletedata'])) {
        $id = $_POST['delete_id'];


        $d = mysqli_query($con, "delete from airlines_list where id='$id'");
    }
    ?>





    <!-- for delete record -->

    <script type="" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    </html><?php
        } else {
            header("location:../access.php");
        }
            ?>