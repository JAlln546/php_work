<!DOCTYPE html>
<html>
    <head>
        <title>Fancy Date Formatter</title>
        <link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Oswald" rel="stylesheet">
        <style type="text/css">
            h1 {
                /* font-family: 'Gamja Flower', cursive; */
                font-family: 'Oswald', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Fancy Date Formatter</h1>
        
        <?php
            if($_SERVER['REQUEST_METHOD']== 'POST') {
                if (isset($_POST['date'])) {
                    $userDate = new DateTime($_POST['date']);
                    //$britishDate = DateTime::createFromFormat("d/m/Y", $_POST["date"]);
                    
                    echo "<strong>The User Said: " .
                        $userDate->format("F jS, Y").
                        "</strong>";
                }
            }
        
        ?>
        
        <form method="post" action=" ">
            <p>
                <label>Date</label>
                <input type="text" name="date" value="" placeholder="mm/dd/yyy" />
            </p>
            
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>