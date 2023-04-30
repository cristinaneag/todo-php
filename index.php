<!DOCTYPE html>
<html>
<head>
	<title>PHP To-Do List</title>
</head>
<body>

	<h1>PHP To-Do List</h1>

	<form method="POST">
		<input type="text" name="new_item" placeholder="New item">
		<button type="submit">Add</button>
	</form>

	<?php
	// check if the form was submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// get the new item from the form
		$new_item = $_POST["new_item"];
		// add it to the list
		if (!empty($new_item)) {
			$list[] = $new_item;
		}
	}

	// show the list
	if (!empty($list)) {
		echo "<ul>";
		foreach ($list as $item) {
			echo "<li>$item</li>";
		}
		echo "</ul>";
	} else {
		echo "<p>No items yet</p>";
	}
	?>

</body>
</html>
