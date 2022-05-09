<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





  <title>TMS</title>
  <link rel="stylesheet" href="./css/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" href="images/home.png">
</head>

<body>

  <nav class="navbar navbar-light bg-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo.png" alt="" width="30" height="26" class="d-inline-block align-text-top">
        <b>&nbsp&nbspTMS</b>
      </a>


      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Coverage Area</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Pay Bill</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>



  <!--using Carousel here-->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="2000">
        <img src="images/1.jpg" class="d-block w-100" alt="TMS">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <img src="images/3.jpg" class="d-block w-100" alt="404 ERROR!">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
      <div class="carousel-item">
        <img src="images/2.jpg" class="d-block w-100" alt="404 ERROR!">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="ppp">
    <h3 class="s">
      <b> <img src="images/service.png" alt="Services"> Services</b>

    </h3>

  </div>
  <hr>



  <div class="row">
    <div class="col-sm-4">

      <img class="card-img-top" src="images/logo.png" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Residential Waste Pickup
          <hr>
        </h4>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum repellendus dolorem
          molestiae repudiandae aspernatur illo beatae inventore aliquam sed eos voluptate in eligendi, minus sit quos.
          Qui repudiandae laborum possimus?</p>
        <a href="load.php" class="btn btn-info">Pickup now</a>
      </div>

    </div>





    

    <div class="col-sm-4 mx-5">

      <img class="card-img-top" src="images/logo.png" alt="Card image">
      <div class="card-body">
        <h4 class="card-title">Bussiness Waste Pickup
          <hr>
        </h4>
        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum repellendus dolorem
          molestiae repudiandae aspernatur illo beatae inventore aliquam sed eos voluptate in eligendi, minus sit quos.
          Qui repudiandae laborum possimus?</p>
        <a href="load.php" class="btn btn-info">Pickup now</a>
      </div>
    </div>

  </div>

  <hr>
  <div class="paybillo">
    <img class="payb" src="images/laptop.svg" alt="Pay Bill Online">
    <div class="p"><a class="pp" href="load.php"><strong class="pb">Pay Bill Online</strong></a></div>
  </div>


  <div class="plessbill">
    <img class="paylb" src="images/phone-billing.svg" alt="Paperless Billing">
    <div class="pl"><a class="pl" href="load.php"><strong class="plb">Get Paperless Billing</strong></a></div>
  </div>


  <div class="epaybillo">
    <img class="epayb" src="images/automatic-payment.svg" alt="Enroll In AutoPay">
    <div class="ep"><a class="epp" href="load.php"><strong class="epb">Enroll In AutoPay</strong></a></div>
  </div>



  <div class="pppaybillo">
    <img class="pppayb" src="images/calendar-schedule.svg" alt="Pickup Schedule">
    <div class="ppp"><a class="ppp" href="load.php"><strong class="pppb">See Pickup Schedules</strong></a></div>
  </div>

  <hr>

  <br>


  <div class="learn">
    <h2>Recycling<br>
      <div class="spinner-grow text-muted"></div>
      <div class="spinner-grow text-primary"></div>
      <div class="spinner-grow text-success"></div>
      <div class="spinner-grow text-info"></div>
      <div class="spinner-grow text-warning"></div>
      <div class="spinner-grow text-danger"></div>
      <div class="spinner-grow text-secondary"></div>
      <div class="spinner-grow text-dark"></div>
      <div class="spinner-grow text-light"></div>
    </h2>

    <h5>Recycling is the process of converting waste materials into new materials and objects. The recyclability of a
      material depends on its ability to reacquire the properties it had in its original state. It can also prevent
      the
      waste of potentially useful materials and reduce the consumption of fresh raw materials, reducing energy use, air
      pollution and water pollution..... </h5>

    <div class="more">
      <a class="mo" href="recycle.php">More</a>
    </div>
  </div>
  <hr>
  <!--Contact form code-->

  <div class="container">
    <h3 class="complain">Complain Box</h3>
    <form action="index.php">

      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="First Name">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Last Name">

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="bangladesh">Bangladesh</option>

      </select>

      <label for="subject">Complain</label>
      <textarea id="subject" name="subject" placeholder="Write Your Complain here.." style="height:200px"></textarea>
      <a href="load.php" class="btn btn-success">Submit</a>
      <!--<input type="submit" value="Submit" >-->

    </form>
  </div>
  <hr>


  <!--social media contact-->
  <div class="social">
    <a href="load.php" class="fa fa-facebook"></a>
    <a href="load.php" class="fa fa-twitter"></a>
    <a href="load.php" class="fa fa-github"></a>

  </div>



  <!--Footer Part-->

  <footer>
    <div class="team">
      <h3 class="teamm">Made with <span class="sp">&#10084;</span> by <a href="redirect.php">Fusion-0.2 </a> </h3>
      <p>Copyright ©2022 &nbsp; <a href="mailto:mraihan201196@bscse.uiu.ac.bd">Fusion-0.2 </a> .&nbspAll Rights
        Reserved.</p>
    </div>

  </footer>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>