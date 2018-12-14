<?php

$data = [
        'Nintendo NES',
        'Super Nintendo',
        'Nintendo 64'
    ];
    
    ?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>My Retro Gaming List</title>
    </head>
    <body>
        <h1>My Retro Gaming Console List</h1>
        
        <ul>
            <?php foreach($data as $console): ?>
        <li>
            <?php echo $console; ?>
        </li>    
        <?php endforeach ?>
        <?php if($_SERVER['REQUEST_METHOD']=='POST'): ?>
        <li><?php
                if (isset($_POST['console'])){
                    echo $_POST['console'];
                }
                ?>
                <ul>
                    <?php if (isset($_POST['properties'])): ?>
                    <?php foreach($_POST['properties'] as $prop): ?>
                    <li>
                        <?php echo $prop; ?>
                    </li>
                    <?php endforeach ?>
                </ul>
                <?php endif ?>
            
        </li>
        <?php endif ?>
        </ul>
        <pre>
            <?php var_dump($_POST); ?>
        </pre>
        <h3>Add New Retro Console</h3>
        <form method="post" action="">
            <p>
            <label for="console">
                Console Name
            </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="properties[]" value="2 Player">
                    Supports 2 Players
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="properties[]" value="Working Condition">
                    Working Condition
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="properties[]" value="Power Supply">
                    Power Supply
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="properties[]" value="TV Adapter">
                    Has TV Adapter
                </label>
            </p>
            <input type="text" name="console" value=""/>
            <button type="submit">Add to List</button>
        </form>
    </body>
</html>