<?php
#Practice Exercises 1
// 1. Arithmetic Operations
echo "<h4>1.Perform arithmetic operations on two variables and print the results.</h4>";
$a = 10;
$b = 5;
$c = $a + $b;
$d = $a - $b;

echo"Addition of the two varialbles is = $c <br>";
echo "Substruction of the two variables is = $d <br>";

//2. Comparison Operators
echo "<h4>2. Use comparison operators to compare values and display the output.</h4>";
    if( $a > $b){
    echo "$a is greater than $b <br>";
    }else if($a < $b){
    echo "$a is less than $b <br>";
    }else{
     echo "$a is equal to $b <br>";
    }

//3. Logical Operators
echo "<h4>3. Write a script using logical operators to evaluate multiple conditions.</h4>";
$age = 20;
$is_student = true;

if ($age >= 18 && $is_student) {
    echo "You are an adult student.";
} elseif ($age >= 18 && !$is_student) {
    echo "You are an adult but not a student.";
} elseif ($age < 18 || !$is_student) {
    echo "You are either underage or not a student.";
} else {
    echo "Condition does not match any case.";
}
//4. String Concatenation
echo "<h4>4. Concatenate two strings and display the result.</h4>";
// Define two strings
$string1 = "Hello, ";
$string2 = "World!";

//Concatenate the strings
$result = $string1 . $string2;

// Display the output
echo $result;

?>