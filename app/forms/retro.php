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
            <li>
                <?php
                     if (isset($_POST['console'])){
                      echo $_POST['console'];
                }
                ?>
            </li>
            <?php endif ?>
        </ul>
       <h3>Add New Retro Console</h3>
        <form method="post" action="">
            <p>
            <label for="console">
                Console Name
            </label>
            </p>
            <input type="text" name="console" value=""/>
            <button type="submit">Add to List</button>
        </form>
    </body>
</html>