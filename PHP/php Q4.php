<!DOCTYPE html>
<html>
<head>
  <title>Day of the Week</title>
</head>
<body>

<?php
// Assuming the day number is stored in a variable $dayNumber
$dayNumber = 4;

// Variable to store the day name
$dayName = "";

// Switch statement to determine the day of the week
switch ($dayNumber) {
  case 1:
    $dayName = "Monday";
    break;
  case 2:
    $dayName = "Tuesday";
    break;
  case 3:
    $dayName = "Wednesday";
    break;
  case 4:
    $dayName = "Thursday";
    break;
  case 5:
    $dayName = "Friday";
    break;
  case 6:
    $dayName = "Saturday";
    break;
  case 7:
    $dayName = "Sunday";
    break;
  default:
    $dayName = "Invalid number";
    break;
}

// Display the day of the week
echo "Number: " . $dayNumber . "<br>";
echo "Day of the Week: " . $dayName;
?>

</body>
</html>
