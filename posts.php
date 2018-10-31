<?php 
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysqli_connect("localhost", "root", "Nuncalasabr@s97", "cali_database");
    session_start();// Starting Session
    // Storing Session
    $user_check = $_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $ses_sql = mysqli_query($connection, "SELECT username FROM login WHERE username='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session = $row['username'];
    if(!isset($login_session)){
      //mysqli_close($connection); // Closing Connection
      header("Location: login.php"); // Redirecting To Home Page
      exit();
    }
    $_SESSION['previousUrl'] = 'posts.php';
    $delete = $_GET['delete'];
    if(isset($delete)){
    $del_sql = "DELETE FROM noticias WHERE id='$delete'";
    $result = mysqli_query($connection, $del_sql);
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Posts</title>
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
          <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="pages.html">Pages</a></li>
            <li class="active"><a href="posts.php">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Brad</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Posts<small>Manage Blog Posts</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#" type="button" data-toggle="modal" data-target="#addPage">Add Post</a></li>
                <li><a href="#" type="button" data-toggle="modal" data-target="#addClient">Add Client</a></li>
                <?php 
                  if($user_check === 'admin'){
                    echo "<li><a href='#' type='button' data-toggle='modal' data-target='#addUser'>Add User</a></li>";
                  }
                 ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li class="active">Posts</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="dashboard.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge"><?php 
                  require 'Noticia.php';
                  $arr = Noticia::loadNews();
                  echo count($arr);
               ?></span></a>
            </div>
<!--
            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div> -->
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <!--<input class="form-control" type="text" placeholder="Filter Posts...">-->
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <?php 
                        
                          for($i = 0; $i < count($arr); $i++){
                            $id = $arr[$i]->id;
                            $title = $arr[$i]->title;
                            $date = $arr[$i]->date;
                            $description = $arr[$i]->description;
                            $brief = $arr[$i]->brief;
                            $image = $arr[$i]->img;
                            $tableRow = "<tr>";
                            $tableRow .= "<td>{$title}</td>";
                            $tableRow .= "<td><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></td>";
                            $tableRow .= "<td>{$date}</td>";
                            $tableRow .= "<td><a class='btn btn-default' href='edit.php?id={$id}'>Edit</a> <a class='btn btn-danger' href='posts.php?delete={$id}'>Delete</a></td>";
                            $tableRow .= "</tr>";
                            echo $tableRow;
                          }
                       ?>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="add_submit.php" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Post</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input name="title" type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Imagen</label>
          <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*"> <br>
        </div>
        <div class="form-group">
          <label>Resumen</label>
          <textarea required name="editorR" class="form-control" placeholder="Resumen"></textarea>
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea  required name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Add Client -->
<div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="add_client.php" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Client</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Imagen</label>
          <input type="file" accept="image/*" class="form-control" name="fileToUpload">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="add_user.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Client</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Usuario</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name="submit" type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
      
    
  </div>
</div>
  <script>
     CKEDITOR.replace( 'editor1' );
     CKEDITOR.replace( 'editorR' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
