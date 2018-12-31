<?php include 'header.php'; ?>
        <h1>
            This App will Convert Temperatures!
        </h1>
        <hr>
        <div id="container">
        <p>
            <center>
            When entering temperatures: <br>Please do not use decimals, or any other non-numeric character.
            </center>
        </p>

        <?php
            if(!isset($_POST['submit'])) {

        ?>

        <form method="post" action="#">

        <p>
            <label for="temperature">What is your Temperature?</label><br>
            <input type="text" name="temperature"/>
        </p>
        <p>
            <label for="convertFrom">Converting From:</label><br>
            <select name="convertFrom">
                <option value="" disabled selected>[ Select ]</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="celsius">Celsius</option>
                <option value="kelvin">Kelvin</option>
            </select>
        </p>
        <p>
            <label for="convertTo">Converting To:</label><br>
            <select name="convertTo">
                <option value="" disabled selected>[ Select ]</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="celsius">Celsius</option>
                <option value="kelvin">Kelvin</option>
            </select>
        </p>
        <input type="submit" name="submit" value="Submit"/>
        </form>

        <?php
            } else {
                     $temp = $_POST['temperature'];
                    $convertFrom = $_POST['convertFrom'];
                    $convertTo = $_POST['convertTo'];

                    if(!(is_numeric($temp))){
                      echo"<center> Please enter a number!</center>";
                    }


                    if($convertFrom == "fahrenheit" && $convertTo == "celsius"){
                        //fahrenheitenheit to celsius
                        $conversion = $temp - 32 *(5/9);
                } elseif ($convertFrom == "fahrenheit" && $convertTo == "kelvin") {
                        // fahrenheitenheit to kelvin
                        $conversion = $temp + 273.15;
                } elseif($convertFrom == "celsius" && $convertTo == "fahrenheit") {
                        // celsius to fahrenheitenheit
                        $conversion = $temp * 9/5 + 32;
                } elseif($convertFrom == "celsius" && $convertTo == "kelvin") {
                        // celsius to kelvin
                        $conversion = $temp + 273.15;
                } elseif($convertFrom == "kelvin" && $convertTo == "fahrenheit") {
                        // kelvin to fahrenheitenheit
                        $conversion = $temp * 9/5 - 459.67;
                } elseif($convertFrom == "kelvin"  && $convertTo == "celsius") {
                        // kelvin to celsius
                        $conversion = $temp - 273.15;
                }
                else {
                        // Please enter a temperature to convert!
                        echo "Enter a Damn Number Already!";
                }
                echo "<section><center>";
                 echo $temp . " degrees ". $convertFrom . " is ". round($conversion, 2). " degrees ". $convertTo;
                echo "</center></section>";
            }

        ?>

        </div>
<?php include 'footer.php'; ?>
