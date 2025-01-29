<?php

  // if (9 > 10) {
  //  print "wtf";
  // } else {
  //  print "not execute!";
  // }

?>

<?php

// $t = 15;
// if ($t == 14){
//    echo "Hey there, Afternoon!☀️";
// } else {
//    print "What? what time is it there?";
// } 

?>


<!-- <p>Compare two variables to check if they are identical.</p>
<p>The identical operator (===) checks the value and the data type, unlike the equal operator (==) that checks only the value.</p> -->


<?php
// $x = 100;
// $y = 400;

// if ($x === $y){
//     print "$x is identical to $y";
// } else {
//    echo "$x is not identical to $y";
// }

?>



<!--    <h1>The != Operator</h1>

<p>Compare two variables and write a message if they don't have the same value.</p>
 -->

<?php
// $a = 200;
// $b = 150;

// if ($a != $b) {
//    echo "$a is not equal to $b";
// }
?>


<!-- <h1>The <> Operator</h1>

<p>Compare two variables and write a message if they don't have the same value.</p>
 -->
<?php
  // $c = 400;
  // $d = 600;

  // if ($c <> $d) {
  //  echo "$c is not equal to $d!";
  // }
?>


<!-- <h1>The and Operator</h1>

<p>Write a message if both conditions are true.</p> -->

<?php
// $a = 200;
// $b = 100;

// if ($a == 200 and $b == 10) {
//    print "hello earth!"; 
// } else {
//    print "bye earth!";
// }
// ?>


<!-- The if...else statement executes some code if a condition is true and another code if that condition is false. -->
<!--  -->

<?php
// $t = date("H");

// if ($t < "21") {
//    echo "have a dood day!";
// }  else {
//    echo "good night dear!";
// }

?>



<?php
// $attendance = 200;

// if ($attendance == 310) {
//     echo "The student has attended school almost regularly. They have above 75% attendance.";
// } elseif ($attendance > 100 && $attendance < 360) {  // FIXED CONDITION
//     echo "The student hasn't attended school regularly and has less than 75% attendance!";
// } else {
//     echo "The student didn't attend class for almost 2 semesters and got suspended!";
// }
?>

<h2>Job Chart</h2>

<?php
$full_work_days = 30; // Total working days in a month
$worked_days = 29; // Employee's actual worked days

if ($worked_days == $full_work_days) {
    echo "The employee worked all $full_work_days days. Full salary will be credited.";
} elseif ($worked_days <= 24 && $worked_days < $full_work_days) {
    echo "The employee worked $worked_days days. Salary will be deducted for missing days.";
} elseif ($worked_days >= 10 && $worked_days < 25) {
    echo "The employee worked only $worked_days days. They will receive a warning.";
} else {
    echo "The employee worked only $worked_days days. They are fired!";
}
?>



<?php
// Student's marks
$marks = 500; // Change this value to test different scenarios

// Check the marks and assign a reward
if ($marks == 500) {
    $gifts = ["Laptop", "Smartphone", "Tablet", "Smartwatch"];
    $reward = $gifts[array_rand($gifts)]; // Randomly select a gift
    echo "Congratulations! You got full marks (500). Your reward is: $reward";
} elseif ($marks >= 400) {
    $girls = ["Teddy Bear", "Book", "Headphones", "Gift Card"];
    $reward = $girls[array_rand($girls)]; // Randomly select a gift
    echo "Great job! You scored 400 or more. Your reward is: $reward";
} else {
    echo "Keep working hard! No reward this time.";
}
?>
