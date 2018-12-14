<?php

$userInput = 'Bob';

echo "This is output of else / if\n";
if ($userInput == 'Sally' || $userInput == 'Jeff'){
    echo $userInput. ' loves to eat squash.';
}else if ($userInput == 'Bob'){
    echo $userInput. ' love to eat pumpkins';
}

echo "This is output from switch\n";

switch ($userInput) {
    case 'Sally':
        echo $userInput. ' love to eat squash';
        break;
    
    case 'Jeff':
        echo $userInput. ' love to eat squash';
        break;
        
    case 'Bob':
        echo $userInput. ' loves to eat pumpkins';
        break;
    
    Default: echo "You must entera value between 1 and 3";
}