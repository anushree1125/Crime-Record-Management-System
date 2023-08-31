<?php
$conn = mysqli_connect("localhost", "root", "", "crime3");
$user_id = $_REQUEST['user_id'];
		$sql = "DELETE FROM user WHERE user_id= '".$user_id."'";
		if ($conn->query($sql) === TRUE) {
			echo "Record deleted successfully";
		  } else {
			echo "Error deleting record: " . $conn->error;
		  }
		  $conn->close();
          ?>