<?php
session_start();
$sessionName = $_SESSION['username'];

//if (!isset($_SESSION['username'])) {
//    // echo "You are not logged in";
//} else {
//    echo "Welcome, $sessionName";
//}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RWC Advanced Web Dev</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">
  <!-- the things we do don't work -->
  <style>
  body{
  background: linear-gradient(to left, #7b4397, #dc2430);
  }
  </style>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html">RWC</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
		  	<?php
				if (!isset($_SESSION['username'])) {
					
				} else {
					echo '<a class="nav-link js-scroll-trigger" href="myprofile.php">My Profile</a>';
				}
			?> 
            
          </li>

          <li class="nav-item">
		  	<?php
				if (!isset($_SESSION['username'])) {
					echo '<a class="nav-link js-scroll-trigger" href="signup.php">Sign up</a>';
				} else {
					//nothing
				}
			?>          
          </li>
		  <li class="nav-item">
		  	<?php
				if (!isset($_SESSION['username'])) {
					echo '<a class="nav-link js-scroll-trigger" href="login.php">Log in</a>';
				} else {
					//nothing
				}
			?> 
            
          </li>
		  <li class="nav-item">
			<?php
			
	   if (!isset($_SESSION['username'])) {
              // echo "You are not logged in";
	   } else {
    	     echo '<a name="logout" class="nav-link js-scroll-trigger" href="index.html?logout=true">Logout</a>';
	   }
           if (isset($_GET['logout'])) {
				session_unset();
				session_destroy();
				$_SESSION = array();
				header("location: index.html");
           }
			?>
	   
		
		</li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
			<h1 class="mb-5"> Welcome, <?php echo $_SESSION['username'];?> </h1>
			
            <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">My Profile</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">

          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="download text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading">About</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam dui eros, eget pretium justo maximus non. Nulla vitae volutpat nibh, vitae ornare neque. Nulla vestibulum dolor ac nunc tincidunt, placerat dictum elit volutpat. Sed auctor pellentesque nulla non lacinia. Aliquam neque nisl, condimentum eu tempor eget, maximus ac dolor. Nullam scelerisque felis nec metus faucibus iaculis. Sed aliquet tellus hendrerit viverra maximus. Nunc enim ex, vulputate a arcu sit amet, suscipit imperdiet purus. Donec sollicitudin tincidunt blandit. Nam rutrum urna eget nunc auctor semper vel vel neque. Sed ac vulputate enim.</p>
  
        </div>
      </div>
    </div>
  </section>







  <footer>
    <div class="container">
      <p>&copy; RWC Website 2019. </p>
 
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>

</body>

</html>
