<?php
$date =  date('Y/m/d', time()); //string
echo "The value of \$date: ".$date."<br>";


$tar = "2017/05/24"; // string
echo "The value of \$tar: ".$tar."<br>";


$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";

print_r($year);
echo "<br>";

//Question 3

if($date - $tar > 0){
	echo "the future <br>";
}
elseif ($date - $tar < 0) {
	echo "the past <br>";# code...
}
else {
	echo "oops <br>";
}

//Question 4

$search = "/";
$lastPos = 0;
$positions = array();

while (($lastPos = strpos($date, $search, $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen($search);
}

foreach ($positions as $value) {
    echo "The position of '/' is ". $value ."<br />";
}

//Question 5

echo "The number of words in \$date is " . str_word_count($date) . "<br>";
//returns "0"

//Question 6
$string = "yes";
echo "The string length of \$string is: " . strlen($string) . "<br>";

//Question 7
echo "The ASCII value of the first character of \$string is: " . ord($string) . "<br>";

//Question 8 
echo "The last 2 character os \$string are: " . substr($string, -2) . "<br>";

//Question 9

list($month, $day, $year2) = split('[/]', $date);
echo "Month: $month; Day: $day; Year: $year2<br />\n";

//Question 10

echo "<br> foreach loop <br>";
foreach($year as $item) {
	switch($item % 4){
		case 0:
			switch($item % 100){
				case 0:
					switch($item % 400){
						case 0:
							echo "true a <br>";
						break;
						default:
							echo "false a <br>";
						break;
						}
					break;

					default:
					echo "true b <br>";
					break;
				}
			break;
			default:
			echo "false b<br>";
			break;
		}
}

echo "<br> for loop";
$divider = 0;
for($i=0; $i <count($year); $i++){
		$divider = $year[$i];
		switch($divider %4){
			case 0:
				switch($divider % 100){
					case 0:
						switch($divider % 400){
							case 0:
							echo "true a <br>";
							break;

							default:
							echo "false a <br>";
							break;
						}
					break;

					default:
					echo "true b <br>";
					break;
				}
			break;
			default:
			echo "false b<br>";
			break;
		}
}





?>