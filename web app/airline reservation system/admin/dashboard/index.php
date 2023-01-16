<?php session_start();
if (isset($_SESSION['uid'])) {
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

                    <a class="lo" href="../index.php"><i class="fas fa-sign-out-alt"></i></a>
                    <?php
                    if (isset($_POST['lo'])) {
                        session_destroy();
                    }

                    ?>
                </li>
            </ul>
        </div>
        <section class="home-section">
            <div class="text">Dashboard

                <h4>
                    Hello....! Welcome Admin
                </h4>
            </div>


        </section>

        <script src="script.js"></script>

    </body>

    </html>
<?php
} else {
    header("location:../access.php");
}
?>