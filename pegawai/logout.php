<?php
session_start();

$_SESSION = [];
session_destroy();
session_unset();
session_abort();

header("Location: login.php");
