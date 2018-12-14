<?php

echo "\n".
    "Welcome to FIFA Women's World Cup!\n".
    "============================================\n\n".
    "Watch as your US Women's National Team play the field!\n";
    
    echo "To start the tournament press [ENTER]\n";
    $answer = fgets(STDIN);
    level1($answer);
    rapinoe($answer2);
    goal();

function level1($answer){
    switch ($answer){
        case 1:
            echo "Rapinoe gets the ball and heads down the left flank.\n";
            rapinoe();
            break;
        case 2:
            echo "Your move beat the gnome.\n";
            morgan();
            break;
        default:
            echo "Kick off!  Who do you pass to first?\n".
                "Do you [1] play Rapinoe, or [2] play Morgan?";
                level1(fgets(STDIN));
    }
}

function rapinoe($answer2){
    switch ($answer2) {
        case Morgan:
            echo "Morgan gets the ball and shoots and scores!";
            goal();
            break;
        case Julie:
            echo "JJ heads the ball of rapinoe's cross, and she scores!";
            goal();
            break;
        default:
            echo "Rapinoe lifts her head and sees!\n".
                "[Morgan] or [Julie]\n";
    }
}

function goal() {
    echo "\n".
    "============================================\n".
    "|            GOOOOOAAAAALLLLLL!            |\n".
    "============================================\n\n".
    "USA wins the game!!";
}