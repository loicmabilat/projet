<?php
session_start();
$_SESSION = array();

header("Location: index.html");
kill_session();

?>

