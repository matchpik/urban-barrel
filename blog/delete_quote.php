<?php // Script 13.10 - delete_quote.php
/* This script deletes a qupte. */

// Define a page title and include the header:
define('TITLE','Delete Posts');
include('templates/header.html');

print '<h2> Delete a Post </h2>';

// Restrict access to administrators only:
if (!is_administrator()) {
	print '<h2>Access Denied</h2><p class="error">You do not have permission to access this page.</p>';
	include('templates/footer.html');
	exit();
}

// Need the database connection
include('../mysqli_connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['id'] > 0)) { // Display the entry in a form:

	// Define the query.
	$query = "SELECT quote, source, favourite FROM quotes WHERE id={$_GET['id']}";
	if ($result = mysqli_query($dbc, $query)) { // Run the query

		$row = mysqli_fetch_array($result); // Retrieve the information

		// Make the form:
		print '<form action="edit_quote.php" method="post">
		<p><label>Quote <textarea name="quote" rows="5" cols="30">' . htmlentities($row['quote']) . '</textarea></label></p>
		<p><label>Source <input type="text" name="source" value="' . htmlentities($row['source']) . '"></label</p>
		<p><label>Is this a favourite? <input type="checkbox" name="favourite" value="yes"';

		// Check if the box is checked
		if ($row['favourite'] == 1) {
			print ' checked="checked"';
		}

		// Complete the form:
		print '></label></p>
		<input type="hidden" name="id" value="' . $_GET['id'] . '">
		<p><input type="submit" name="submit" value="Update This Quote!"></p>
		</form>';
	
	} else { // Couldn't get the information.
		print '<p class="error">Could not retrieve the quotation because: <br>' . mysqli_error($dbc) .'.</p><p>The query being run was: '. $query . '</p>';
	}

} elseif (isset($_POST['id']) && is_numeric($_POST['id']) && ($_POST['id'] > 0 )) { // Handle the form

	// Define the query
	$query = "DELETE FROM quotes WHERE id={$_POST['id']} LIMIT 1";
	$result = mysqli($dbc, $query); // Execute the query.

	// Report on teh result:
	if (mysqli_affected_rows($dbc) == 1) {
		print '<p>The quote entry has been deleted.</p>';
	} else {
		print '<p class="error">Could not delete the blog entry because: <br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
	}

} else { // No ID received
	print '<p class="error">This page has been accessed in error.</p>';
} // End of Main

mysqli_close($dbc); // Close the connection

include('templates/footer.html');
?>