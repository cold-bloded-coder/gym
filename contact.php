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
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
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
    <ul style="list-style:none;">
      <li>
        <b><i>Ratik Chandna</i></b>
      <li>
        <b>Phone no</b>-9872851376
      <li>
        <b>Email</b>-navgag33@gmail.com
    </ul>

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