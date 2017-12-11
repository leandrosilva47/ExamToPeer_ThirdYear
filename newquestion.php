<?php
session_start();
include 'dbconn.php'; //dbconn.php//
include 'content_function.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>AskQuestion | Studying Made Simple</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
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

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">Ask a question</h1>

          <hr>
          
        
          
          
          <!-- Post Content -->
          
          
          

<div class="content">
<?php 

    if (isset($_SESSION['name'])) {
            echo "<form action='addnewquestion.php?cid=".$_GET['1']."&scid=".$_GET['2']."'
             method='POST'>
             <p>Question: </p>
             <input type='text' id='question' name='question' size='100' />
             <p>Content: </p>
                <textarea id='content' name='content'></textarea><br />
             <input type='submit' value='add new post' /></form>";
        } else {
            echo "<p>please login first or <a href='register.php?cid='>click here</a> to register.</p>";
}
?>
</div>
<!-- /.row -->

</div>
<!-- /.container -->
    

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
