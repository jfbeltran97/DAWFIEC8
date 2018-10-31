<?php 
  session_start(); // Starting Session
  $error=''; // Variable To Store Error Message
  if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $error = "Rellene los campos";
    } else{
      // Define $username and $password
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Establishing Connection with Server by passing server_name, user_id and password as a parameter
      $connection = mysqli_connect("localhost", "root", "Nuncalasabr@s97", "cali_database");
      // To protect MySQL injection for Security purpose
      $username = stripslashes($username);
      $password = stripslashes($password);
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      // SQL query to fetch information of registerd users and finds user match.
      $query = mysqli_query($connection, "SELECT * FROM login WHERE password='$password' AND username='$username'");
      $rows = mysqli_num_rows($query);
      if ($rows == 1) {
        $_SESSION['login_user']=$username; // Initializing Session
        header("Location: dashboard.php"); // Redirecting To Other Page
      } else {
        $error = "invalid username or password";
      }
        mysqli_close($connection); // Closing Connection
    }
  }

  if(isset($_SESSION['login_user'])){
    header("Location: dashboard.php");
  }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" action="login.php" class="well" method="post">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input id="username" name="username" type="text" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                  </div>
                  <input name="submit" type="submit" class="btn btn-default btn-block" value="Log in">
                  <span><?php echo $error; ?></span>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
