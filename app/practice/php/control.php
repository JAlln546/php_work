<?php include 'header.php'; ?>

<!--
       In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:

        It's August, so it's really hot.
        Not August, so at least not in the peak of the heat.
        
        Hint: the function to get the current month is 'date('F', time())' for the month's full name.
    -->
    
    
    <h3>Exercise 5</h3>
    <h4>Instructions</h4>
    
    <p>In this PHP exercise, you will use a conditional statement to determine what gets printed to the browser. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</p>

        <p>It's August, so it's really hot.<br>
        Not August, so at least not in the peak of the heat.</p>
        
       <p> Hint: the function to get the current month is 'date('F', time())' for the month's full name.</p>
    
    <section>
    <h3>The Working App:</h3>
    <?php
            $month = date('F', time());
            if($month == "December") {
                echo "Baby it's cold outside!";
            }else{
                echo "You ain't seen nothing yet, you cold weeny!";
            }
    ?>
     </section>
    <!-- 
            Using a for loop, write a script that will send to the browser a list of squares for the numbers 1-12.
        Use the format, "1 * 1 = 1", and be sure to include code to print each formula on a different line.
    -->
    
    <br>
    <h3>Exercise 6</h3>
    <h4>Instructions</h4>
    <p>Using a for loop, write a script that will send to the browser a list of squares for the numbers 1-12.</p>
        <p>Use the format, "1 * 1 = 1", and be sure to include code to print each formula on a different line.</p>
    <section>
    <h3>The Working App:</h3>
    <?php
        for($x = 1; $x <= 12; $x++) {
            $result = $x * $x;
            echo "$x * $x = $result. <br>";
        }
    ?>
    </section>
    <!--
        In this PHP exercise, use two for loops, one nested inside another. Create the following multiplication table:
    -->
    <br>
    <h3>Exercise 7</h3>
    <h4>Instructions</h4>
    <p>In this PHP exercise, use two for loops, one nested inside another.  Find the square roots from 1 to 7, and display them in a table.</p>
    <section>
    <h3>The Working App:</h3>
    <?php
        echo "<table>";
        echo "<caption>Multiplication Table</caption>";
        for($row=1; $row <= 7; $row++) {
            echo "<tr>\n";
            for($col = 1; $col <= 7; $col++) {
                $x = $col * $row;
                echo "<td>$x</td>\n";   
            } echo "</tr>";
        } echo "</table>";
    ?>
    </section>
      <?php include 'footer.php'; ?>