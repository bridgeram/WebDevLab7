<?php
    $country=$_GET['country'];
    $all=$_GET['all'];
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'world';
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    if ($all=='true'){
        $stmt = $conn->query("SELECT * FROM countries");
    }
    elseif($country != ""){
        $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
    }
    else{
        return 0;
    }
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<ul>';
    foreach ($results as $row) {
        echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';

