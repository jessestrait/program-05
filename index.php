<?php
 header('Content-Type: text/html; charset=iso-8859-1');
 ?>

<!DOCTYPE html>
<!-- index.html -->
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/program-05.css">
		<title>
			ITSE 2302 Program-05: Jesse Strait
		</title>
	</head>



<?php
echo "<h1>ITSE 2302 Program-05: Jesse Strait</h1>";
echo "<hr>";
echo "<h2>#1. Welcome and display variables..</h2>";

echo "<h1>Welcome to PHP!</h1>";
$name = "Jesse Strait";
echo "<h2>$name</h2>";

$x = pi()*pow(33,2);
echo "<h3>$x</h3>";
echo "<hr>";
echo "<h2>#2. Variables local,global, and static.</h2>";

function localVar(){
	$num1 = 23;
	$num2 = 33;
	$str1 = "Stormy";
	$str2 = "Daniels";
	echo "These are local variables called from within function<br>";
	echo "<strong>";
	echo "num1: $num1<br>";
	echo "num2: $num2<br>";
	echo "str1: $str1<br>";
	echo "str2: $str2<br>";
	echo "</strong>";
}

localVar();

$num1 = 43;
$num2 = 13;
$str1 = "Stormy";
$str2 = "Daniels";
echo "These are global variables called with the same name, outside function, in main.<br>";
echo "<strong>";
echo "num1: $num1<br>";
echo "num2: $num2<br>";
echo "str1: $str1<br>";
echo "str2: $str2<br>";
echo "</strong>";

function staticVar(){
	static $num11 = 23;
	//static $num22 = 33;
	static $str11 = "Stormy";
	//static $str22 = "Daniels";
}

echo "These are static variables called outside function, but declared in function.<br>";
echo "<strong>";
echo "num11: $num1<br>";
//echo "num22: $num2<br>";
echo "str11: $str1<br>";
//echo "str22: $str2<br>";
echo "</strong>";


echo "<hr>";
echo "<h2>#3. Basic Class Methods.</h2>";
echo "<p>This is a class named DaysofWeek, and has a method that displays the days, displayVar(). <br>The object is created with 'new' keyword, and then the method is passed, displaying the below...</p>";

class DaysofWeek
{
    // property declaration
    public $days = array("Monday, ", "Tuesday, ", "Wednesday, ", "Thursday, ", "Friday, ", "Saturday, ", "Sunday");

    // method declaration
    public function displayVar() {
    	echo "<strong>";
        echo $this->days[0];
        echo $this->days[1];
        echo $this->days[2];
        echo $this->days[3];
        echo $this->days[4];
        echo $this->days[5];
        echo $this->days[6];
        echo "</strong>";
    }
}
$dayz = new DaysofWeek();
$dayz->displayVar();

echo "<hr>";
echo "<h2>#4. Basic String Methods.</h2>";
echo "<p>Displays String and then displays length of chars, and how many words.</p>";

$strSen = "JavaScript and PHP are so much fun!";
$strLen = strlen($strSen);
$strWord = str_word_count($strSen);
$strSearchP = strpos($strSen, "PHP");
$strReplace = str_replace("so much fun", "wonderful", $strSen);

echo "The String is the sentence: <strong>$strSen</strong>, the length is <strong>$strLen</strong>, and has <strong>$strWord</strong> words.<br>";
echo "The substring <strong>PHP</strong> is found at index <strong>$strSearchP</strong>, in above sentence.<br>";
echo "programmatically replace <strong>so much fun</strong> with <strong>wonderful</strong>, in above sentence String<br>";
echo "<strong>$strReplace</strong>";

echo "<hr>";
echo "<h2>#5. String to Array.</h2>";
$strEx = explode(" ", $strSen);
$arrlength = count($strEx);

echo "<strong>$strSen</strong> is the string, <br>and below is an iteration of the Array created..using explode function<br>";

for($x = 0; $x < $arrlength; $x++) {
	
	echo "array[$x]: <strong>$strEx[$x]";
	echo "<br>";
	echo "</strong>";
}
echo "<hr>";
echo "<h2>#6. Array to String .</h2>";
echo "Turns the above array Days of week array into a string, using implode function<br>";

$days = array("Monday, ", "Tuesday, ", "Wednesday, ", "Thursday, ", "Friday, ", "Saturday, ", "Sunday");
$days2string = implode(" ",$days);
echo "<strong>$days2string</strong>";
echo "<hr>";
echo "<h2>#7. Formatted Strings from #2.</h2>";

echo "<strong>";
printf("%s %s was once %d years old.<br>",$str1, $str2, $num1);
printf("%s %s is worth %d million dollars.",$str1, $str2, $num2);
echo "</strong>";


echo "<hr>";

echo "<h2>#8. Count and List how many unique characters in the String .</h2>";
$strCount =  count( array_unique( str_split($strSen)));
echo "The String, <strong>$strSen</strong>, has <strong>$strCount</strong> unique characters...according to strcount, but listing them out shows different. <br><br>";


echo "<br>Are all the unique characters in above string.<br>";


$uniqueChar = "";
foreach (count_chars($strSen, 1) as $i => $val) {
	if($val == 1) {
		//echo "<strong>\"" , chr($i) , "\"</strong>, ";
		$uniqueChar .= chr($i);
	}
   	
}
echo "<strong>\"" , $uniqueChar , "\"</strong>, ";

echo "<br><br>Are all the unique characters NOT in above string.<br>";


$stringNot = count_chars($strSen, 4);
$stringSplit = str_split($stringNot);
$strNotResult = "";
foreach ($stringSplit as $i => $val) {
	
		//echo "<strong>\"" , chr($i) , "\"</strong>, ";
	   	$strNotResult .= chr($i);
}
echo "<strong>\"" , $strNotResult , "\"</strong>, ";

echo "<br><br>Below printed array from the above string, with the ASCII code as the key and the amount of times the char occurs as the value:<br>";
echo "<strong>";
print_r(count_chars($strSen,1));
echo "</strong>";

echo "<hr>";

echo "<h2>#9. Use utf8 decode to display special characters on page, see below .</h2>";

$specialChars = "&quot;<&¢£¥&euro;©>&quot;";
$specDecode = utf8_decode($specialChars);
echo "$specDecode";
echo "<hr>";

echo "<h2>#10. Random shuffle on String using str_shuffle.</h2>";
$strString = "JavaScript and PHP are so much fun!";
$shuffledStr = str_shuffle($strString);
echo "<strong>";
echo "$strString";
echo "</strong>";
echo "<br>";
echo "And now the String Shuffled....<br>";
echo "<strong>";
echo "$shuffledStr";
echo "</strong>";
echo "<hr>";

echo "<h2>#11. Raise every first character in the striung to UPPER Case.</h2>";
echo "<strong>";
echo "$strString";
echo "</strong>";
echo "<br>And now the String Uppered using ucwords....<br>";
$toUpperString = ucwords($strString);
echo "<strong>";
echo "$toUpperString";
echo "</strong>";
echo "<hr>";


echo "<h2>#12. Display the String with one word per line.</h2>";
echo "Original String Below...<br>";
echo "<strong>";
echo "$strString";
echo "</strong>";
echo "<br><br>";
echo "And now line by line....<br>";

$strArray = explode(" ", $strString);
$arrlength2 = count($strEx);

for($x = 0; $x < $arrlength2; $x++) {
	
	echo "<strong>$strArray[$x]";
	echo "<br>";
	echo "</strong>";
}
echo "<hr>";

?>
</html>