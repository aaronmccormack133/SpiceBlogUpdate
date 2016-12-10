<?php

function setComments($conn){
	if(isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "INSERT INTO comments2 (uid, date, message) VALUES ('$uid', '$date', '$message')";
$result = mysqli_query($conn, $sql);
	}
}

function getComments($conn){
	$sql = "SELECT * FROM comments2";
	$result = mysqli_query($conn, $sql);
	while($row = $result->fetch_assoc()){
		$id = $row['uid'];
		$sql2 = "SELECT * FROM user WHERE id='$id'";
		$result2 = mysqli_query($conn, $sql2);
		if($row2 = $result2->fetch_assoc()){
			echo "<div class = 'comment-box'><p>";
			echo $row2['uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['message']);
		echo "</p>";
		if(isset($_SESSION['id'])){
			if($_SESSION['id'] == $row2['id'] ){
				echo "<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
				<input type='hidden' name='cid' value='".$row['cid']."'>

				<button type='submit' name='commentDelete'>Delete</button>
			</form>
			<form class='edit-form' method='POST' action='editcomments.php'>
				<input type='hidden' name='cid' value='".$row['cid']."'>
				<input type='hidden' name='uid' value='".$row['uid']."'>
				<input type='hidden' name='date' value='".$row['date']."'>
				<input type='hidden' name='message' value='".$row['message']."'>
				<button>Edit</button>
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

		$sql = "UPDATE comments2 SET message='$message' WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);
		header("Location: index.php");
	}
}


function deleteComments($conn){
		if(isset($_POST['commentDelete'])){
		$cid = $_POST['cid'];
		

		$sql = "DELETE FROM comments2 WHERE CID='$cid'";
		$result = mysqli_query($conn, $sql);
		header("Location: index.php");
	}
}