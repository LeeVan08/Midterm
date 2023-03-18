<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hotel Reservation</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Welcome to Hotel Reservation!</h1>

	<?php
// Connect to database
include_once 'db_conn.php';


	// Retrieve the product information from the database
	$query = "SELECT * FROM rooms";
	$result = mysqli_query($conn, $query);

	// Display the product information on the shop interface
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div>';
			echo '<h2>' . $row['room_type'] . '</h2>';
			echo '<p>Price: ₱' . $row['room_price'] . '</p>';
			echo '<button><a href="reservation_form.php?product_id=' . $row['room_id'] . '">Reserve Now</a></button>';
			echo '</div>';
		}
	}

	// Close the database connection
	mysqli_close($conn);
	?>

</body>
<script src="js/bootstrap.js"></script>
</html>
