<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=:width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
        background: #e0e0e0;
        padding: 4em;
        text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <?php 
            foreach ($jsPrimitives as $key => $jsPrimitive) {
                echo "<li>$key" . ": " . "$jsPrimitive</li>";
            }
        ?>
    </ul>

    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?php if($task->completed) :?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    <ul>

    <?= ucwords('This is rock solid'); ?>
    <ul>
        <?php foreach ($tasks as $heading => $description) : ?>
        <li>
            <strong><?= ucwords($heading); ?>: </strong> <?= $description; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>