<?php
echo"<h4>Practice Exercises 2</h4>";
// 1. Assign grades based on marks
echo"<h5>1. Assign grades based on marks</h5>";
$marks = 85;
if ($marks >= 90) {
    $grade = "A";
} elseif ($marks >= 80) {
    $grade = "B";
} elseif ($marks >= 70) {
    $grade = "C";
} elseif ($marks >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
echo "Grade: $grade\n";

// 2. Display messages for different days of the week
echo "<h5>2. Display messages for different days of the week</h5>";
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the work week!\n";
        break;
    case "Friday":
        echo "Almost the weekend!\n";
        break;
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!\n";
        break;
    default:
        echo "It's a regular day.\n";
        break;
    }
    echo "<br>";

// 3. Print numbers from 1 to 10 using a for loop
echo "<h5>3. Print numbers from 1 to 10 using a for loop</h5>";
for ($i = 1; $i <= 10; $i++) {
    echo "$i\n";
}
echo "<br>";

// 4. Print even numbers between 1 and 20 using a while loop
echo "<h5>4. Print even numbers between 1 and 20 using a while loop</h5>";
$num = 2;
while ($num <= 20) {
    echo "$num\n";
    $num += 2;
}
echo "<br>";
echo "Other Method<br>";
for ($num = 2; $num <= 20; $num += 2) {
    echo "$num\n";
}
echo "<br>";
// 5. Iterate through an associative array and display key-value pairs
echo "<h5>5. Iterate through an associative array and display key-value pairs</h5>";
$assocArray = ["Name" => "John", "Age" => 25, "City" => "New York"];
foreach ($assocArray as $key => $value) {
    echo "$key: $value\n";
}
?>
