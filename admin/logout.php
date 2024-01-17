<?php
// logout by clear the session
session_destroy();

//redirect user to home page
header("Location: ?p=home")
?>