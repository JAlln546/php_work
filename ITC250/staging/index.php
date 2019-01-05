<?php
session_start();

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
        <title>
            Jess Allen Staging Doc
        </title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
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
        <h1>
            Login!<br>
        </h1>
        <hr>
        <main> 
        
        
        <?php
        
       // if ($_SESSION['valid'] != true) {
        
        ?>
            <h2>
                Please Login to See the Full Course Work List!
            </h2>
        
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!empty($_POST['username']) && !empty($_POST['password'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    
                    $query = $db->prepare(
                            'SELECT * FROM member_users '.
                            'WHERE username = :username'
                        );
                    $query->execute([
                        'username' => $username
                        ]);
                        
                        $result = $query->fetch(PDO::FETCH_ASSOC);
                        if (isset($result['password'])) {
                            if (password_verify($password, $result['password'])) {
                                $_SESSION['valid'] = true;
                                $_SESSION['name'] = $result['name'];
                                $_SESSION['id'] = $result['id'];
                                header('Location: /coursework.php');
                            }
                        }
                        echo "<h3><strong>Sorry, credentials do not match.</strong></h3>";
                } else {
                    echo "<h3><strong>Must enter a username and password.</strong></h3>";
                }
            }
        ?>
        
                 
                <form method="post" action="">
            
            <p>
                <label for="username">
                    Username: 
                </label>
                <input type="text" name="username"/>
            </p>
            <p>
                <label for="password">
                    Password:
                </label>
                <input type="password" name="password"/>
            </p>
            
            <input type="submit" value="Login"/>
        </form>
        <br><br>
        <p class="register">Don't have a login yet?  <a href="adduser.php">Register</a></p>
            
        
        </main>
        <?php
        //}
        ?>
        
    </body>
</html>
