<?php include('./admin/db_con.php');
session_start();

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./css/style.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

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
          <a class="nav-link" href="#yfd">Your Flight Details </a>
        </li>


        <li class="nav-item">
          <button type="button" class="btn btn-outline-primary" name="logout" id="hl"><i class="fas fa-user"></i>&nbsp;Log out</button>


        </li>

      </ul>
    </div>
  </nav>
</div>
<form method="POST">
  <div class="container" id="yfd">
    <div class="shadow-lg p-5 mb-5 bg-white rounded">

      <button class="btn btn-primary" name="yt" id="yt" type="submit"> Your Ticket</button>

      <button type="button" class="btn btn-danger deletebtn" name="cnl" data-bs-toggle="modal" data-bs-target="#deletemodal">
        Cancle Your Ticket



      </button>

      <head>
        <style>
          .box {
            position: absolute;
            top: calc(50% - 125px);
            top: -webkit-calc(50% - 125px);
            left: calc(50% - 300px);
            left: -webkit-calc(50% - 200px);
          }

          .ticket {
            width: 400px;
            height: 250px;
            background: #FFB300;
            border-radius: 3px;
            box-shadow: 0 0 20px #aaa;
            border-top: 1px solid #E89F3D;
            border-bottom: 1px solid #E89F3D;
          }

          .left {
            margin: 0;
            padding: 0;
            list-style: none;
            position: absolute;
            top: 0px;
            left: -5px;
          }

          .left li {
            width: 0px;
            height: 0px;
          }

          .left li:nth-child(-n+2) {
            margin-top: 8px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #FFB300;
          }

          .left li:nth-child(3),
          .left li:nth-child(6) {
            margin-top: 8px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #EEEEEE;
          }

          .left li:nth-child(4) {
            margin-top: 8px;
            margin-left: 2px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #EEEEEE;
          }

          .left li:nth-child(5) {
            margin-top: 8px;
            margin-left: -1px;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-right: 6px solid #EEEEEE;
          }

          .left li:nth-child(7),
          .left li:nth-child(9),
          .left li:nth-child(11),
          .left li:nth-child(12) {
            margin-top: 7px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #E5E5E5;
          }

          .left li:nth-child(8) {
            margin-top: 7px;
            margin-left: 2px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #E5E5E5;
          }

          .left li:nth-child(10) {
            margin-top: 7px;
            margin-left: 1px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #E5E5E5;
          }

          .left li:nth-child(13) {
            margin-top: 7px;
            margin-left: 2px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #FFB300;
          }

          .left li:nth-child(14) {
            margin-top: 7px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 5px solid #FFB300;
          }

          .right {
            margin: 0;
            padding: 0;
            list-style: none;
            position: absolute;
            top: 0px;
            right: -5px;
          }

          .right li:nth-child(-n+2) {
            margin-top: 8px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #FFB300;
          }

          .right li:nth-child(3),
          .right li:nth-child(4),
          .right li:nth-child(6) {
            margin-top: 8px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #EEEEEE;
          }

          .right li:nth-child(5) {
            margin-top: 8px;
            margin-left: -2px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #EEEEEE;
          }

          .right li:nth-child(8),
          .right li:nth-child(9),
          .right li:nth-child(11) {
            margin-top: 7px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #E5E5E5;
          }

          .right li:nth-child(7) {
            margin-top: 7px;
            margin-left: -3px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #E5E5E5;
          }

          .right li:nth-child(10) {
            margin-top: 7px;
            margin-left: -2px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #E5E5E5;
          }

          .right li:nth-child(12) {
            margin-top: 7px;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid #E5E5E5;
          }

          .right li:nth-child(13),
          .right li:nth-child(14) {
            margin-top: 7px;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-left: 5px solid #FFB300;
          }

          .ticket:after {
            content: '';
            position: absolute;
            left: 400px;
            top: 0px;
            width: 2px;
            height: 250px;
            box-shadow: inset 0 0 0 #FFB300,
              inset 0 -10px 0 #B56E0A,
              inset 0 -20px 0 #FFB300,
              inset 0 -30px 0 #B56E0A,
              inset 0 -40px 0 #FFB300,
              inset 0 -50px 0 #999999,
              inset 0 -60px 0 #E5E5E5,
              inset 0 -70px 0 #999999,
              inset 0 -80px 0 #E5E5E5,
              inset 0 -90px 0 #999999,
              inset 0 -100px 0 #E5E5E5,
              inset 0 -110px 0 #999999,
              inset 0 -120px 0 #E5E5E5,
              inset 0 -130px 0 #999999,
              inset 0 -140px 0 #E5E5E5,
              inset 0 -150px 0 #B0B0B0,
              inset 0 -160px 0 #EEEEEE,
              inset 0 -170px 0 #B0B0B0,
              inset 0 -180px 0 #EEEEEE,
              inset 0 -190px 0 #B0B0B0,
              inset 0 -200px 0 #EEEEEE,
              inset 0 -210px 0 #B0B0B0,
              inset 0 -220px 0 #FFB300,
              inset 0 -230px 0 #B56E0A,
              inset 0 -240px 0 #FFB300,
              inset 0 -250px 0 #B56E0A;
          }

          .ticket:before {
            content: '';
            position: absolute;
            z-index: 5;
            left: 400px;
            top: 0px;
            width: 1px;
            height: 250px;
            box-shadow: inset 0 0 0 #FFB300,
              inset 0 -10px 0 #F4D483,
              inset 0 -20px 0 #FFB300,
              inset 0 -30px 0 #F4D483,
              inset 0 -40px 0 #FFB300,
              inset 0 -50px 0 #FFFFFF,
              inset 0 -60px 0 #E5E5E5,
              inset 0 -70px 0 #FFFFFF,
              inset 0 -80px 0 #E5E5E5,
              inset 0 -90px 0 #FFFFFF,
              inset 0 -100px 0 #E5E5E5,
              inset 0 -110px 0 #FFFFFF,
              inset 0 -120px 0 #E5E5E5,
              inset 0 -130px 0 #FFFFFF,
              inset 0 -140px 0 #E5E5E5,
              inset 0 -150px 0 #FFFFFF,
              inset 0 -160px 0 #EEEEEE,
              inset 0 -170px 0 #FFFFFF,
              inset 0 -180px 0 #EEEEEE,
              inset 0 -190px 0 #FFFFFF,
              inset 0 -200px 0 #EEEEEE,
              inset 0 -210px 0 #FFFFFF,
              inset 0 -220px 0 #FFB300,
              inset 0 -230px 0 #F4D483,
              inset 0 -240px 0 #FFB300,
              inset 0 -250px 0 #F4D483;
          }

          .content {
            position: absolute;
            top: 40px;
            width: 100%;
            height: 170px;
            background: #eee;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 20 px;

          }

          .jfk {}

          .airline {
            position: absolute;
            top: 10px;
            left: 10px;
            font-family: Arial;
            font-size: 20px;
            font-weight: bold;
            color: rgba(0, 0, 102, 1);
          }

          .boarding {
            position: absolute;
            top: 10px;
            left: 200px;
            font-family: Arial;
            font-size: 18px;
            color: rgba(255, 255, 255, 0.6);
          }


          .plane {
            position: absolute;
            left: 105px;
            top: 0px;
          }

          .sub-content {
            background: #e5e5e5;
            width: 100%;
            height: 100px;
            position: absolute;
            top: 70px;
          }

          .watermark {
            position: absolute;
            left: 10px;
            top: -10px;
            font-family: Arial;
            font-size: 110px;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.2);
          }

          .name {
            position: absolute;
            top: 10px;
            left: 10px;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 14px;
            color: #999;
          }

          .name span {
            color: #555;
            font-size: 17px;
          }

          .flight {
            position: absolute;
            top: 10px;
            left: 180px;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 14px;
            color: #999;
          }

          .flight span {
            color: #555;
            font-size: 17px;
          }

          .gate {
            position: absolute;
            top: 10px;
            left: 280px;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 14px;
            color: #999;
          }

          .gate span {
            color: #555;
            font-size: 17px;
          }


          .seat {
            position: absolute;
            top: 10px;
            left: 350px;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 14px;
            color: #999;
          }

          .seat span {
            color: #555;
            font-size: 17px;
          }

          .boardingtime {
            position: absolute;
            top: 60px;
            left: 10px;
            font-family: Arial Narrow, Arial;
            font-weight: bold;
            font-size: 14px;
            color: #999;
          }

          .boardingtime span {
            color: #555;
            font-size: 17px;
          }

          .barcode {
            position: absolute;
            left: 8px;
            bottom: 6px;
            height: 30px;
            width: 90px;
            background: #222;
            box-shadow: inset 0 1px 0 #FFB300, inset -2px 0 0 #FFB300,
              inset -4px 0 0 #222,
              inset -5px 0 0 #FFB300,
              inset -6px 0 0 #222,
              inset -9px 0 0 #FFB300,
              inset -12px 0 0 #222,
              inset -13px 0 0 #FFB300,
              inset -14px 0 0 #222,
              inset -15px 0 0 #FFB300,
              inset -16px 0 0 #222,
              inset -17px 0 0 #FFB300,
              inset -19px 0 0 #222,
              inset -20px 0 0 #FFB300,
              inset -23px 0 0 #222,
              inset -25px 0 0 #FFB300,
              inset -26px 0 0 #222,
              inset -26px 0 0 #FFB300,
              inset -27px 0 0 #222,
              inset -30px 0 0 #FFB300,
              inset -31px 0 0 #222,
              inset -33px 0 0 #FFB300,
              inset -35px 0 0 #222,
              inset -37px 0 0 #FFB300,
              inset -40px 0 0 #222,
              inset -43px 0 0 #FFB300,
              inset -44px 0 0 #222,
              inset -45px 0 0 #FFB300,
              inset -46px 0 0 #222,
              inset -48px 0 0 #FFB300,
              inset -49px 0 0 #222,
              inset -50px 0 0 #FFB300,
              inset -52px 0 0 #222,
              inset -54px 0 0 #FFB300,
              inset -55px 0 0 #222,
              inset -57px 0 0 #FFB300,
              inset -59px 0 0 #222,
              inset -61px 0 0 #FFB300,
              inset -64px 0 0 #222,
              inset -66px 0 0 #FFB300,
              inset -67px 0 0 #222,
              inset -68px 0 0 #FFB300,
              inset -69px 0 0 #222,
              inset -71px 0 0 #FFB300,
              inset -72px 0 0 #222,
              inset -73px 0 0 #FFB300,
              inset -75px 0 0 #222,
              inset -77px 0 0 #FFB300,
              inset -80px 0 0 #222,
              inset -82px 0 0 #FFB300,
              inset -83px 0 0 #222,
              inset -84px 0 0 #FFB300,
              inset -86px 0 0 #222,
              inset -88px 0 0 #FFB300,
              inset -89px 0 0 #222,
              inset -90px 0 0 #FFB300;
          }

          .slip {
            left: 455px;
          }

          .nameslip {
            top: 60px;
            left: 410px;
          }

          .flightslip {
            left: 410px;
          }

          .seatslip {
            left: 540px;
          }

          .jfkslip {
            font-size: 30px;
            top: 20px;
            left: 410px;

          }

          .sfoslip {
            font-size: 30px;
            top: 20px;
            left: 530px;
          }

          .planeslip {
            top: 10px;
            left: 475px;
          }

          .airlineslip {
            left: 455px;
          }
        </style>
      </head>


