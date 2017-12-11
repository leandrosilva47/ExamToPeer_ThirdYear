<!DOCTYPE html>
<html>
<head>
    <title>Exam | Studying Made Simple</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Saturn is free PSD &amp; HTML template by @flamekaizar">
    <meta name="author" content="Afnizar Nur Ghifari">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/danstyle.css" />
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Navigation -->
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
                <li ><a href="exam.php">Exam</a></li>
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

	<!-- Introduction -->
	<div class="intro">
		<div class="container">
			<div class="units-row" id="examtitle" onclick="location.href='http://exampapers.ncirl.ie/Browse#'"  >
			    <div class="unit-10">
			    	<img class="img-intro"  onmouseenter="bigImg(this)" onmouseleave="normalImg(this)" src="img/Exam.jpg" alt="">
			    </div>
			    <div class="unit-30">
			    	<p class="p-intro">Exams Of NCI</p>
			    	
			    </div>
			    
			</div>
			<!--  <div class="unit-8" >
			    	<p  id="examtitle2" class="p-intro"  href="http://exampapers.ncirl.ie/Browse#" onclick="http://exampapers.ncirl.ie/Browse#">Exam Papers</p>
			    
			    </div>Introduction -->
		</div>
		
	</div>
	
	<script>
	function bigImg(x) {
    x.style.height = "25px";
    x.style.width = "25px";
    
}
	function normalImg(x) {
    x.style.height = "45px";
    x.style.width = "45px";
}

( ".event-type-select" ).change(function () {
  var selectedEventType = this.options[this.selectedIndex].value;
  if (selectedEventType == "all") {
    ('.containero div').removeClass('hiddenn');
  } else {
    ('.containero div').addClass('hiddenn');
    ('.containero div[data-eventtype="' + selectedEventType + '"]').removeClass('hiddenn');
  }
});

