<?php include 'header.php'; ?>
        
        <!--
        a$x=10;
        $y=7;
        
        Write code to print out the following:
        
        10 + 7 = 17
        10 - 7 = 3
        10 * 7 = 70
        10 / 7 = 1.4285714285714
        10 % 7 = 3
        -->
        <h2>~~~~~ Exercise 1 ~~~~~</h2>
        <h4>Instructions:</h4>
        <p>
            PHP includes all the standard arithmetic operators. For this PHP exercise, you will use them along with variables to print equations to the browser. In your script, create the following variables:</p><p>
            $x=10;
            $y=7;
            </p><p>
            Write code to print out the following:
            </p><p>
            10 + 7 = 17<br>
            10 - 7 = 3<br>
            10 * 7 = 70<br>
            10 / 7 = 1.4285714285714<br>
            10 % 7 = 3<br>
            </p><p>
            Use numbers only in the above variable assignments, not in the echo statements. You will need a third variable as well.
        </p>
        <section>
        <h3>The Working App:</h3>
        
    <?php
        $x = 10;
        $y = 7;
        
        echo "$x + $y = " . ($x + $y) ."<br>";
        echo "$x - $y = " . ($x - $y) ."<br>";
        echo "$x * $y = " . ($x * $y) ."<br>";
        echo "$x / $y = " . ($x / $y) ."<br>";
        echo "$x % $y = " . ($x % $y) ."<br>";
    
    
    ?>
    </section>
        <!--
        <p>Arithmetic-assignment operators perform an arithmetic operation on the variable at the same time as assigning a new value. For this PHP exercise, write a script to reproduce the output below. Manipulate only one variable using no simple arithmetic operators to produce the values given in the statements.</p>

    <p>Hint: In the script each statement ends with "Value is now $variable."</p>
       <p><em>Value is now 8.</em><br>
        <em>Add 2. Value is now 10.</em><br>
        <em>Subtract 4. Value is now 6.</em><br>
        <em>Multiply by 5. Value is now 30.</em><br>
        <em>Divide by 3. Value is now 10.</em><br>
        <em>Increment value by one. Value is now 11.</em><br>
        <em>Decrement value by one. Value is now 10.</em></p>
        -->
        <br>
            <h2>~~~~~ Exercise 2 ~~~~~</h2>
            <h4>Instructions:</h4>
            <p>Arithmetic-assignment operators perform an arithmetic operation on the variable at the same time as assigning a new value. For this PHP exercise, write a script to reproduce the output below. Manipulate only one variable using no simple arithmetic operators to produce the values given in the statements.</p>

    <p>Hint: In the script each statement ends with "Value is now $variable."</p>
       <p><em>Value is now 8.<br>
        Add 2. Value is now 10.<br>
        Subtract 4. Value is now 6.<br>
        Multiply by 5. Value is now 30.<br>
        Divide by 3. Value is now 10.<br>
        Increment value by one. Value is now 11.<br>
        Decrement value by one. Value is now 10.</em></p>
        
        <section>
        <h3>The Working App:</h3>
    <?php 
        $first = 8;
        $second = $first + 2;
        $third = $second - 4;
        $fourth = $third * 5;
        $fifth = $fourth / 3;
        $sixth = $fifth + 1;
        $seventh = $sixth - 1;
        
        echo "Value is now $first. <br>";
        echo "Value is now $second. <br>";
        echo "Value is now $third. <br>";
        echo "Value is now $fourth. <br>";
        echo "Value is now $fifth. <br>";
        echo "Value is now $sixth. <br>";
        echo "Value is now $seventh. <br>";
    
    ?>
    </section>
    <br>
    <h2>~~~~~ Exercise 3 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>For this PHP exercise, write a script using the following variable:</p>
    <p>$around="around";</p>
    
    <p>Single quotes and double quotes don't work the same way in PHP. Using single quotes (' ') and the concatenation operator, echo the following to the browser, using the variable you created:</p>
    <p><em>What goes around comes around.</em></p>
    
    <section>
    <h3>The Working App:</h3>
    <?php 
        $word = "around";
        
        echo 'What goes ' . $word . ' comes ' . $word . '.';
    
    ?>
    </section>
    
    <!-- 
        Value is string.
        Value is double.
        Value is boolean.
        Value is integer.
        Value is NULL.
    -->
    
    <br>
    <h2>~~~~~ Exercise 4 ~~~~~</h2>
    <h4>Instructions</h4>
    <p>PHP allows several different types of variables. For this PHP exercise, you will create one variable and assign it different values, then test its type for each value.</p>

   <p> Write a script using one variable “$whatsit” to print the following to the browser. Your echo statements may include no words except “Value is”. In other words, use the function that will output the variable type to get the requested text. Use simple HTML to print each statement on its own line and add a relevant title to your page. Include line breaks in your code to produce clean, readable HTML.</p>
    
    <p><em>Value is string.<Br>
    Value is double.<Br>
    Value is boolean.<Br>
    Value is integer.<Br>
    Value is NULL.</em></p>
    
    <section>
    <h3>The Working App:</h3>
    
    <?php 
        $string = "Jess!";
        $double = 88.9;
        $boolean = true;
        $integer = 33;
        $null = null;
        
        echo "Value is " . gettype($string) . ".<br>";
        echo "Value is " . gettype($double) . ".<br>";
        echo "Value is " . gettype($boolean) . ".<br>";
        echo "Value is " . gettype($integer) . ".<br>";
        echo "Value is " . gettype($null) . ".<br>";
        
    ?>
    </section>
    <?php include 'footer.php'; ?>