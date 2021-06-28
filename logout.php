<?php
session_name('revweb');
session_start();
unset($_SESSION['auth'], $_SESSION['name'], $_SESSION['login']);
header('Location: index.php');
