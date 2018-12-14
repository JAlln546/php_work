<?php
/*
 * Problem 01
 * ==========
 * Create an associative array with the following chart data and assign it to a variable named "$chartData".
 * The data will be used later and accessed by date string, e.g. echo $chartData["201806"]; // expects 92000
 *
 * Monthly company revenue in USD. 201801: 154000, 201802: 165000,
 *                                 201803: 120000, 201804: 130500,
 *                                 201805: 110000, 201806: 92000,
 *                                 201807: 124000, 201808: 115600
 */
/* Problem 02
 * ==========
 * Create a function named "menuItemDisplay()" that accepts two parameters. The first parameter is the name of a menu item
 * to be displayed inside of an <li> HTML element. The second parameter is a Boolean value that determines whether or not to
 * add a class "active" to the menu item. All menu items should have a class "menu-item". The function menuItemDisplay()
 * must echo the HTML necessary to generate such an <li> item.
 *
 * For example:
 * menuItemDisplay("Home", true);
 *
 * Should echo:
 * <li class="menu-item active">Home</li>
 * Whitespace is at your discretion. 
 */
/* Problem 03
 * ==========
 * Write the code necessary to loop over the associative array defined below and call menuItemDisplay() defined above
 * so that the entire navigation menu is rendered. Note the "<li>" elements from menuItemDisplay need a wrapping
 * "<ul>" element.
 */
// Note: menuItemName => active
$menuItems = [
    "Home" => true,
    "About Us" => false,
    "Contact Us" => false,
    "Careers" => false
];