<?php session_start();
echo $_SESSION['username']; ?>
<!DOCTYPE html>

<html>

<head>

    <title>AIRLINE RESERVATION</title>
    <!-----bootstrap cdn--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


</head>


<body>

    <header>
        <link rel="stylesheet" href="./css/style.css">


        <div class="container-fluid p-0 ">
            <nav class="navbar navbar-expand-lg bg-dark fixed-top ">
                <a class="navbar-brand" href="#">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    Airline Reservation</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#avflights">Available Flights</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#book_flights">Book Flights</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="yfd.php">Your Flight Details </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#ftr">About </a>
                        </li>
                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <li class="nav-item">
                            <button type="button" class="btn btn-outline-primary" name="logout" id="hl"><i class="fas fa-user"></i>&nbsp;Log out</button>


                        </li>

                    </ul>
                </div>
            </nav>


            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="./photos/1.jpg" class="d-block w-100" style="height:570px;width:1550px;">
                        <div class="carousel-caption d-none d-md-block">
                            <p><a href="#book_flights">
                                    <h5>Book Flights</h5>
                                </a></p>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./photos/5.jpg" class="d-block w-100" style="height:570px; width:1550px;">
                        <div class="carousel-caption d-none d-md-block">
                            <p><a href="#book_flights">
                                    <h5>Book Flights</h5>
                                </a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./photos/6.jpg" class="d-block w-100" style="height:570px;width:1550px;">
                        <div class="carousel-caption d-none d-md-block">

                            <p><a href="#book_flights">
                                    <h5>Book Flights</h5>
                                </a></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        </div>



        <script type="text/javascript">
            document.getElementById("hl").onclick = function() {
                location.href = "index.php";
            };
        </script>




    </header>
    <div>

        <?php include('book_flights.php'); ?>
    </div>

    <!----cdn---->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <!----cdn---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- CSS only -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-----jquery cdn---->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <div class="container">
        <div class="shadow-lg p-5 mb-5 bg-white rounded">
            <div id="avflights">
                <?php include('avflights.php');  ?>
            </div>


        </div>
    </div>


    <?php include('footer.php'); ?>

</body>

</html>

<?php

if (isset($_POST['logout'])) {
    session_destroy();
}

?>