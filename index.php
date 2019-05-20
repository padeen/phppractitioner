<?php
require 'functions.php';
require 'task.php';

$pdo = connectToDb();
$statement = $pdo->prepare('select * from todos');
$statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$tasks = [
    new Task('Have dinner'),
    new Task('Write some classes'),
    new Task('Work out')
];

$tasks[0]->complete();

$names = ['Jerry', 'Glen', 'Waylon'];

$jsPrimitives = [
    'number' => 31,
    'string' => 'Donald Knuth',
    'boolean' => true,
    'undefined' => ''
];

$jsPrimitives['null'] = '';
unset($jsPrimitives['number']);

$task = [
    'title' => 'follow php practitioner',
    'due' => '2019/5/20',
    'assigned_to' => 'Padeen',
    'completed' => false
];

require 'index.view.php';