<?php
session_name('revweb');
session_start();
$_SESSION['auth'] = FALSE;
if(!empty($_POST['login']) && !empty($_POST['password'])){
  $config = parse_ini_file('config.ini', TRUE);
  if($_POST['login'] == $config['auth']['login'] && $_POST['password'] == $config['auth']['password']){
    $_SESSION['auth'] = TRUE;
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['name'] = $config['auth']['name'];
  }
}

header('Location: index.php');
