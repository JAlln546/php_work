<!DOCTYPE html>
<html>
    <head>
        <title>Guestbook</title>
    </head>
    <body>
        <h1>
            My Guestbook
        </h1>
        <hr>
        <?php 
            // Track fields with errors
            $errors = [];
            
            //Only process on Submit.
            $guest_name = $guest_email = $phone = '';
            
            if($_SERVER['REQUEST_METHOD']=='POST') {
                if (empty($_POST['guest_name'])) {
                    
                      $errors[] = 'guest_name';
                      
                 } else {
                     
                       $guest_name = $_POST['guest_name'];
              }
            
            if (isset($_POST['guest_email'])) {
                
                $guest_email = $_POST['guest_email'];
                
                if(!filter_var($guest_email, FILTER_VALIDATE_EMAIL)){
                    $errors[] = 'guest_email';
                   
                } 
            } else {
                    
                    $errors[] = 'guest_email';
                }
            
            if (isset($_POST['phone'])) {
                
                $phone = $_POST['phone'];

                //Check if the variable $int is an integer:
            if (!filter_var($phone, FILTER_VALIDATE_INT)) { 
                echo "Only integer values are required!";
                exit();
            } else {
                // Convert the integer to array
                $int_array  = array_map('intval', str_split($phone));
                //get the lenght of the array
                $int_length = count($int_array);
            }
                //Check to make sure the lenght of the int does not exceed or less than10
            if ($int_length != 10) {
                echo "Only 10 digit numbers are allow!";
                exit();
            } else {
                echo $phone. " is an integer and its lenght is exactly " . $int_lenght;
                //Then proceed with your code
            
                $errors[] = $_POST['phone'];
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
            
            fwrite($guestFile, "Guest:  $guest_name\n Email: $guest_email\n Phone: $phone\n\n"
            );
            
            fclose($guestFile);
            
            echo "<strong>Thank you, $guest_name, for the message!</strong>";
            $guest_name = $guest_email = $phone = '';
            
            }
            
            
            
            }
         ?>
        <h3>
            Sign the Guestbook!
        </h3>
        <em>* fields are required</em>
        <Form method="post" action="guests.php">
            <p>
                <label name="guest_name">
                    Enter your name:*
                </label><br>
                <input type="text" name="guest_name" value="<?php echo $guest_name; ?>"/>
                <?php if (in_array('guest_name', $errors)): ?> 
                   
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <p>
                <label for="email">
                    Enter a valid Email:*
                </label><br>
                <input type="text" name="guest_email" value="<?php echo $guest_email; ?>"/>
                <?php if (in_array('guest_email', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
            </p>
            <p>
                <label for="phone">
                    Enter a 10 digit Phone Number:
                </label>
                <br>
                <input type="text" name="phone" value="<?php echo $phone; ?>"/><Br>
                     <?php if (in_array('phone', $errors)): ?>
                <span style="color:dodgerblue;">Field is required.</span>
                <?php endif ?>
                
                <button type="submit">Submit Entry</button>
            </p>
            
            
        </Form>
    </body>
</html>

