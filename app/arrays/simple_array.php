<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <title>To Do List</title>
    </head>
    
    <body>
        <h1>To Do List</h1>
        <?php
            $dataFromDatabase = ["get milk", "finish homework", "walk the dog", "wnfc site"];
        ?>
        <ul>
            <?php foreach($dataFromDatabase as $todoItem): ?>
                <li>
                    <?php echo ucwords($todoItem); ?>
                </li>
            <?php endforeach ?>
        </ul>
    </body>
    
</html>