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
          <a class="nav-link" href="index.php">Home
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#flights">Available Flights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#book_flights">Book Flights</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#ftr">About</a>
        </li>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <li class="nav-item">
          <button type="button" class="btn btn-outline-primary" id="hl"><i class="fas fa-user"></i>&nbsp;Login</button>


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
    location.href = "signup.php";
  };
</script>