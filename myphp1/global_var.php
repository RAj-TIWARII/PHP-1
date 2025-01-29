<h1>Assign Multiple Values</h1>
 <?php
  $x = $y = $z = "Fruits";

  echo $x, $y, $z;
 ?>

<!----------------------------------------------------------------------------------->

<h1>PHP Variables Scope</h1>

<!-- <p>

PHP Variables Scope
In PHP, variables can be declared anywhere in the script.

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

local
global
static
Global and Local Scope

</p> -->


<?php
//$x = 5; // global scope

// function myTest() {
 # echo "<p> variable x inside the function is: $x</p>";
//}
//myTest();
//echo "<p>Variable x outside the function is: $x</p>";
//?>

<!----------------------------------------------------------------------------------->

<h2>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h2>

<?php
 // function myTest(){
  //$x = 10; // local scope

  //echo "<p>Variables x inside function is $x</p>";
 //}
//myTest();
 // "<p>Variable x outside the function is $x</p>";
?>



<!----------------------------------------------------------------------------------->

<!-- PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):


 -->



<?/*php
$x = 10;
$y = 50;

function myTest(){
    $GLOBALS['x'] + $GLOBALS['y'];

}

myTest();
echo $x + $y;
*/?>

<?/*php
 function myTest(){
    static $x = 2;
    echo $x;
    $x++;
 }

 myTest();
 echo "<br>";
 myTest();
  echo "<br>";
  myTest();
*/?>

<!----------------------------------------------------------------------------------->

<!-- <h2>Display Variables</h2> -->

<?php
# $txt1 = "Banana";
 # $txt2 = "Apple";

# echo "I Love $txt1 shake!";
# echo "<br>";
# echo "I Love $txt2 juice!";
?>


<!----------------------------------------------------------------------------------->

<?php
# $x = true;   # checking string value / integer value / float / boolean / array / null
# var_dump($x); 


echo "<br>";
?> 


<?php
# $fruits = array("3Mango", "2Banana", "1apple");   # checking string value / integer value / float / bool
# var_dump($fruits); 
?> 


<!----------------------------------------------------------------------------------->

<?php
 # echo strlen("Hey dr brand!");    // String Count
?>

<?php
# echo str_word_count("Hello World!");   // Word Count
?>

<?php
echo strpos ("Hey bob!",  "hey Mr"); 
?>
 
<!----------------------------------------------------------------------------------->