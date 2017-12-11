<?php
	session_start();
	
	include ('dbconn.php');
	
	$question = addslashes($_POST['question']);
	$content = nl2br(addslashes($_POST['content']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	
	$insert = mysqli_query($con, "INSERT INTO questions (`course_id`, `subject_id`, `author`, `title`, `content`, `date_posted`) 
								  VALUES ('".$cid."', '".$scid."', '".$_SESSION['name']."', '".$question."', '".$content."', NOW());");
								  
	if ($insert) {
		header("Location:'questions.php?cid='".$cid."/".$scid."");
	}
?>