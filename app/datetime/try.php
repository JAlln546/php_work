<!DOCTYPE html>
<html>
    <head>
        <title>Date Time Trials</title>
    </head>

<body>
    
    <h1>Date Time Trials!</h1>
    <hr>
    
        <?php
        
       
        if(isset($_POST['formSubmit'])){
            
            $userTimeZone = new DateTimeZone($_POST['timeZone']);
            
           $pacific = new DateTimeZone("America/Los_Angeles");
           $mountain = new DateTimeZone("America/Denver");
           $central = new DateTimeZone("America/Chicago");
           $eastern = new DateTimeZone("America/New_York");
           $hawaii = new DateTimeZone("America/Honolulu");
           
           $now = new DateTime("now");
            
            echo "Your entered TimeZone is: $userTimeZone";
        }
    


?>


<form method="post" action="">
   <label for="">Select Your Timezone: </label><Br>
   <select name="timeZone">
       <option value="<?php echo $pacific; ?>">Pacific</option>
       <option value="<?php echo $mountain; ?>">Mountain</option>
       <option value="<?php echo $central; ?>">Central</option>
       <option value="<?php echo $eastern; ?>">Eastern</option>
       <option value="<?php echo $hawaii; ?>">Hawaii</option>
   </select><br>
   
   <button type="submit" name="formSubmit">Submit Entry</button>
   
</form>

    
</body>


</html>