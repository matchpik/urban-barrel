<?php // Script 13.2 - functions.php
/* This page defines custom functions. */

// Checks if user is an administrator -- Returns Boolean
function is_administrator($name = 'Jeffrey', $value = 'Roberts') {

	// Check for the cookie and check its value:
	if (isset($_COOKIE[$name]) && ($_COOKIE[$name] == $value)){
		return true;
	} else {
		return false;
	}

} // End of is_administrator() function