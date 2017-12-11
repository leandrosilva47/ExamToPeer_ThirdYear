<?php
session_start();
include 'dbconn.php'; //dbconn.php//
include 'content_function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home | Studying Made Simple</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
</head>
<body>


<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ExamToPeer</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <?php if (isset($_SESSION['usr_id'])) { ?>
                <li><a href="askquestion.php">AskQuestion</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="exam.php">Exam</a></li>
                <li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
                <li><a href="logout.php">Log Out</a></li>
                <?php } else { ?>
                <li><a href="askquestion.php">AskQuestion</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="exam.php">Exam</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Sign Up</a></li>
                <?php } ?>
            </ul>
        </div>
    </div> 
</nav>
          <div class="jumbotron">
              <div class="container">
                  <h1>Welcome to ExamToPeer</h1>
                  <p>Learn, Help, Build, 
                  students come to ExamToPeer to learn, share their knowledge, on exams questions and papers. <br>
                  Join the newest growing NCI student  community.</p>
              </div>
              
          </div>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4"></h1>

          <hr>

        </div>

      </div>
      

      <!-- /.row -->

    </div>
    <!-- /.container -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