function SearchIt() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#containero *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>

	<!-- Content -->
	<div class="content" >
		<div class="containery" id="first">
			
			<!--  Recent Post -->
			<div class="post">
				<!-- Heading -->
				<a href="#"><h1>Business Exams</h1></a>
				<hr>
				
			<div id="Table" >	<table id="myTable">
					  
    
					<a >2008-2009 business information systems bahacc1<br></a>
			
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2009-2010 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2010-2011 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2011-2012 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2012-2013 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2013-2014 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
						<a> 
						2014-2015 business information systems bahacc1<br>
					</a>
					<a class="read-more" href="Pdf/2008-2009 business information systems bahacc1.pdf" download>Get Exam</a><br>
					
			</table>	</div>
				<div class="foot-post">
					<div class="units-row">
					    
					    
					    
					</div>
				</div>
			</div>
			<!-- /Recent post -->

			<!-- Business Pdfs -->
			<div class="post">
				<!-- Heading -->
				<a href="#"><h1>Computing Exams</h1></a>
				<hr>
				<div  id="Table" > <table id="myTable">
					
					<a href="Pdf/2011-2012 computer architecture bshc1.pdf" > 
						2011-2012 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2011-2012 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					
					<a href="Pdf/2009-2010 computer architecture bshc1.pdf" > 
						2009-2010 computer architecture bshc
					</a>
					<a class="read-more" href="Pdf/2009-2010 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2010-2011 computer architecture bshc1.pdf" > 
						2010-2011 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2010-2011 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2011-2012 computer architecture appendices bshc1.pdf" > 
						2011-2012 computer architecture appendices bshc1
					</a>
					<a class="read-more" href="Pdf/2011-2012 computer architecture appendices bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2012-2013 computer architecture bshc1.pdf" > 
						2012-2013 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2012-2013 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2013-2014 computer architecture bshc1.pdf" > 
						2013-2014 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2013-2014 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2014-2015 computer architecture bshc1.pdf" > 
						2014-2015 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2014-2015 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2015-2016 computer architecture bshc1.pdf" > 
						2015-2016 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2015-2016 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
						<a href="Pdf/2016-2017 computer architecture bshc1.pdf" > 
						2016-2017 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2016-2017 computer architecture bshc1.pdf" download><br>Get Exam</a><br>
				</table>
				</div>
					<div class="foot-post">
					<div class="units-row">
					    
					    
					    
					</div>
				</div>
				
			</div>
			
			<!-- /Business Pdfs -->
			
			
			<!-- Marketing Pdfs -->
			<div postion="relative" class="post">
				<!-- Heading -->
				<a href="#"><h1>Marketing Exams</h1></a>
				<hr>
				<div  id="Table" > <table id="myTable">
					
					<a href="Pdf/2015-2016 introduction to management bshtm1.pdf" > 
						2015-2016 introduction to management bshtm1
					</a>
					<a class="read-more" href="Pdf/2015-2016 introduction to management bshtm1.pdf" download><br>Get Exam</a><br>
					
					<a href="Pdf/2015-2016 introduction to marketing bshtm1.pdf" > 
						2015-2016 introduction to marketing bshtm1
					</a>
					<a class="read-more" href="Pdf/2015-2016 introduction to marketing bshtm1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2015-2016 introduction to mathematics for computing bshtm1.pdf" > 
						2015-2016 introduction to mathematics for computing bshtm1
					</a>
					<a class="read-more" href="Pdf/2015-2016 introduction to mathematics for computing bshtm1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2016-2017 introduction to management bshtm1.pdf" > 
						2016-2017 introduction to management bshtm1
					</a>
					<a class="read-more" href="Pdf/2016-2017 introduction to management bshtm1.pdf" download><br>Get Exam</a><br>
					<a href="Pdf/2016-2017 introduction to marketing bshtm1.pdf" > 
						2016-2017 introduction to marketing bshtm1
					</a>
					<a class="read-more" href="Pdf/2016-2017 introduction to marketing bshtm1.pdf" download><br>Get Exam</a><br>
				
				</table>
				</div>
				
				
			</div>
					    
					    
					    
				
			</div>
			<!-- / Marketing Pdfs -->
	</div>
	
		<div class="container" id="second">
			
    <br></br>
  		<div class="dropdown">
 <!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Find Exam</h2>
  <p>Mouse-over the dropdown and search for a specific exam inside the input field.</p>
  <div class="w3-dropdown-hover">
    <button class="w3-button w3-black">Dropdown</button>
    <div class="w3-dropdown-content w3-bar-block w3-card w3-light-grey" id="myDIV">
      <input class="w3-input w3-padding" type="text" placeholder="Search.." id="myInput1" onkeyup="myFunction()">
     <a href="Pdf/2011-2012 computer architecture bshc1.pdf" > 
						2011-2012 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2011-2012 computer architecture bshc1.pdf" download><br>Get Exam 2011-2012 computer architecture bshc1</a><br>
					
					<a href="Pdf/2009-2010 computer architecture bshc1.pdf" > 
						2009-2010 computer architecture bshc
					</a>
					<a class="read-more" href="Pdf/2009-2010 computer architecture bshc1.pdf" download><br>Get Exam 2009-2010 computer architecture bshc</a><br>
					<a href="Pdf/2010-2011 computer architecture bshc1.pdf" > 
						2010-2011 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2010-2011 computer architecture bshc1.pdf" download><br>Get Exam 2010-2011 computer architecture bshc1</a><br>
					<a href="Pdf/2011-2012 computer architecture appendices bshc1.pdf" > 
						2011-2012 computer architecture appendices bshc1
					</a>
					<a class="read-more" href="Pdf/2011-2012 computer architecture appendices bshc1.pdf" download><br>Get Exam 2011-2012 computer architecture appendices bshc1</a><br>
					<a href="Pdf/2012-2013 computer architecture bshc1.pdf" > 
						2012-2013 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2012-2013 computer architecture bshc1.pdf" download><br>Get Exam 2012-2013 computer architecture bshc1</a><br>
					<a href="Pdf/2013-2014 computer architecture bshc1.pdf" > 
						2013-2014 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2013-2014 computer architecture bshc1.pdf" download><br>Get Exam 2013-2014 computer architecture bshc1</a><br>
					<a href="Pdf/2014-2015 computer architecture bshc1.pdf" > 
						2014-2015 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2014-2015 computer architecture bshc1.pdf" download><br>Get Exam 2014-2015 computer architecture bshc1</a><br>
					<a href="Pdf/2015-2016 computer architecture bshc1.pdf" > 
						2015-2016 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2015-2016 computer architecture bshc1.pdf" download><br>Get Exam 2015-2016 computer architecture bshc1</a><br>
						<a href="Pdf/2016-2017 computer architecture bshc1.pdf" > 
						2016-2017 computer architecture bshc1
					</a>
					<a class="read-more" href="Pdf/2016-2017 computer architecture bshc1.pdf" download><br>Get Exam 2016-2017 computer architecture bshc1</a><br>
				
    </div>
  </div>
</div>

<script>
// Filter
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput1");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDIV");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>

</body>
</html>

  
		</div>
</div>
			
		
		<!-- /post -->

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}
</script>
</body>
</html>