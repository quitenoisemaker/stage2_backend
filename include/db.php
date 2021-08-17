<?php
		$conn =new mysqli('localhost', 'root', '' , 'cv');
		if ($conn->connect_error) {
			echo "<b>Error:</b> Connection failed - $conn->connect_error";
		}
?>