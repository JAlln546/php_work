<?php
session_start();

if ($_SESSION['valid'] != true) {
    header("Location: /index.php");
}

define('BASEPATH', dirname(__FILE__));

require_once BASEPATH . '/connect.php';

$db = connectDB();

if ($db == null) {
    echo "UH OH!";
    die();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ITC250 CourseWork</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <header>
            <h2>
                Jess Allen Staging Area
            </h2>
            <h3>
                Currently logged in as <?php echo $_SESSION['name']; ?>
                |
                <a href="logout.php">Logout</a>
                </h3>
        </header>
    <body>

        <h1>
            Welcome! Thanks for signing up!
        </h1>

            <hr>
            <main>
        <h3>Module 1</h3>
        <ul>
            <li>R1: The Clean Coder <a href="https://docs.google.com/document/d/1o0ZyN-BTuGVV9MNzfRl0xix7HuE_42bXRnKogBeVJLg/edit?usp=sharing" class="module" target="_blank">-></a></li>
            <li>V1: Database Schema <a href="https://docs.google.com/document/d/1SpGxaBWpE_FRj9a-I0wZgg-i_dAXg8N-bsFCjQQX998/edit?usp=sharing" class="module" target="_blank">-></a></li>
            <li>P1: Temperature Converter <a href="https://www.jessallen.me/php/tempConverter.php" class="module" target="_blank">-></a></li>
            <li>Week 1 Class Exercises <a href="https://docs.google.com/document/d/1MIwdOl3jvHj0yFVNlCOz9g3qPXrUmTTyyfcoLEXGrVg/edit?usp=sharing" class="module" target="_blank">-></a></li>
        </ul>
        <hr>


</main>


        <hr>
    </body>
</html>
