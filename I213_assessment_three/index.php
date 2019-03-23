<?php
session_start();
require_once 'config/config.php';
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.html';
        break;


    case '/api/teams':
    $_SESSION["teams"] = true;
    require __DIR__ . '/data/database.php';
    break;


    case '/api/players?team=' . $team:
    $_SESSION["team"] = $team;
    $_SESSION["players"] = true;
    require __DIR__ . '/data/database/php';
    break;

    case '/api/team?team=' . $team:
    $_SESSION["team"] = $team;
    require __DIR__ . '/data/database/php';
    break;


    default: 
        require __DIR__ . '/views/404.html';
        break;
}

