<!DOCTYPE html>
<html>
    <head>
        <title>Halloween Mad Lib</title>
          <link rel="stylesheet" href="style.css" type="text/css" />
          <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
        
    </head>
    <body>
        <h1>Halloween Mad Lib Form</h1>
        
        <?php
            $adj_1 = $_GET['adj_1'];
            $noun_1 = $_GET['noun_1'];
            $noun_2 = $_GET['noun_2'];
            $p_noun_1 = $_GET['p_noun_1'];
            $p_noun_2 = $_GET['p_noun_2'];
            $p_noun_3 = $_GET['p_noun_3'];
            $pt_verb_1 = $_GET['pt_verb_1'];
            $verb_1 = $_GET['verb_1'];
            $p_noun_4 = $_GET['p_noun_4'];
            $exclamation = $_GET['exclamation'];
            $verb_2 = $_GET['verb_2'];
            $p_noun_5 = $_GET['p_noun_5'];
            $noun_3 = $_GET['noun_3'];
            $noun_4 = $_GET['noun_4'];
            $noun_5 = $_GET['noun_5'];
            $noun_6 = $_GET['noun_6'];
            $verb_3 = $_GET['verb_3'];
            $p_noun_6 = $_GET['p_noun_6'];
            
            
            echo "<p> Once upon a time, in a $adj_1 land lived a little witch named Ebony and her " . $noun_2 .
            ". They lived in a spooky $noun_2 on top of a hill, 
            far from town.</p>
            
            <p>Every year, the witch family did the same thing on Halloween:
                they jumped on their $p_noun_1 and flew through the 
                town, scaring young $p_noun_2. They circled in the sky,
                high above the $p_noun_3. They cackled.  They $pt_verb_1. 
                They scared anyone and anything that they saw.</p>
                
                <p> This year, Ebony didnt want to scare the townspeople.  She wanted to $verb_1 
                with the other kids.  All year long, Ebony dreamed of 
                walking with the other $p_noun_4, knocking on doors, and saying \"$exclamation\"! 
                She wished she could do what her friends bragged about
                year after year: sit on the floor after a long night of Trick-or-Treating,
                empty her bag, and $verb_2 the many sweet $p_noun_5 she
                collected.</p>
                
                <p>Ebony had a super sweet tooth.  She loved $noun_3 more than anything.
                \"This will be different\", she thought.</p>
                <p>On Halloween night, while her family sat on their broomsticks, ready to
                spook the townspeople, Ebony wasn't there.  Instead, she traded her witch hat
                and broom for a $noun_4 and $noun_5.</p>
                <p>Can you guess what she dressed as?  You got it- she was a $noun_6! 
                And she collected more candy than she ever dreamed.</p>
                
                <p>Her family told her, as they shared her lollipops and candy bars, 
                \"Ebony, we were wrong to $verb_3 people on Halloween
                night.  From now on, this family will go Trick-or-Treating!  And the 
                great thing is that we don't even need $p_noun_6!\"";
        ?>
        <p><a href="/">Go Back</a></p>
        
        </body>
        </html>