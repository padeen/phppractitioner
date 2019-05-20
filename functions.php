<?php

function connectToDb() {
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }
}

function dd($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
