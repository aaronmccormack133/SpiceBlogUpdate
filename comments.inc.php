<?php

function setComments($conn){
	if(isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$title = $_POST['title'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments (uid, date, title, message) VALUES ('$uid', '$date', '$title', '$message' )";
$result = mysqli_query($conn, $sql);
	}
}

function getComments($conn){
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql);
	while($row = $result->fetch_assoc()){
		$id = $row['uid'];
		$sql2 = "SELECT * FROM user WHERE id='$id'";
		$result2 = mysqli_query($conn, $sql2);
		if($row2 = $result2->fetch_assoc()){
			echo "<div class = 'comment-box'><p>";
			echo $row2['uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['title'])."<br>";
			echo nl2br($row['message']);
		echo "</p>";
		if(isset($_SESSION['id'])){
			if($_SESSION['id'] == $row2['id'] ){
				echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>

				<button class='btn btn-default' type='submit' name='commentDelete'>Delete</button>
			</form>
			
			<form class='edit-form' method='POST' action='editcomments.php'>
			<div class='form-group'>
				<input class='form-control' type='hidden' name='cid' value='".$row['cid']."'>
			</div>
			<div class='form-group'>
				<input class='form-control' type='hidden' name='uid' value='".$row['uid']."'>
			</div>
			<div class='form-group'>
				<input class='form-control' type='hidden' name='date' value='".$row['date']."'>
			</div>
			<div class='form-group'>
				<input class='form-control' type='hidden' name='message' value='".$row['message']."'>
			</div>
				<button class='btn btn-default'>Edit</button>
			</form>";
			}
		}

		
		echo "</div>";
		}

		
	}

	
	
}

function editComments($conn){
	if(isset($_POST['commentSubmit'])){
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);
		header("Location: index.php");
	}
}


function deleteComments($conn){
		if(isset($_POST['commentDelete'])){
		$cid = $_POST['cid'];
		

		$sql = "DELETE FROM comments WHERE CID='$cid'";
		$result = mysqli_query($conn, $sql);

	}
}