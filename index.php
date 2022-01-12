<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <title>E-Learning</title>
</head>
<body>

<!-- start of navigation -->
<nav class="navbar navbar-expand-sm navbar-light pl-5 fixed-top">
  <a class="navbar-brand text-white" href="index.php">eLearning</a>
  <span class="navbar-text text-white">Learn and Learn</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Course</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Payment Status</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Log out</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#loginmodal ">Login</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#staticBackdrop">Signup</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
  </div>
</nav>
<!-- end of navigation -->

<!-- start video background -->
  <div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
    <!-- playsinline autoplay muted loop   -->
    <video playsinline autoplay muted loop>
        <source src="video/demo (1).mp4">
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h2 class="my-content">Welcome to Elearning</h2>
      <small class="my-content">Learn and Earn Money</small><br>
      <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#staticBackdrop">Get Started</a>
    </div>
  </div>
<!-- end video background -->
    
<!-- Start of text banner -->
<div class="container-fluid bg-info txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
    <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
  </div>
    <div class="col-sm">
    <h5><i class="fas fa-rupee-sign mr-3"></i> Money Back Guarantee</h5>
  </div>
  </div>
</div>
<!-- end of text banner -->

<!-- Start of Popular Course -->
<div class="container mt-5">
  <h1 class="text-content">
    Popular Course
  </h1>
  <!-- First Deck -->
  <div class="card-deck mt-4">
    <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_1.jpg" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Guitar Easy Way</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_2.jpg" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn HTML & CSS</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_3.jpg" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Bootstrap 5.x</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  </div>
  <!-- End of first Deck -->

  <!-- Start Of Second Deck -->
  <div class="card-deck mt-4">
    <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_4.png" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Laravel</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_5.png" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Vue.js</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  <a href="" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="images/card_6.jpg" class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Angular.js</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, obcaecati rerum minima consectetur doloremque placeat.</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>& #8377 200</del></small>
        <span class="font-weight-bolder">&#8377 200</span>
      </p>
      <a href="#" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
      </div>
    </div>
  </a>
  </div>
  <!-- End of Second Deck -->

  <div class="text-center m-2">
    <a href="#" class="btn btn-info btn-sm">View all course</a>
  </div>
</div>
<!-- End of Popular Course -->

<!-- Start of contact page -->
  <div class="container mt-4" id="contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
      <div class="col-md-8">
        <form action="" method="POST">
          <input type="text" name="name" id="name" class="form-control" placeholder="Name"><br>
          <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject"><br>
          <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"><br>
          <textarea name="message" class="form-control" placeholder="How can we help you? " style="height: 150px;"></textarea>
          <input value="Send" class="btn btn-info btn-sm mt-4" name="submit"><br><br>
        </form>
      </div>
      <div class="col-md-4 stripe text-white text-center">
        <h4>eLearning</h4>
        <p>Elearning,
          Near Noakhali Tower, Noakhali
          Sengbag <br>
          Phone: 017715555 <br>
          www.elearning.com <br>
        </p>
      </div>
    </div>
  </div>
<!-- End of contact page -->

<!--Start of  Follow Social Media -->
<div class="container-fluid bg-info">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-whatsapp"></i>What's App</a>
    </div>
    <div class="col-sm">
      <a href="#" class="text-white social-hover"><i class="fab fa-instagram"></i>Instagram</a>
    </div>
  </div>
</div>
<!--End of Follow Social Media -->

<!-- Start fo About us section -->
<div class="container-fluid p-4 bg-dark text-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, quia! Velit similique ad architecto eaque!</p>
      </div>

      <div class="col-sm">
        <h5>Category</h5>
        <a href="#" class="text-white">Web Development</a><br>
        <a href="#" class="text-white">Web Design</a><br>
        <a href="#" class="text-white">iOS Development</a><br>
        <a href="#" class="text-white">Android App Development</a><br>
        <a href="#" class="text-white">Data Analysis</a><br>
      </div>

      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>AeyBeri Tech.<br>Near Washington DC <br> USA <br>Ph.0184574</p>
      </div>
    </div>
  </div>
</div>
<!-- End fo About us section -->

<!-- start of footer -->
<footer class="container-fluid bg-info text-center p-2">
<small class="text-white">Copyright &copy; 2022 || Designed By AeyBeri Tech || Admin Login</small>
</footer>
<!-- end of footer -->
<!--modal Start -->


<!--start Modal for registration -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label>
    <input type="text" class="form-control" id="stuname" name="stuname">
  </div>
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="stuemail" name="stuemail">
  </div>
  <div class="form-group">
   <i class="fas fa-key"> </i><label for="stupass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="stupass" name="stupass">
  </div>
 
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Signup</button>
      </div>
    </div>
  </div>
</div>
<!--modal end for registration-->


<!--start Modal for login -->
<div class="modal fade" id="loginmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodal">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  
  <div class="form-group">
    <i class="fas fa-envelope"></i><label for="mail" class="pl-2 font-weight-bold">Email</label>
    <input type="email" class="form-control" id="mail" name="mail">
  </div>
  <div class="form-group">
   <i class="fas fa-key"> </i><label for="pass" class="pl-2 font-weight-bold">Password</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
 
  
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Signup</button>
      </div>
    </div>
  </div>
</div>
<!--modal end  for login-->


<script src="js/jqury.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>