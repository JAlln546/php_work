<?php include 'header.php'; ?>

<h5>Note: Submitting on one form automatically submits all forms, you may see some empty responses! <br> Please browse to the previous page to try the next form!</h5>

<h2>~~~~~ Exercise 8 ~~~~~</h2>
<h4>Instructions</h4>
<p>One very useful thing you can do with PHP is include the request for user input and the response in the same file, using conditional statements to tell PHP which one to show. For this PHP exercise, rewrite the two files of the previous exercise into one file using an if-else conditional statement.</p>

<p>Hint: You'll need some way to tell if the form has been submitted. The function to determine if a variable has been set and is not null is isset().</p>
<section>
        <h3>The Working App:</h3>

    <?php
        
        if(empty($_POST['submit'])){
            
    ?>
    
            <h4>
        Here is a basic form that processes within itsef
    </h4>
    <form method="post" action="#">
    <h5>
        <label for="city">What City You Be From?</label>
    </h5>
        <input type="text" name="city"/><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    <?php
        } else {
            $city = $_POST['city'];
            echo "<p>Thank God you Live in $city!</p>";
        }
    
    ?>
    </section>
   
    
    
    <!--
        Laugh on Monday, laugh for danger. 
        Laugh on Tuesday, kiss a stranger. 
        Laugh on Wednesday, laugh for a letter.
        Laugh on Thursday, something better.
        Laugh on Friday, laugh for sorrow.
        Laugh on Saturday, joy tomorrow.
    -->
    <br>
    <h2>~~~~~ Exercise 9 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>For this PHP exercise, you will use the same format as the previous exercise, requesting input in the first part, and responding in the second, through the magic of PHP's if-else statement. In the first section, give the user an input field and request that they enter a day of the week.</p>

        <p>For the second section, you'll need the following poem:</p>
        
        <p><em>Laugh on Monday, laugh for danger.<br> 
        Laugh on Tuesday, kiss a stranger.<br> 
        Laugh on Wednesday, laugh for a letter.<br>
        Laugh on Thursday, something better.<br>
        Laugh on Friday, laugh for sorrow.<br>
        Laugh on Saturday, joy tomorrow.</em></p>
        
        <p>Using the else-elseif-else construction, set each line to output in response to the day the user inputs, with a general response for any input that is not in the poem.</p>
        
        <section>
        <h3>The Working App:</h3>
    <?php
        if(!isset($_POST['submit'])) {
    ?>        
            <h4>
        Here is a basic form that processes within itsef
    </h4>
    <form method="post" action="#">
    <h5>
        <label for="day">What Day Is It?</label>
    </h5>
        <input type="text" name="day"/><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    
    <?php
        } else {
            
            $day = $_POST['day'];
            if($day == 'Monday'){
                echo "Laugh on $day, laugh for danger.";
            } elseif ($day == 'Tuesday'){ //tuesday
                echo "Laugh on $day, kiss a stranger.";
            } elseif ($day == 'Wednesday'){ //wednesday
                echo "Laugh on $day, laugh for a letter.";
            } elseif ($day == 'Thursday'){ //thursday
                echo "Laugh on $day, something better.";
            } elseif ($day == 'Friday') { //friday
                echo "Laugh on $day, laugh for sorrow.";
            } elseif ($day == 'Saturday'){ //saturday
                echo "Laugh on $day, joy tomorrow.";
            } else {
                echo "Must be $day!  Take a break!";
            }
        }
    ?>
    
    
    </section>
    <?php include 'footer.php'; ?>