</form>


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



<!-- for delete record -->
<script>
  $(document).ready(function() {
    $('.deletebtn').on('click', function() {
      $('#deletemoadal').modal('show');




    });
  });
</script>
















<?php
if (isset($_POST['yt'])) {

  $em = $_SESSION['username'];
  $query_run = mysqli_query($con, "select * from booked_flight where email='$em'");
?>


  <?php

  if ($query_run) {
    foreach ($query_run as $row) {
  ?>
      <div class="box">
        <ul class="left">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>

        <ul class="right">
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="ticket">
          <span class="airline"><?php echo $row['flight_name'];  ?></span>

          <span class="boarding">Boarding pass</span>
          <div class="content">
            <tr class="jfk"><?php echo $row['airport_from'];  ?>&nbsp;
              <i class='fa fa-plane-departure'></i> &nbsp;<br>
              <?php echo $row['airport_to'];  ?>
            </tr>


            <div class="sub-content">
              <span class="watermark"><?php echo $row['flight_name'];  ?></span>
              <span class="name">PASSENGER NAME<br><span><?php echo $row['name'];  ?></span></span>
              <span class="flight">FLIGHT N&deg;<br><span><?php echo $row['plane_no'];  ?></span></span>

              <span class="seat">SEAT<br><span><?php echo $row['p_seats']; ?></span></span>
              <span class="boardingtime">BOARDING TIME<br><span><?php echo $row['date'];  ?></span></span>


            </div>
          </div>
          <div class="barcode"></div>

        </div>
      </div>

<?php
    }
  }
}


?>



<?php

if (isset($_POST['deletedata'])) {



  if ($_SESSION['username']) {
    $su = $_SESSION['username'];
    $d = mysqli_query($con, "delete from booked_flight where email='$su' ");
    echo "<script>alert('Ticket Cancled Successfully ')</script>";
  } else {
    echo "<script>alert('You Don't  Booked Any  Flight Ticket ')</script>";
  }
}

?>
<script type="text/javascript">
  document.getElementById("hl").onclick = function() {
    location.href = "index.php";
  };
</script>


<?php

if (isset($_POST['logout'])) {
  session_destroy();
}

?>