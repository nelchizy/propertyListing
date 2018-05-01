<?php

// Inialize session
session_start();
$usn = session::get('users');
$id = session::get("aff_id");
$e = session::get("email");
$p = session::get("password");
$name = session::get("full_name");
// Delete certain session
unset($usn);
unset($id);
unset($e);
unset($p);
unset($name);
session::destroyUser();
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: agentLogin.php');

?>