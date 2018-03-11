<?php // Script 13.11 - index.php
/* This is the home page for this site. It displays:
 - The most recent quote (default)
 - OR, a randomly picked quote
 - OR, a randomly picked favourite quote */

 // Include header
 include('header.html');

 // Need the database connection
 include('../mysqli_connect.php');

 // Define the query
 // Conage the particulars depending on values passed in URL:
 if (isset($_GET['random'])) {
 	$query = 'SELECT id, quote, source favourite FROM quotes ORDER BY RAND() DESC LIMIT 1';
 } elseif (isset($_GET['favourite'])) {
 	$query = 'SELECT id, quote, source, favourite FROM quotes WHERE favourite=1 ORDER BY RAND() DESC LIMIT 1';
 } else {
 	$query = 'SELECT id, quote, source, favourite FROM quotes ORDER BY date_entered DESC LIMIT 1';
 }
 	// RUN THE QUERY
 if ($result = mysqli_query($dbc, $query)) {

 	// Retrieve teh returned record
 	$row = mysqli_fetch_array($result);

 	// Print the record
 	print "<div><blockquote>{$row['quote']}</blockquote>- {$row['source']}";

 	// Is this a favourite
 	if ($row['favourite'] == 1) {
 		print '<strong>Favourite!</strong>';
 	}

 	// Complete the DIV
 	print '</div>';

 	// If the admin is logged in, display admin links for this record:
 	if (is_administrator()){
 		print "<p><b>Quote Admin:</b> <a href=\"edit_quote.php?id={$row['id']}\">Edit</a> <->
 		<a href=\"delete_quote.php?id={$row['id']}\">Delete</a></p>\n";
 	}
 
 } else { // Query didn't run
 	print '<p class="error">Could not retrieve the data because: <br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
 } // End of query IF.

 mysqli_close($dbc); // close connection

 print '<p><A href="index.php">Latest</a> <-> <a href="index.php?random=true">Random</a> <-> <a href="index.php?favourite=true">Favourite</a></p>';

 include('footer.html'); // include the footer.
 ?>