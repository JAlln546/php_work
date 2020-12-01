<?php
include 'incs/header.php';
?>

  <div id="packages"><br><br>
        <h1>Christmas Lights!!</h1>
        <p>For Years, I have been putting up Christmas Lights for neighbors, It has become one of my favorite types of work as it keeps me outside even if the weather isn't perfect.  Use the basic form below to get a quick estimate of what it will cost for me to put your lights up!</p>

<?php
  if(!isset($_POST['xmas_submit'])) {
      ?>


        <form name="xmas" action="#" method="post">
          <p>How Many Stories is Your Home? <br>
            <select class="" name="stories">
              <option value="select" disabled selected>[ SELECT ]</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>

          </p>
          <p>Approx How Many Feet is your Desired String Line? <br>
            <select class="" name="length">
              <option value="select" disabled selected>[ SELECT ]</option>
              <option value="10">0-10ft</option>
              <option value="20">11-20ft</option>
              <option value="30">21-30ft</option>
              <option value="40">31-40ft</option>
              <option value="50">41-50ft</option>
              <option value="75">50+</option>
            </select>

          </p>
          <p>Will You Provide Your Own Lights? <br>
            <select class="" name="lights">
              <option value="select" disabled selected>[ SELECT ]</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </p>
          <p>Would You Like To Include Take Down? <br>
            <select class="" name="takedown">
              <option value="select" disabled selected>[ SELECT ]</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </p>
          <p>Would You Like To Include Gutter Cleaning? <br>
            <select class="" name="gutters">
              <option value="select" disabled selected>[ SELECT ]</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </p>


          <p><input type="submit" name="xmas_submit" value="Quote Me!"/></p>

        </form><br>
        <?php
      } else {
        $stories = $_POST['stories'];
        $length = $_POST['length'];
        $lights = $_POST['lights'];
        $takedown = $_POST['takedown'];
        $gutters = $_POST['gutters'];
        $getSum = 0;
        $gutterCharge = 0;


        if ($stories == "1") {
          $storiesSum = 50;
          $ladderRental = 0;
          $ladderBlurb = "No ladder rental needed for this job.";
        } elseif ($stories == "2") {
          $storiesSum = 100;
          $ladderRental = 30;
          $ladderBlurb = "Ladder rental: 30";
        } elseif ($stories == "3"){
          $storiesSum = 150;
          $ladderRental = 30;
          $ladderBlurb = "Ladder rental: 30";
        } else {
          echo "Step one- Fill Out Form. Readddyyyy GO!";
        }

        if ($length  == '10'){
            $lengthSum = 10;
        } elseif ($length == '20') {
            $lengthSum = 20;
        } elseif ($length == '30') {
            $lengthSum = 30;
        } elseif ($length == '40') {
            $lengthSum = 40;
        } elseif ($length == '50') {
            $lengthSum = 50;
        } elseif ($length == '75') {
            $lengthSum = 75;
        } else {
            echo 'Please select an approximate length!';
        }

        if ($lights == 'yes'){
            $lightSum = 0;
            $lightSumBlurb = 'Client opts to provide lights and attachments';
        } elseif ($lights == 'no') {
          $lightSum = ($lengthSum / 25) * 20;
          $lightSumBlurb = 'Client opts to NOT provide lights and attachments';
        } /* else {
            echo '<strong>Provide Lights?</strong>$nbsp; Please select an option!';
        } */

        if ($takedown == 'yes') {
            $takeDownCharge = (($getSum - $gutterCharge) / 2);
        } elseif ($takedown == 'no') {
            return $takeDownCharge = 0;
        } /*else {
            echo 'Would you like me to takedown the lights after the holiday season?';
        } */
        if ($gutters == 'yes') {
            $gutterCharge = (($length * 2)*.75);
            $gutterBlurb = "$gutterCharge for gutter cleaning.";
        } elseif ($gutters == 'no') {
            $gutterCharge = 0;
            $gutterBlurb = "The Client opts out of gutter cleaning.";
        }

        $getSum = $storiesSum + $ladderRental + $lengthSum + $lightSum + $gutterCharge;
        $takeDown = ($getSum - $gutterCharge) / 2;

        /*
        $query = $db->prepare(
          'INSERT INTO xmas (stories, lightedLength, lightsProvided, takeDown, gutterClean, originalCharge, takedownCharge)' .
          'VALUES ("'.$stories.'", "'.$length.'", "'.$lights.'", "'.$takedown.'", "'.$gutters.'", "'.$getSum.'", "'.$takeDown.'")'
        );
        $success = $query->execute([
          'stories' => $stories,
          'lightedLength' => $length,
          'lightsProvided' => $lights,
          'takeDown' => $takedown,
          'gutterClean' => $gutters,
          'originalCharge' => $getSum,
          'takedownCharge' => $takeDown
        ]);

        if ($success){
        */
        echo "<section><br><h3>SELECTIONS</h3><br>";
        echo "<h3>Number of Stories:</h3> $stories<br><br>";
        echo "<h3>Charge for Lights:</h3>";
        echo "For $length feet of lights, the charge is: $lengthSum<br><br>";
        echo "Charge for purchasing lights: $lightSum<br><br>";
        echo "<h3>Gutter Cleaning?</h3>$gutterBlurb<br><br>";
        echo "<h2>The current total for your Christmas Light install is: </h2>$getSum<br><br><br>";
        echo "<h3 class=\"title\">THE TAKE DOWN RUNS AT 50% OF THE PUT UP CHARGE</h3><br>";
        echo "<h3>Does Client Require an extension ladder?</h3>$ladderBlurb<br><br>";
        echo "<h3>Due at Put Up Completion:</h3>$getSum";
        echo "<h3>Due at Take Down Completion:</h3>$takeDown</section>";
        ?>
        <p>If you wish to proceed in booking your holiday light put up, please fill out the form below, and include your address in the comment section!</p>
        <?php
        if(!isset($_POST['name_submit'])) {
        ?>
        <form name="contact" action="#" method="post">
            <p>
              <label>
                <h3>First & Last Name</h3></label><br>
              <input type="text" name="name" required>
            </p>
            <p>
              <label><h3>Phone Number</h3></label><br>
              <input type="tel" name="phone" required>
            </p>
            <p>
              <label><h3>Email</h3></label><br>
              <input type="email" name="email" required>
            </p>
             <p>
              <label><h3>Address</h3></label><br>
              <input type="text" name="address" required>
            </p>
            <p>
            <label><h3>Your Custom Christmas Light Quote!</h3></label><br>
            <textarea name="comment" rows="8" cols="80" placeholder="Write your comment here">
              <?php
              echo "\n";
               echo "Number of Stories: $stories\n\n";
        echo "Charge for Lights:\n";
        echo "For $length feet of lights, the charge is: $lengthSum\n\n";
        echo "Charge for purchasing lights: $lightSum\n\n";
        echo "Gutter Cleaning? $gutterBlurb\n\n";
        echo "The current total for your Christmas Light install is: $getSum\n\n";
        echo "THE TAKE DOWN RUNS AT 50% OF THE PUT UP CHARGE\n\n";
        echo "Does Client Require an extension ladder? $ladderBlurb\n\n";
        echo "Due at Put Up Completion: $getSum\n\n";
        echo "Due at Take Down Completion: $takeDown\n\n";
              ?>

            </textarea>
            </p>

            <p><input type="submit" name="name_submit" value="Submit"/></p>

          </form>
        <?php
        } else {
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];
          $address = $_POST['address'];
          $comment = $_POST['comment'];


          $to = "hello@handyjess.com";
          $from = $email;
          $subject = "New Handy Jess Inquiry";
          $subject2 = "Copy of Your Handy Jess Inquiry";
          $message = "Client's Name: $name\n\n";
          $message .= "Address: $address\n\n";
          $message .= "Christmas Light Quote: \n $comment";
          $message .= "-------------------------\n\n";
          $message .= "Phone Number: $phone\n\n";
          $message .= "Email: $email\n\n";


          $message2 = "Here is a copy of your quote, $name! \n\n";
          $message2 .="-------------------------\n\n";
          $message2 .= "$comment\n\n";
          $message2 .= "-------------------------\n\n";
          $message2 .= "I'll be in touch shortly!\n\n";
          $message2 .= "Best, \nJess Allen";
          $headers = "From: $email";
          $headers2 = "From: $to";
          mail($to, $subject, $message, $headers);
          mail($from, $subject2, $message2, $headers2);

          echo "<h3>Mail Sent! <br>Thank you $name, we will contact you shortly.</h3>";

        }
        /*
      } else {
        echo '<h3>Please review the form and try to resubmit your responses!</h3>';
      }
      */


      }


    ?>
    <br>

        <a href="../index.html">Return Home</a><br><br>

      </div>

   <!-- <div id="contact">
          <h2>Contact Form</h2>
          <?php
          /*
              if(!isset($_POST['submit'])) { */
          ?>
          <form name="contact" action="#" method="post">
            <p>
              <label>
                <h3>First & Last Name</h3></label><br>
              <input type="text" name="name" required>
            </p>
            <p>
              <label><h3>Phone Number</h3></label><br>
              <input type="tel" name="phone" required>
            </p>
            <p>
              <label><h3>Email</h3></label><br>
              <input type="email" name="email" required>
            </p>
            <p>
            <label><h3>What can I help you with?</h3></label><br>
            <select name="service" required>
              <option value="select" disabled selected>[ Service ]</option>
              <option value="xmas">Holiday Lights</option>
              <option value="Yard">Yard Work</option>
              <option value="cleaning">Cleaning</option>
              <option value="courier">Courier</option>
              <option value="web">Web & Social Media</option>
              <option value="other">Other</option>
            </select>
            </p>

            <p>
            <label><h3>Comment:</h3></label><br>
            <textarea name="comment" rows="8" cols="80" placeholder="Write your comment here"></textarea>
            </p>
            <p>
              <label><h3>Referred By:</h3></label><br>
              <input type="text" name="refer" placeholder="First & Last Name">
            </p>

            <p><input type="submit" name="submit" value="Submit"/></p>

          </form>

          <?php
          /*
        } else {
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $email = $_POST['email'];

          $comment = $_POST['comment'];

          $stories = $_POST['stories'];

          $to = "hello@handyjess.com";
          $from = $email;
          $subject = "New Handy Jess Inquiry";
          $subject2 = "Copy of Your Handy Jess Inquiry";
          $message = "Client's Name: $name";
          $message .= "Service Requested: $service";
          $message .= "Comment: \n $comment";
          $message .= "-------------------------\n\n";
          $message .= "Phone Number: $phone";
          $message .= "Email: $email";
          $message .= "Referred By: $refer\n\n";
          $message .= "HOLIDAY LIGHT INFORMATION";
          $message .= "Number of Stories: $stories\n";
          $message .= "Charge for Length of Lights: $lengthSum\n";
          $message .= "Charge for Purchasing Lights: $lightSum\n";
          $message .= "Gutters Cleaned: $gutterBlurb\n";
          $message .= "Due at Put Up: $getSum\n";
          $message .= "Due At Take Down: $takeDown\n";
          $message2 = "Here is a copy of your message, $name! \n\n";
          $message2 .="-------------------------\n\n";
          $message2 .= "$comment\n\n";
          $message2 .= "-------------------------\n\n";
          $message2 .= "I'll be in touch shortly!\n\n";
          $message2 .= "Best, \nJess Allen";
          $headers = "From: $email";
          $headers2 = "From: $to";
          mail($to, $subject, $message, $headers);
          mail($from, $subject2, $message2, $headers2);

          echo "<h3>Mail Sent! <br>Thank you $name, we will contact you shortly.</h3>";

        } */
        ?>
      </div>  -->

      <?php
      include 'incs/footer.php';
      ?>
