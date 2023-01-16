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

    <div>

        <form method="POST">







            <div class="card">

                <div class="card-body">

                    <h4>
                        Available Flights
                    </h4>



                    <?php



                    $query_run = mysqli_query($con, "select * from flight_list");
                    ?>
                    <table class="table table-striped table-hover">

                        <thead>
                            <tr>
                                <th scope="col" hidden="">ID</th>
                                <th scope="col">Plan No.</th>
                                <th scope="col">Airline Name</th>
                                <th scope="col">Airport To Take</th>
                                <th scope="col">Airport To Land</th>
                                <th scope="col">Daparture Date/Time</th>
                                <th scope="col">Arrival Date/Time</th>
                                <th scope="col">Seats</th>
                                <th scope="col">Price</th>

                                <th scope="col">Book Now</th>


                            </tr>
                        </thead>

                        <?php

                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?>
                                <tbody>
                                    <tr>

                                        <td hidden=""><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['plane_no']; ?></td>
                                        <td><?php echo $row['airline_name']; ?></td>
                                        <td><?php echo $row['airport_from']; ?></td>
                                        <td><?php echo $row['airport_to']; ?></td>
                                        <td><?php echo $row['departure_datetime']; ?></td>
                                        <td><?php echo $row['arrival_datetime']; ?></td>
                                        <td><?php echo $row['seats']; ?></td>
                                        <td><?php echo $row['price']; ?></td>
                                        <td hidden=""><?php echo $row['date_created']; ?></td>





                                        <td>
                                            <?php
                                            if (isset($_SESSION['username'])) {
                                            ?>
                                                <button type="button" class="btn btn-primary editbtn" data-bs-toggle="modal" data-bs-target="#editmodal">
                                                    Book Now

                                                </button>

                                            <?php
                                            } else {
                                            ?>
                                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lrmodal">
                                                    Book Now
                                                </a>
                                            <?php
                                            }
                                            ?>
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

<div class="modal fade" id="lrmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="">
                <div class="modal-body">



                    <h6>Login Required</h6>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>

                </div>
            </form>



        </div>
    </div>
</div>




<!-- book flight record -->

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
                    <div class="form-group" hidden>
                        <label>Plane No</label>
                        <input type="text" name="planeno" id="planeno" class="form-control" placeholder="Plane No" required>
                    </div>

                    <div class="form-group" hidden>
                        <div class="col-md-8">
                            <label>Airlines</label>
                            <select class="form-control" name="airlinename" id="airlinename" required>
                                <option selected disabled value="">Airline</option>
                                <option>Air India</option>
                                <option>Indigo</option>
                            </select>

                        </div>


                    </div>

                    <div class="form-group" hidden>
                        <label>Airport To Take</label>
                        <input type="text" name="att" id="att" class="form-control" placeholder="Airport To Take" required>
                    </div>


                    <div class="form-group" hidden>
                        <label>Airport To Land</label>
                        <input type="text" name="atl" id="atl" class="form-control" placeholder="Airport To Land" required>
                    </div>

                    <div class="form-group" hidden>
                        <label>Daparture Date</label>
                        <input type="text" name="dd2" id="dd2" class="form-control" placeholder="Daparture Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">
                    </div>

                    <div class="form-group" hidden>
                        <label>Arrival Date</label>
                        <input type="text" name="ad2" id="ad2" class="form-control" placeholder="Arrival Date" required onfocus="this.type='datetime-local'" onblur="if(this.value==='')this.type='text'">

                    </div>

                    <div class="form-group" hidden>
                        <label>Seats</label>
                        <input name="seats" class="form-control" id="seats" placeholder="Seats" required maxlength="3">
                    </div>

                    <div class="form-group" hidden>
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Price" required maxlength="6">
                    </div>

                    <div class="form-group" hidden>
                        <label>Date</label>
                        <input type="date" id="date2" name="date2" placeholder="Date" required>
                    </div>


                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required maxlength="30">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Your Email" required maxlength="30">
                    </div>

                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="contact" class="form-control" id="contact" placeholder="Your Contact" required maxlength="15" onkeyup="validatephone(this);">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" required maxlength="30">
                    </div>


                    <div class="form-group">
                        <label>Travel Class</label>
                        <select name="travelc" class="form-control" id="travelc" required>
                            <option selected disabled value=""> Choose Your Class</option>
                            <option>Economy Class</option>
                            <option>First Class</option>
                            <option>Business Class</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Childrens</label>
                        <select type="text" name="children" class="form-control" id="children" required maxlength="3" onkeyup="validatephone(this);">

                            <option selected disabled value="">How Many Childrens</option>

                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>




                    <div class="form-group">
                        <label>Adults</label>
                        <select type="text" name="adults" class="form-control" id="adults" placeholder="How Many Adults" required maxlength="3" onkeyup="validatephone(this);">

                            <option selected disabled value="">How Many Adults</option>

                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="book" class="btn btn-primary">Book</button>
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
    function validatephone(phone) {
        var maintainplus = '';
        var numval = phone.value
        if (numval.charAt(0) == '+') {
            var maintainplus = '';
        }
        curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g, '');
        phone.value = maintainplus + curphonevar;
        var maintainplus = '';
        phone.focus;
    }

    //date
    $('#date1').val(new Date().toJSON().slice(0, 10));

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



</body>



<!-- insert record -->

<?php




if (isset($_POST['book'])) {
    $plane_no = $_POST['planeno'];
    $airline_nm = $_POST['airlinename'];
    $airport_tt = $_POST['att'];
    $airport_tl = $_POST['atl'];
    $departure_d = $_POST['dd2'];
    $arrival_d = $_POST['ad2'];
    $price = $_POST['price'];
    $date2 = $_POST['date2'];
    $fid = $_POST['update_id'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $name = $_POST['name'];
    $travelc = $_POST['travelc'];
    $children = $_POST['children'];
    $adults = $_POST['adults'];


    $seats = $_POST['children'] + $_POST['adults'];


    $r = (rand(1, 100));



    $query = mysqli_query($con, "insert into booked_flight(flight_name,name,address,contact,plane_no,flight_id,email,depture_d,arrival_d,price,date,airport_from,airport_to,travel_class,children,adults,p_seats,seats)
    values('$airline_nm','$name','$address','$contact','$plane_no','$fid','$email','$departure_d','$arrival_d','$price','$date2','$airport_tt','$airport_tl','$travelc','$children','$adults','$r','$seats')");



    if ($query) {
        echo "<script>alert('Flight Booked');</script>";
    } else {
        echo "<script>alert('Flight Not  Booked');</script>";
    }
}
?>


<!-- edit record -->