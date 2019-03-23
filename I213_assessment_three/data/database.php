<?php
$db = new SQLite3('data/db.sqlite3', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

if(isset($_SESSION["teams"])) {
    $results = $db->query('SELECT team, colour FROM teams');
    output($results);
    
}

if(isset($_SESSION["players"])) {
    $stmt = $db->prepare('SELECT * FROM players WHERE team =:team');
    $stmt->bindValue(':team', $_SESSION['team'], SQLITE3_TEXT);
    $result = $stmt->execute();
    output($result);
}
if(isset($_SESSION["team"])) {
    $stmt = $db->prepare('SELECT * FROM teams WHERE team =:team');
    $stmt->bindValue(':team', $_SESSION['team'], SQLITE3_TEXT);
    $result = $stmt->execute();
    output($result);
}

//more db queries to go here

function output($results) {
    $data = array();
    while ($res = $results->fetchArray(1)) {
    
        array_push($data, $res);
    }

echo "{\"data\":" . json_encode($data) . "}";
exit();
}