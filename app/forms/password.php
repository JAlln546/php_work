<?php

echo "Enter a password to hash: \n";
$password = fgets(STDIN);

echo "\n Your hashed password is: " .
    password_hash($password, PASSWORD_DEFAULT) . 
    "\n\n";
