<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.

 
// Redirect to main page
if(session_destroy()){
    
    header("location: index.html");

}

exit;
?>