<?php

unset($_SESSION['teams']);
unset($_SESSION['team']);
unset($_SESSION['players']);
unset($_SESSION['player']);
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['register']);
unset($_SESSION['validate']);

$id = null;
$team = null;

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['team'])) {
    $team = $_GET['team'];
}