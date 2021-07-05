<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB-Pro_4.12.0/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb-plugins-gathered.min.css">
    <link rel="stylesheet" href="pyramidseye.css">
    

    <script src="https://kit.fontawesome.com/4b1c3479e4.js" crossorigin="anonymous"></script>
<style>
.col {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
    display:flex;
    flex-wrap:wrap;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.form-group {
    margin-bottom: 1rem;
}
.checked {
      color: rgb(255, 165, 0);
    }
    .contain{
      display: flex;
      justify-content: flex-start;
      margin-top: 50px;
    }
     .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: auto;
      text-align: center;
      font-family: arial;
      margin-top: 5px;
      background-image: linear-gradient(to right,rgb(69, 69, 179),rgb(59, 59, 61));
    }
    .card h1{
      font-size: 26px;
      color: rgb(255, 255, 255);
    }
    
    .price {
      color: grey;
      font-size: 22px;
    }
    .text{
      color: white;
      text-align: left;
    }
    
    .card button {
      border: none;
      outline: 0;
      padding: 12px;
      color: white;
      background-color: rgb(36, 36, 36);
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    .card button:hover {
      opacity: 0.7;
    }
    .room-container{
      display:flex;
      flex-wrap:wrap;
    }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">

        <a class="navbar-brand" href="#" target="_blank">
        <strong>Corotel</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Home.html">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php" target="_blank">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hotels.html" target="_blank">Hotels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >Tours</a>
          </li>

        </ul>
      </div>
      <div class="navbar-collapse collapse order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="logout.php" >Sign out</a>
            </li>
        </ul>
        </div>
      </nav>


      <div class="image-section">
      <div class="image-section-head">
        <h5>     Steigenberger Hotel El Tahrir         
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span></h5>
            
            <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from hotel WHERE id=1";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$location = $row[1];

echo "<i class=\"fa fa-map-marker\">  $location  </i>";

?>

<br><br>
            <a href="https://www.google.com/maps/place/Pyramids+Eyes+Hotel/@29.989437,31.1348007,17z/data=!3m1!4b1!4m8!3m7!1s0x145845cd33f9512b:0x8f38efbf9fecf359!5m2!4m1!1i2!8m2!3d29.989437!4d31.1369894">Great location - show map</a>
      </div>
    <div class="image-section-body">
    
   <img class="img" src="images/photo1.jpg" style="width: 50%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
   <img class="img" src="images/photo2.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(2)" class="hover-shadow cursor"></a>
  <img  class="img" src="images/photo3.jpg"style=" width: 50%; height: 100%;"onclick="openModal();currentSlide(3)" class="hover-shadow cursor"></a>
   <img class="img" src="images/photo4.jpg"style="width: 50%; height: auto;"onclick="openModal();currentSlide(4)" class="hover-shadow cursor"></a>
   <img class="img" src="images/photo5.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(5)" class="hover-shadow cursor"></a>
   <img class="img" src="images/photo6.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(6)" class="hover-shadow cursor"></a>
   <img class="img" src="images/photo7.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(7)" class="hover-shadow cursor"></a>
   <img class="img" src="images/photo8.jpg"style="width: 50%; height: 100%;"onclick="openModal();currentSlide(8)" class="hover-shadow cursor"></a>
    </div>
  </div>
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
  
      <div class="mySlides">
        <div class="numbertext">1 / 25</div>
        <img src="images/photo1.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">2 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
  
      <div class="mySlides">
        <div class="numbertext">3 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      
      <div class="mySlides">
        <div class="numbertext">4 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">5 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">6 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">7 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">8 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">9 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">10 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">11 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">12 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">13 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">14 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">15 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">16 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">17 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">18 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">19 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">20 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">21 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">22 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">23 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">24 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <div class="mySlides">
        <div class="numbertext">25 / 25</div>
        <img src="images/photo2.jpg" style="width:100%">
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      </div>
  <script>
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
  
<div class="user">
  Average User Rating
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star checked"></span>
  <span class="fa fa-star"></span>
</div>
<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>2882</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>1280</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>297</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>74</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>44</div>
  </div>
</div>
<div class="row">
  <div class="col-sm-7">
    <hr/>
    <div class="review-block">
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Heba</div>
          <div class="review-block-date">June 2021<br/>5 nights</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <div class="review-block-title">Exceptional</div>
          <div class="review-block-description">Staff was very nice and helpful. Sincere thanks to the reception team (thank you Tharwat for your help!). The hotel is beautiful, comfortable and clean. I highly recommend it for business or leisure!.
          </div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name"> Ali</div>
          <div class="review-block-date">June 2021<br/>1 night</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </div>
          <div class="review-block-title">Very Good</div>
          <div class="review-block-description">First I want to thank ms.NARMIN for giving me late checkout up to 5 pm.The cheepest hotel with same quality in the area.Highly recommended for Khaliji families. Safe and respectful.</div>
        </div>
      </div>
      <hr/>
      <div class="row">
        <div class="col-sm-3">
          <img src="avatar.png" class="img-rounded">
          <div class="review-block-name">Kashif</div>
          <div class="review-block-date">June 2021<br/>9 nights</div>
        </div>
        <div class="col-sm-9">
          <div class="review-block-rate">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <div class="review-block-title">Wonderful</div>
          <div class="review-block-description">What can I say. This Hotel exceeded my expectations in every way. All the staff from security, concierge, reception, breakfast, chauffeurs and management really know how to look after their guests. They are always polite, pleasant, helpful and efficient. I stayed there for 9 days and everyday was a delight. We spent our first night staying at the Hilton Ramses which was a very old and tired hotel which wasn’t a major issue but they were doing construction work next to our room and the noise was horrible so we left and came to Steigenberger and were met by a great concierge called Muhktar who gave us such a warm welcome we felt we came to our own home. He is chatty with the guests and gives pointers on what places to visit. He is truly a lovely guy.
The rooms are spacious modern and clean and most importantly soundproofed very well. Security at the hotel is the one of the best I’ve seen. Location perfect right next to Tahrir square and museum. Breakfast was well worth it, tasted amazing, staff amazing. Missing it already lol.
If you come to Cairo this is the only hotel I would recommend you stay in. You will have an amazing time being looked after by a great team. They really are the best in the city and I want to thank them so so much for making my stay enjoyable.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="description">
 <br> <h3>Description</h3>
 <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from hotel WHERE id=1";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$description = $row[2];

echo "<p>" . $description . "</p>";

?>
<strong>Pyramids Eyes Hotel has been welcoming guests since Dec 7, 2018<strong>
    <br><br><h3>Most popular facilities</h3>
    <br>
    <i class="fa fa-wifi" aria-hidden="true">Free WiFi</i>
    <i class="fa fa-bus" aria-hidden="true">Airport shuttle (free)</i>
    <i class="fa fa-bed" aria-hidden="true"> Family rooms</i>
    <br>
    <i class="fas fa-parking">Free Parking</i>
    <i class="fas fa-smoking-ban">Non-smoking rooms</i>
    <i class="fas fa-concierge-bell">Room service</i>
<!--Rooms-->
    <br><br><h3>Rooms</h3>
    <div class="room-container">
    <div class="card">
    <img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=13";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo  $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>


<div class="card">
<img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=14";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>

<div class="card">
    <img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=15";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>

<div class="card">
    <img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=16";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>

<div class="card">
    <img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=17";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>

<div class="card">
    <img class="img" src="images/img1.jpg" style="width: 100%; height: 100%;"onclick="openModal();currentSlide(1)" class="hover-shadow cursor" ></a>
    <?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "hotel";

$conn = mysqli_connect($server, $user, $pass, $database);
//fetching data
$query = "SELECT * from room WHERE id=18";
$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array ($result);
//print_r ($row);
$id = $row[0];
$type = $row[1];
$price = $row[2];
$size = $row[3];

echo "<h4>" . $type . "</h4>";
echo "<br>" . $price . "</br>";
echo $size;
?>

      <p><a href="novotel.html"><button>Reserve</button></a></p>
  </div>

</div>
<br><h3> Hotel surroundings<form action="index.php" method="get" target="_blank"><button type="submit">See availability</button></form></h3>
<table class="table"><h4 class="what"><i class="fas fa-walking">What's nearby</h4></i> <h4 class="nature"><i class="fas fa-mountain">Natural Beauty</h4></i>
  <tr>
    <th>The Egyptian Museum<td>0.2 km</td></th>
    <th>Khan Al Khalili<td>2.2 km</td></th>
    
  </tr>
  <tr>
    <td>Qasr el-Nil Bridge<td>0.7 km</td></td>
    <td>Cairo Tower<td>1.1 km</td></td>
    
  </tr>
  <tr>
    <td>Tahrir Square<td>0.2 km</td></td>
    <td>Cairo Citadel<td>3.2 km</td></td>
    
  </tr>
  <tr>
    <td>Ministry of Foreign Affairs<td>0.2 km</td></td>
    <td>Nile<td>0.5 km</td></td>
    
  </tr>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="asset/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>


