<?php

// ### 1. Number Classifier
// * Concepts Used: Variables, If-Else
// * Description:
// * Input a number through the terminal or define it in the script.
// * Use if-else to classify the number as positive, negative, or zero.

echo "Enter a number: ";
$number = trim(fgets(STDIN)); // Corrected fgets

if (!is_numeric($number)) {
    echo "Please enter a valid numeric number\n"; // Corrected missing semicolon
} else {
    if ($number > 0) {
        echo "The number $number is Positive.\n";
    } elseif ($number < 0) {
        echo "The number $number is Negative.\n";
    } else {
        echo "The number $number is Zero.\n"; // Fixed grammar and added semicolon
    }
}

// ### 2. Basic Authentication System
// * Concepts Used: Variables, Constants, If-Else
// * Description:
// * Use constants to store a predefined username and password.
// * Use variables to simulate a login attempt by assigning user input values.
// * Use if-else to check if the credentials match the stored constants and display success or failure messages.

define("USERNAME", "admin");
define('PASSWORD', "12345");

$authUserName = "admin";
$authUserPass = "12345";

// Check credentials
if ($authUserName === USERNAME && $authUserPass === PASSWORD) {
    echo "Login Successful! Welcome, " . USERNAME . ".\n";
} else {
    echo "Login Failed! Invalid username or password.\n";
}

// ### 3. Simple Electricity Bill Calculator
// * Concepts Used: Variables, If-Else
// * Description:
// * Use a variable for units consumed.
// * Define slabs for billing using if-else (e.g., 1–100 units = $5, 101–200 units = $10,  201 to above units = $15).
// * Calculate and display the total bill based on the entered units.

echo "Enter the number of units consumed: ";
$units = trim(fgets(STDIN));  // Read user input

if (!is_numeric($units) || $units < 0) {
    echo "Please enter a valid positive number for units.\n";
} else {

    $totalBill = 0;

    if ($units <= 100) {
        $totalBill = $units * 5;  
    } elseif ($units <= 200) {
        $totalBill = (100 * 5) + (($units - 100) * 10);  
    } else {
        $totalBill = (100 * 5) + (100 * 10) + (($units - 200) * 15); 
    }

    echo "Total Bill: $$totalBill\n";
}


// ### 4. Temperature Converter
// * Concepts Used: Variables, Constants, Switch
// * Description:
// * Use a constant for the conversion formula.
// * Ask the user to enter a temperature value in Celsius or Fahrenheit through PHP’s readline() function in the terminal.
// * Use a switch statement to select the type of conversion (Celsius to Fahrenheit or Fahrenheit to Celsius).

define("CELSIUS_TO_FAHRENHEIT", 1.8);
define("FAHRENHEIT_OFFSET", 32);

echo "Enter the temperature value: ";
$temperature = trim(fgets(STDIN));

echo "Choose conversion (Celsius to Fahrenheit Or Fahrenheit to Celsius): ";
$conversionType = trim(fgets(STDIN));

switch ($conversionType) {
    case 1:
        // Celsius to Fahrenheit
        $fahrenheit = ($temperature * CELSIUS_TO_FAHRENHEIT) + FAHRENHEIT_OFFSET;
        echo "$temperature °C is equal to $fahrenheit °F.\n";
        break;

    case 2:
        // Fahrenheit to Celsius
        $celsius = ($temperature - FAHRENHEIT_OFFSET) / CELSIUS_TO_FAHRENHEIT;
        echo "$temperature °F is equal to $celsius °C.\n";
        break;

    default:
        echo "Invalid choice! Please enter 1 for Celsius to Fahrenheit or 2 for Fahrenheit to Celsius.\n";
        break;
}

?>
