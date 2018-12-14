<?php

//this is part 1 of the final
$charData = [
        "201801" => 154000,
        "201802" => 165000,
        "201803" => 120000, 
        "201804" => 130500,
        "201805" => 110000, 
        "201806" => 92000,
        "201807" => 124000,
        "201808" => 115600];

echo $charData['201806'];

//part 2
function menuItemDisplay($menuItem, $active) {
    if($active != true) {
        echo "<li class=\"menu-item\">";
        echo $menuItem;
        echo "</li>";
    } else {
        echo "<li class=\"menu-item active\">";
        echo $menuItem;
        echo "</li>";
}
};
 $menuItems = [
    "Home" => true,
    "About Us" => false,
    "Contact Us" => false,
    "Careers" => false
    ];
?>
<!-- part 3 -->
<!DOCTYPE html>
<html>
    <head>
        <title>Final!</title>
    </head>
    <body>
        <div>
                <h3>
                   This is the final! 
                </h3>
                <ul>
                    <?php foreach($menuItems as $item => $active): ?>
                    <?php menuItemDisplay($item, $active); ?>
                    <?php endforeach ?>
                </ul>
            </div>
    </body>
</html>
            
    
    
    

