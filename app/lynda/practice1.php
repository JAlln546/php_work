<?php 
            // Track fields with errors
            $errors = [];
            
            //Only process on Submit.
            $guest_name = $guest_email = $message = '';
            
            if($_SERVER['REQUEST_METHOD']=='POST') {
                if (empty($_POST['yourName'])) {
                    
                      $errors[] = 'yourName';
                      
                 } else {
                     
                       $yourName = $_POST['yourName'];
              }
            
            if (isset($_POST['yourAge'])) {
                
                $yourAge = $_POST['yourAge'];
                
                if(!filter_var($yourAge, FILTER_VALIDATE_EMAIL)){
                    $errors[] = 'yourAge';
                   
                } 
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