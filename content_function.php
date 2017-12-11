<?php 

function dispcourses() {
include ('dbconn.php');
    
    $select = mysqli_query($con, "SELECT * FROM courses");
    
    while ($row = mysqli_fetch_assoc($select)) {
			echo "<table class='course-table'>";
			echo "<tr><td class='main-course' colspan='2'>".$row['course_title']."</td></tr>";
			dispsubjects($row['cour_id']);
			echo "</table>";

    }
}

function dispsubjects($parent_id) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT cour_id, subject_id, subject_title, subject_desc FROM courses, subjects 
									  WHERE ($parent_id = courses.cour_id) AND ($parent_id = subjects.parent_id)");
		echo "<tr><th width='90%'>Courses</th><th width='10%'>Questions</th></tr>";
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td class='course_title'><a href='questions.php?cid=".$row['cour_id']."/".$row['subject_id']."'>
				  ".$row['subject_title']."<br />";
			echo $row['subject_desc']."</a></td>";
			echo "<td class='num-questions'>".getnumquestions($parent_id, $row['subject_id'])."</td></tr>";
		}
}

	
	
	function getnumquestions($cour_id, $subject_id) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT course_id, subject_id FROM questions WHERE ".$cour_id." = course_id 
									  AND ".$subject_id." = subject_id");
		return mysqli_num_rows($select);

}


	


function dispquestions($cid, $scid) {
		include('dbconn.php');
		$cid = $_GET['cid'];
		$scid = $_GET['scid'];
		$query = "SELECT * FROM subjects";
		$result = mysqli_query($con, $query);
		
		
		
		if (mysqli_num_rows($result) > 0) {
			$innerContent =  "<table id=\"dataTable\" class='question-table'><tr><th>Subject Title</th><th>Description</th></tr>";	
			$content ="";
			while ($row = mysqli_fetch_assoc($result)) {
				$content = "<tr><td><a onclick=\"getQuestion('".$row['subject_id']."');\">".$row['subject_title']."</td><td>".$row['subject_desc']."</td></tr>";
				
				$innerContent = $innerContent.$content;
				
			}
			$innerContent = $innerContent."</table>";
			echo $innerContent;
			
		} else {
			echo "<p>this category has no topics yet!  <a href='/forum-tutorial/newtopic/".$cid."/".$scid."'>
				 add the very first topic like a boss!</a></p>";
		}
	}


function dispquestions1($cid, $scid) {
		include ('dbconn.php');
		$select = mysqli_query($con,"SELECT question_id, author, title, date_posted, views from questions WHERE ($cid=questions.course_id) AND ($scid=questions.subject_id)");
		
		//	if (mysqli_num_rows($result) > 0
		
			if	($check === TRUE) {
			echo "<table class='question-table'>";
			echo "<tr><th>Title</th><th>Posted by</th><th>Date posted</th><th>Views</th><th>Replies</th></tr>";
			while ($row = mysqli_fetch_assoc($select)) {
				echo "<tr><td><a href='readquestion.php".$cid."/".$scid."/".$row['question_id']."'>
					 ".$row['title']."</a></td><td>".$row['author']."</td><td>".$row['date_posted']."</td><td>".$row['views']."</td>
					 <td>".$row['replies']."</td></tr>";
			}
			echo "</table>";
	}		else {
			echo "<p>this category has no questions yet!  <a href='newquestion".$cid."/".$scid."'>
				 add the very first topic like a boss!</a></p>";
	}
}
	

?>
	
	
	<script>
		function getQuestion(){ //param
			
		//	alert("The function get Question has been invoked: "+param);
			
			document.getElementById("dataTable").innerHTML = "no table data";
			
			
			
		
			// you need to make an ajax call to php to get the question data...
			 
			//set the innerHTML of the newly constructed question table to be equal to this content...
			
			
			
		}	
/*global $*/			
	
$.ajax({
	
url: 'questions.php',
type: 'post',
async: false,
success: function(data){
alert("The data being returned from the server is : "+data);

	},
	cache: false
	
	
});
	


		
	</script>