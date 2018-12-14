<?php

if (!defined(BASEPATH)) {
    define('BASEPATH', dirname(__FILE__));
}

require_once BASEPATH . '/connect.php';

$db = connectDB();

if ($db == null) {
    echo "Database connection error.";
    die();
}
        
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hacker Blog</title>
    </head>
    <body>
        <h1>Hacker Blog</h1>
        
        <?php 
            $query = $db->prepare('SELECT * FROM blog');
            $query->execute();
            $blogs = $query->fetchAll(PDO::FETCH_ASSOC);
            
        ?>
        <?php foreach($blogs as $blog): ?>
                <div>
                    <h3>
                        <?php echo $blog['title']; ?>
                    </h3>
                    <p>
                        <?php echo $blog['content']; ?>
                    </p>
                </div>
        <?php endforeach ?>
        
    </body>
</html>