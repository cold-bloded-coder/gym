<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>About Fitness</title>


  <!-- Bootstrap core CSS -->
  <link href="boot/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="boot/css/main.css" rel="stylesheet">
  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">
</head>

<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- left nav -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">About Fitness</a>
      </div>
      <div class="collapse navbar-collapse">
        <!-- left nav  -->
        <ul class="nav navbar-nav">
          <li id="a">
            <a href="index.php">Home</a>
          </li>
          <li><a href="packages.php">Package</a></li>
          <li><a href="facilities.php">Facilities</a></li>
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <!-- right nav  -->
        <form class="navbar-form navbar-right" role="form" method="post" action="include/process_login.php">
          <div class="form-group">
            <input type="text" placeholder="Email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password" class="form-control" name="password">
          </div>
          <input type="submit" class="btn btn-success" value="Sign in"
            onclick="formhash(this.form, this.form.password);">

        </form>

      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h2>About Us</h2>


    <h4>
      <center>“Life is not merely living but living in health.”</center>
    </h4>


    <h4>Our Objectives</h4>

    <p>
    <h5>The main objective of ‘About Fitness’ is to create awareness and to Co-ordinate the performance of body, mind
      and soul in a befitting manner, we are the winner, we don’t do different thing, we do things differently. Our goal
      is to be sensitive to our members needs and to fulfill fitness requirements. We ensure physical fitness and robust
      health to customers as we counsel, we assist, we motivate them to lead a joyous and meaningful results are bound
      to be positive as we put in our 200% to fulfill your needs.</h5>
    </p>

    <h4>Our vision</h4>

    <p>
    <h5>Our vision is to maintain the standers of our fitness centre for our member’s well being, our members will have
      sound body and it will be maintained well when complimented by a health foods bar to nourish body’s daily fiber
      vitamin’s requirements.</h5>
    </p>

    <h4>Facilities</h4>
    <p>
    <h5>
      » Cardio Center<br>
      » Strength Training<br>
      » Free Weight Area<br>
      » Aerobics<br>
      » Customized Schedule Cards<br>
      » Diet Counseling<br>
      » Spa (Shower Room)<br>
      » Locker Room<br>
      » Health Bar ( Serving Protein Shakes, Fat Burners & other Nutrition )<br>
    </h5>
    </p>
  </div>



  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="boot/js/bootstrap.min.js"></script>
  <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <SCRIPT src="boot/js/dialog.js" type="text/javascript"></SCRIPT>
  <script type="text/JavaScript" src="boot/js/sha512.js"></script>
  <script type="text/JavaScript" src="boot/js/forms.js"></script>

  </script>
</body>

</html>