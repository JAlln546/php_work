<!DOCTYPE html>
<html>
    <head>
        <title>Fun Times in PHP</title>
    </head>
    <body>
        <h3>Here is the practice-makes-perfect Page!!</h3>
        <?php
            $myName = "Jess";
            $age = 33;
            $location = "Seattle, WA";
            $favoriteColor = "blue";
            
            echo "Hey there!  My name is $myName!<br>
            I know we just met, but I would love to tell you about me!<br>
            I grew up in $location and have lived here for the majority of my life.<br>
            I am $age years old and I know that I ain't getting any younger!<br>
            Another bit of info.... my favorite color is $favoriteColor!<br>
            I do hope to see you soon and that you know you are love!!<br>
            <br>
            I have an idea!  Why don't you tell me about you!!!";
            
         // Track fields with errors
            $errors = [];
            
            //Only process on Submit.
            $yourName = $yourAge = $yourLocation = $favoriteColor = '';
            
            if($_SERVER['REQUEST_METHOD']=='POST') {
                if (empty($_POST['yourName'])) {
                    
                      $errors[] = 'yourName';
                      
                 } else {
                     
                       $yourName = $_POST['yourName'];
              }
            
            if (isset($_POST['yourAge'])) {
                
                $yourAge = $_POST['yourAge'];
                   
                 
            } else {
                    
                    $errors[] = 'yourAge';
                }
            
            if (isset($_POST['yourLocation'])) {
                
                $yourLocation = $_POST['yourLocation'];
                
            } 
            
            if (count($errors) > 0) {
                echo "<strong style='color: dodgerblue'>Fix the errors!</strong>";
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>Required Field: $error</li>";
                }
                echo "</ul>";
            } else {
                
                $guestFile = fopen('guest.txt', 'a');
            
            fwrite($guestFile, "Guest:  $guest_name\n Email: $guest_email\n Message: $message\n\n"
            );
            
            fclose($guestFile);
            
            echo "<strong>Thank you, $guest_name, for the message!</strong>";
            $guest_name = $guest_email = $message = '';
            
            }
            
            }
         ?>
        <form method="get" action="practice.php">
            <p>
                <label for="name">
                    What's your name?
                </label>
                <input type="text" name="yourName" value="<?php echo $yourName; ?>"/>
                <?php if (in_array('yourName', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <label for="age">
                    What's your age?
                </label>
                <input type="text" name="yourAge" value="<?php echo $yourAge; ?>"/>
                <?php if (in_array('yourAge', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <label for="location">
                    Where ya from?
                </label>
                <input type="text" name="yourLocation" value="<?php echo $yourLocation; ?>"/>
                <?php if (in_array('yourLocation', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <label for="favoriteColor">
                    What's your favorite color?
                </label>
                <input type="text" name="yourColor" value="<?php echo $yourColor; ?>"/>
                <?php if (in_array('yourColor', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <button type="submit">Shoot it to me!</button>
            
        </form>
    </body>
</html>