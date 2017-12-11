<?php
session_start();
include 'dbconn.php'; //dbconn.php//
include 'content_function.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Jobs | Studying Made Simple</title>
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

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">Jobs|Search for the latest jobs</h1>

          <hr>
          
          
          
          
<!-- Post Content -->
<form action="jobs.php" method="get">
    <input type="text" name="keywords"  placeholder="Enter Job Keywords" value="<?php echo $_GET["keywords"]; ?>"/>
    <input type="text" name="location" placeholder="Enter location"   value="<?php echo $_GET["location"]; ?>"/>
    <input type="submit" name="submit" value="find jobs" />
</form>

<br>
<br>


<?php

require_once "Careerjet_API.php" ; //file containing the API

$api = new Careerjet_API('en_IE') ;
$page = 1 ; # Or from parameters.

$result = $api->search(array(
  'keywords' => $_GET["keywords"],
  'location' => $_GET["location"],
  'page' => $page ,
  'affid' => '678bdee048',
));

if ( $result->type == 'JOBS' ){
  echo "Found ".$result->hits." jobs" ;
  echo " on ".$result->pages." pages\n" ;
  $jobs = $result->jobs ;
  echo "<hr>";
  
  foreach( $jobs as $job ){
    
  echo "\n" ;
    echo " TITLE:   ".$job->title."\n" ;
    echo "<br>";
    echo " LOC:     ".$job->locations."\n";
    echo "<br>";
    echo " COMPANY: ".$job->company."\n" ;
    echo "<br>";
    echo " SALARY:  ".$job->salary."\n" ;
    echo "<br>";
    echo " DATE:    ".$job->date."\n" ;
    echo "<br>";
    echo " DESC:    ".$job->description.  " <br><a target = '_blank' href=".$job->url.">See More</a>\n" ;  ;
    echo "<br>";
    echo "<hr>";
    echo "\n" ;  
  }
  

  # Basic paging code
  if( $page > 1 ){
    echo "Use \$page - 1 to link to previous page\n";
  }
  echo "You are on page $page\n" ;
  if ( $page < $result->pages ){
    echo "Use \$page + 1 to link to next page\n" ;
  }
  
  else {
  echo "no jobs found";
}
  
}

# When location is ambiguous
if ( $result->type == 'LOCATIONS' ){
  $locations = $result->solveLocations ;
  foreach ( $locations as $loc ){
    echo $loc->name."\n" ; # For end user display
    ## Use $loc->location_id when making next search call
    ## as 'location_id' parameter
  }
}

echo "<br>";
?>


        </div>
        <!-- Sidebar Widgets Column -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
