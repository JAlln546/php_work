<!DOCTYPE html>
<html>
    <head>
        <title>Practice Time</title>
        <style type="text/css">
            h1 {
                text-align:center;
            }
            
            p, h3, h4 {
                text-transform:capitalize;
            }
            
            main {
                width:40%;
                margin:40px auto;
                border:1px solid teal;
                border-radius:5px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <h1>Trial Time W/ DB!</h1>
        

<?php 

define('BASEPATH', dirname(__FILE__));

require BASEPATH . '/secret.php';

function connectDB() {
    try {
        $pdo = new PDO(
           'mysql:host=' .DBHOST.';dbname='.DBNAME, DBUSER, DBPASSWORD
           );
           
           //pdo stands for php data objects
           //class handles connections on variety of different databases
           $pdo->setAttribute(
               PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
            );
            
           // $pdo->exec("SET NAMES 'utf8");
            return $pdo;
    } catch (PDOException $e) {
        echo "DB Connection error: " . $e->getCode() . 
             " - " . $e->getMessage();
             
    }
    return null;
}


$db = connectDB();

if ($db == null) {
    echo "UH OH!"; 
    die();
}

$query = $db->prepare('SELECT * FROM People');
$query->execute();
$results = $query->fetch(PDO::FETCH_ASSOC);
//var_dump($results);

$query2 = $db->prepare("SELECT * FROM People WHERE id = :id");
$query2 = $query->execute();

?>
<main>
    <h3>We will display our data below!</h3>
    <p>You're favorite musician is: </p>
    <h4><?php echo $results['name']; ?></h4>
</main>

    </body>
</html>
