<?php 
session_start();
?>
<!doctype html>
<html>

<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

  <title>Admin Panel</title>


  <!-- Bootstrap core CSS -->
  <link href="./boot/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../boot/css/main.css" rel="stylesheet">
  <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" text="text/css" rel="stylesheet">
  <link href="../boot/css/jquery.bxslider.css" rel="stylesheet" />




  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./php/i.php">About Fitness</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="./php/i.php">Profile</a></li>

          <li><a href="./workouts">Workouts</a></li>
          <li class="active">
            <?php if (isset($_SESSION['admin'])) {
              echo '<a href="./php/feed.php">Feedback</a>';
            } else {
              echo "<a href='./Feedback.php'>Feedback</a>";
            } ?>
          </li>
          <?php if (isset($_SESSION['admin'])) { ?>
            <li><a href="./att.php">Attendance</a></li>
            <li><a href="./a.php">Admin Panel</a></li>
          <?php } ?>
        </ul>
        <form class="navbar-form navbar-right" role="form" action="./include/logout.php">

          <input type="submit" class="btn btn-success" value="Sign-out">
        </form>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>
  <div class="jumbotron" style="background:transparent;">
      <h4> Your Feed back Is important to us.</h4>
      <form class="navbar-form navbar-left" action="./php/subfeed.php" method="POST" id="sign-up-form"
        class="form-signin">
        <div class="form-group">
          <textarea rows="4" cols="50" placeholder="Enter text here.." name="feed"></textarea>
        </div><br><br>
        <input type="submit" class="btn btn-success" value="Submit Feedback" />
        <input type="reset" Class="btn btn-warning" value="Clear" style="margin-left:35px;width:140px;">


      </form>
    </div>  
  <script type="text/JavaScript" src="../boot/js/sha512.js"></script>
  <script type="text/JavaScript" src="../boot/js/forms.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="../boot/js/bootstrap.min.js"></script>
  <SCRIPT TYPE="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></SCRIPT>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <SCRIPT src="a.js" type="text/javascript"></SCRIPT>
</body>

</html>

  