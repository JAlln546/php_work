<?php include 'header.php'; ?>

    <h2>~~~~~ Exercise 15 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>Functions in PHP can help automate repetitive tasks and enable you to reuse code with a simple function call. For your first function, we'll keep it really simple.</p>

    <p>For this PHP exercise, create a function called "hello" that outputs that phrase we all know and love, "Hello, World!" to the browser. Call the function.</p>

        <section>
        <h3>The Working App:</h3>
            <?php
                function hello() {
                    echo "Hello World!";
                }
            hello();
            
            ?>

        </section>
        
        
        
        <h2>~~~~~ Exercise 16 ~~~~~</h2>
        <h4>Instructions</h4>
        <p>This PHP exercise has two parts. For the first, you will create a function to accept two arguments, perform a calculation using them, then return a sentence with the result to the browser. The function will calculate the area of a rectangle, with the two arguments being width and height. (Reminder: area = width * height.) The sentence to be returned is "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the arguments and $area is the result.</p>
        
         <section>
        <h3>The Working App:</h3>
            <?php
                function rectangle($l, $w) {
                    $area = $l * $w;
                    echo "A rectangle of length $l and width $w has an area of $area.";
                }
                
                rectangle(6, 12);
            
            ?>
        </section>
        
        
        
        <h2>~~~~~ Exercise 17 ~~~~~</h2>
        <h4>Instructions</h4>
        <p>For this PHP exercise, you will rewrite the rectangle area function from #2 once again, this time to accept user input. Present a form to the user with the message "Please enter the values of the length and width of your rectangle." Below this, supply two text boxes, one for length and one for width. Using your function to process the user supplied values, return the result statement from the previous exercise to the user. Reminder: the statement was "A rectangle of length $l and width $w has an area of $area.", where $l and $w are the arguments and $area is the result.</p>
        
        
        <section>
        <h3>The Working App:</h3>
            <?php
            
                if(!isset($_POST['submit'])) {
            ?>
            
            <form method="post" action="#">
                <h5>Please Enter a Length and Width!</h5>
                <label for="length">Length</label>
                <input type="text" name="length"/><br>
                <label for="width">Width</label>
                <input type="text" name="width"/><br>
                <input type="submit" name="submit" value="Submit"/>
            </form>
            <?php
                } else {
                    $l = $_POST['length'];
                    $w = $_POST['width'];
                    rectangle($l, $w);
            }
            
            ?>
        </section>
        
        
        <h2>~~~~~ Exercise 18 ~~~~~</h2>
        <h4>Instructions</h4>
        <p>For this PHP exercise, first create an array called $months. Use the names of the months as keys, and the number of days for each month as values. For February, use the following for your value: "28 days, if leap year 29".</p>

            <p>Next, write a function to create an option element for a form's select field. Make sure each option will be upper case. Both the array and the function should precede the HTML for the page.</p>
            <p>
            Once again, you will be requesting user input. Create a form for the user with the request, "Please choose a month." Next, provide a select field with the months as options, looping through the array you created and using the function to create the option elements.</p>
            <p>
            When the user clicks the submit button, return the statement "The month of $month has $number days.", where $month is the name of the month the user chose, and $number is the number of days. Be sure to include a different response for February.</p>
            
        
            <section>
        <h3>The Working App:</h3>
        
        <?php 
            $months = array(
                "January" => 31,
                "February" => "28 days, if leap year 29",
                "March" => 31,
                "April" => 30,
                "May" => 31,
                "June" => 30,
                "July" => 31,
                "August" => 31,
                "September" => 30,
                "October" => 31,
                "November" => 30,
                "December" => 31
                );
                
            function option($str){
                echo "<option value=\"$str\">" . ucfirst($str) . "</option>";
            }
            if(!isset($_POST['submit'])) {
                
        ?>
            <form method="post" action="#">
                <select name="month">
                    <?php
                        foreach($months as $m => $v) {
                            option($m);
                        }
                    ?>
                </select><br>
                <input type="submit" name="submit" value="Submit"/>
            </form>
        <?php
            } else {
                    $month = $_POST['month'];
                    
                    if($month == "February") {
                        echo "The month of $month has " . $months['February'] . ".";
                    } else {
                        echo "The month of $month has $months[$month] days.";
                    }
                }
            
        
        ?>
        
        </section>
        
        
        
        <h2>~~~~~ Exercise 19 ~~~~~</h2>
        <h4>Instructions</h4>
        <p>For this PHP exercise, you will again write two versions of your script. Start with the script from Arrays Ex. #3 and write a function to create form checkbox elements from the arguments supplied. This function should be able to take a variable number of arguments so that you can create any number of checkboxes calling it only once. Add your function at the beginning of your file before the HTML. Make sure each item is upper case.</p>

       <p>Now rewrite the original form presented to the user with the checkbox function. Make sure the list returned to the user in the second part of the script is also upper case.</p>
       
       <section>
        <h3>The Working App:</h3>
        <?php
            function checkbox(){
                $args = func_get_args();
                foreach($args as $a){
                    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\">" . ucwords($a) . "<br>\n";
                    
                }
            }
        
        ?>
        <h5>How's your weather now?</h5>
        <?php
            if(!isset($_POST['submit'])){
        
        ?>
        <form method="post" action="">
            <h4>
            What City are you recording from?
        </h4>
        <input type="text" name="city"/><br>
        <h4>
            What Month?
        </h4>
        <input type="text" name="month"/><br>
        <h4>
            What Year?
        </h4>
        <input type="text" name="year"/><br>
        <h4>
            Weather Conditions:
        </h4>
        <p>Choose all that apply:<br>
        <?php
            checkbox('sunshine', 'clouds', 'rain', 'hail', 'sleet', 'snow', 'wind', 'cold', 'heat');
        
        ?>
        </p>
        <input type="submit" name="submit" value="Submit"/>
        </form>    
        <?php
            } else {
                $input = array(
                    $_POST['city'],
                    $_POST['month'],
                    $_POST['year']
                    );
                echo "In $input[0] in the month of $input[1] $input[2], you observed the following weather: <br>";
                echo "<ul>";
                $weather = $_POST['weather'];
                foreach($weather as $w) {
                    echo "<li>" . ucwords($w) . "</li>";
                }
                echo "</ul>";
            }
        
        ?>
        </section>
<?php include 'footer.php'; ?>