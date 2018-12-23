<?php include 'header.php'; ?>

<h5>Note: Submitting on one form automatically submits all forms, you may see some empty responses! <br> Please browse to the previous page to try the next form!</h5>

<!--
        Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:

        We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.
        
        Don't forget to include a title for your page, both in the header and on the page itself.
    -->
    <br>
    <h2>~~~~~ Exercise 10 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>Arrays allow you to assign multiple values to one variable. For this PHP exercise, write an array variable of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind. Using the array variable for all the weather conditions, echo the following statement to the browser:</p>

        <p>We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. At least we didn't get any hail or sleet.</p>
        
        <p>Don't forget to include a title for your page, both in the header and on the page itself.</p>
    <section>
        <h3>The Working App:</h3>
    <?php
        $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");
        
        echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";
    
    ?>
    </section>
    <!---
        For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.
        
        Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.
        
        Add the8 following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.
    -->
    <br>
    <h2>~~~~~ Exercise 11 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>For this exercise, you will use a list of ten of the largest cities in the world. (Please note, these are not the ten largest, just a selection of ten from the largest cities.) Create an array with the following values: Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London.</p>
        
        <p>Print these values to the browser separated by commas, using a loop to iterate over the array. Sort the array, then print the values to the browser in an unordered list, again using a loop.</p>
        
        <p>Add the8 following cities to the array: Los Angeles, Calcutta, Osaka, Beijing. Sort the array again, and print it once more to the browser in an unordered list.</p>
        
        <section>
        <h3>The Working App:</h3>
    <?php
    
    $city = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
    foreach($city as $c) {
        echo "$c, ";
    }
    
    sort($city);
    
    echo "<ul>";
    foreach($city as $c){
        echo "$c.<br>";
    }
    echo "</ul>";
    
    array_push($city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
    
    echo "<ul>";
    foreach($city as $c){
        echo "$c.<br>";
    }
    echo "</ul>";
    ?>
    </section>
    
    <!--
        For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items.

        In the response section of your script, create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.
        
        Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.
    -->
    
    <br>
    <h2>~~~~~ Exercise 11 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>For this PHP exercise, create a form asking the user for input about the weather the user has experienced in a month of the user's choice. In separate text fields, request the city, month and year in question. Below that, show a series of checkboxes using the same weather conditions you used in Arrays Ex. #1. (Those values were: rain, sunshine, clouds, hail, sleet, snow, wind.) Set up the form to create an array from the checked items.</p>

        <p>In the response section of your script, create an array using the city, month and year the user entered as values. Print the following response "In $city in the month of $month $year, you observed the following weather:", where $city, $month and $year are values from the array you created.</p>
        
        <p>Next, loop through the $weather[] array you received from the user to send back a bulleted list with the user's responses.</p>
       
    <section>
        <h3>The Working App:</h3>
    <?php
        
            if(!isset($_POST['submit'])) {
                echo "<br>Please Submit the Form!<br>";
    ?>
        <form method="post" action="#">
        <h4>
            <label for="city">What City are you recording from?</label>
        </h4>
        <input type="text" name="city"/><br>
        <h4>
            <label for="month">What Month?</label>
        </h4>
        <input type="text" name="month"/><br>
        <h4>
            <label for="year">What Year?</label>
        </h4>
        <input type="text" name="year"/><br>
        <h4>
            Weather Conditions:
        </h4>
        <input type="checkbox" name="weather[]" value="snow"/>
        <label for="snow">Snow</label><br>
        
        <input type="checkbox" name="weather[]" value="wind"/>
        <label for="wind">Wind</label><br>
        
        <input type="checkbox" name="weather[]" value="sunshine"/>
        <label for="sunshine">Sunshine</label><br>
        
        <input type="checkbox" name="weather[]" value="rain"/>
        <label for="rain">Rain</label><br>
        
        <input type="checkbox" name="weather[]" value="hail"/>
        <label for="hail">Hail</label><br><br>
        
        
        <input type="submit" name="submit" value="Submit"/>
        
    </form>            
    <?php
            } else {
                $userInput = array(
                    $_POST['city'],
                    $_POST['month'],
                    $_POST['year']
                    );
            
        
        echo "In $userInput[0] in the month of $userInput[1] $userInput[2], you observed the following weather: <ul>";
        
        
        $weather = $_POST['weather'];
        
        foreach($weather as $w) {
            echo "<li>$w.</li>";
        }
        echo "</ul>";
    }
    
    ?>
    </section>
    <!--
        Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the following statement to the browser: "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:" Follow this with an unordered list created by iterating through the array variable you created.

        Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions. Include another text box with the text "Add more?" and another submit button. When the user clicks this button, the page should reload with the new additions added to the previously expanded list. Your code should allow the user to add items as many times as they like.
    -->
    
    <br>
    <h2>~~~~~ Exercise 12 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>Create an array of modes of transportation, including Automobile, Jet, Ferry, Subway. Print the following statement to the browser: "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation:" Follow this with an unordered list created by iterating through the array variable you created.</p>

        <p>Next, give the user a text box and ask the user to add other modes of transportation to the list, separated by commas. When the user clicks 'Go', process the input with array functions to send back the original list with the user's additions. Include another text box with the text "Add more?" and another submit button. When the user clicks this button, the page should reload with the new additions added to the previously expanded list. Your code should allow the user to add items as many times as they like.</p>
        
        <section>
        <h3>The Working App:</h3>
    <h2>How are you Traveling?</h2>
    <?php
        if(!isset($_POST['submit'])) {
        
        $travel = array("Automobile", "Jet", "Ferry", "Subway");
        
        echo "Travel takes many forms, whether across town, across the country, or around the world. Here is a list of some common modes of transportation: <ul>";
        foreach($travel as $t) {
            echo "<li>$t</li>";
        }
       
    
    ?>
    </ul>
    <form method="post" action="#">
        <h4>
            Would you like to add some travel modes?
        </h4>
        <input type="text" name="addToTravel"/><br>
        
    
    <?php
    
        foreach($travel as $t) {
            echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\">";
        }
    
    ?>
    <input type="submit" name="submit" value="Add To List"/>
    </form>
    
    <?php
    
        } else {
            $travel = $_POST['travel'];
            $addToTravel = explode(',', $_POST['addToTravel']);
            
            $travel = array_merge($travel, $addToTravel);
            
            echo "Here is the list with your additions: ";
            echo "<ul>";
            foreach($travel as $t) {
                echo "<li>$t</li>";
            }
            echo "</ul>";
    ?>
        <h4>Add More to your list?</h4>
        <form method="post" action="#">
            <input type="text" name="addToTravel"/>
            
    <?php
        
            foreach ($travel as $t){
             echo "<input type=\"hidden\" name=\"travel[]\" value=\"$t\" />\n";
    }
    
    ?>
            <br>
            <input type="submit" name="submit" value="Add Again!"/>
            </form>
    <?php
        }
    ?>
    </section>
    
    <!--
        In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. Here's the list, this time including countries as well as cities:

        Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.
        
        This time, create an associative array, using the countries as keys, the cities as values. Create a form for the user, with the instructions Please choose a city:
        
        Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user clicks the submit button, return the statement $city is in $country., where $city is the value chosen by the user, and $country is its key.
    -->
    
    <br>
    <h2>~~~~~ Exercise 13 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>In this PHP exercise, you will again use the list of cities in Arrays Exercise #2. Here's the list, this time including countries as well as cities:</p>

        <p>Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.</p>
        
        <p>This time, create an associative array, using the countries as keys, the cities as values. Create a form for the user, with the instructions Please choose a city:</p>
        
        <p>Follow this request with a select field for the 10 cities, with the options created by looping through the array. When the user clicks the submit button, return the statement $city is in $country., where $city is the value chosen by the user, and $country is its key.</p>
        
        <section>
        <h3>The Working App:</h3>
    <h4>
        Select a City!
    </h4>
    <?php
    
        $cities = array(
            "Japan" => "Tokyo",
            "Mexico" => "Mexico City",
            "USA" => "New York City",
            "India" => "Mumbai",
            "Korea" => "Seoul",
            "China" => "Shanghai",
            "Nigeria" => "Lagos",
            "Argentina" => "Buenos Aires",
            "Egypt" => "Cairo",
            "England" => "London"
            );
            
            if(!isset($_POST['submit'])){
                
            
    
    ?>
    <h4>Please Choose a City:</h4>
    <form method="post" action="#">
        <select name="city">
            <?php
                foreach($cities as $c){
                    echo "<option value=\"$c\">$c</option>\n";
                }
            ?>
        </select><br>
        <input type="submit" name="submit" value="Submit"/>
    </form>
    
    
    <?php
    
    } else {
        $city = $_POST['city'];
        $country = array_search($city, $cities);
        echo "$city is in $country!";
    }
    
    ?>
    </section>
    <!--
        In this PHP exercise, you will create an array of temperatures. Choose a spring month to have a wider range of temperatures to handle. We'll use 30 days of the month. The exercise is generic, but feel free to use a specific month in your own script. The answer script will use the Fahrenheit scale, but again feel free to use Celsius if you prefer.

        Create your array of 30 high temperatures, approximating the weather for a spring month, then find the average high temp, the five warmest high temps and the five coolest high temps. Print your findings to the browser.
        
        Hint: the HTML character entity for the degree sign is &deg;.
        
        Feel free to make up the temps or gather data for your own area. Here's a list of thirty Fahrenheit high temperatures you can use if you like:
        68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
        68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83
    -->
    
    <br>
    <h2>~~~~~ Exercise 14 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>In this PHP exercise, you will create an array of temperatures. Choose a spring month to have a wider range of temperatures to handle. We'll use 30 days of the month. The exercise is generic, but feel free to use a specific month in your own script. The answer script will use the Fahrenheit scale, but again feel free to use Celsius if you prefer.</p>

        <p>Create your array of 30 high temperatures, approximating the weather for a spring month, then find the average high temp, the five warmest high temps and the five coolest high temps. Print your findings to the browser.</p>
        
        <p>Hint: the HTML character entity for the degree sign is &deg;.</p>
        
        <p>Feel free to make up the temps or gather data for your own area. Here's a list of thirty Fahrenheit high temperatures you can use if you like:</p>
        <p>68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
        68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83</p>
        
        <section>
        <h3>The Working App:</h3>
    <h4>Calculating Temperatures for month of June!</h4>
    <?php
    
        $temperatures = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
        
        $temperatures = array_filter($temperatures);
        $average = array_sum($temperatures)/count($temperatures);
        $avg = round($average, 2);
        echo "The average temperature for June was $avg&deg<br>";
        
        rsort($temperatures);
        $high = array_slice($temperatures, 0, 5);
        echo "The 5 highest temperatures were:<br>";
        foreach($high as $h){
            echo "<h5>$h&degF</h5>";
        }
        $low = array_slice($temperatures, -5, 5);
        echo "The 5 lowest temperatures were:<br>";
        foreach($low as $l){
            echo "<h5>$l&degF</h5>";
        }
    ?>
</section>




<?php include 'footer.php'; ?>