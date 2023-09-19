<?php
date_default_timezone_set('Asia/Kolkata');

echo "<b>que :1</b><br>";

$ph = $_POST['phy'];
$ch = $_POST['chem'];
$mt = $_POST['maths'];
$bi = $_POST['bio'];
$com = $_POST['com'];
$per = 0;
if (isset($_POST['subtn'])) {
  $per = ($ph + $ch + $mt + $bi + $com) / 5;
  echo "Percentage obtained by student is $per </br>";

  if ($per >= 90 && $per <= 100) {
    $per = 1;
  } else if ($per >= 80 && $per < 90) {
    $per = 2;
  } else if ($per >= 70 && $per < 80) {
    $per = 3;
  } else if ($per >= 60 && $per < 70) {
    $per = 4;
  } else if ($per >= 40 && $per < 60) {
    $per = 5;
  } elseif ($per >= 100) {
    $per = 6;
    // echo "wrong input!!";
  } else {
    $per = 7;
    // echo "faill!!";
  }

  switch ($per) {
    case 1:
      echo "Grade : A";
      break;

    case 2:
      echo "Grade : B";
      break;

    case 3:
      echo "Grade : C";
      break;

    case 4:
      echo "Grade : D";
      break;

    case 5:
      echo "Grade : E";
      break;
    case 6:
      echo "wrong input!!";
      break;

    default:
      echo "Fail!!";
  }

}

$day = $_POST['days'];

if (isset($_POST['subtn'])) {
  echo "</br> find your day : ";
  switch ($day) {
    case "1":
      echo "It is Monday!";
      break;
    case "2":
      echo "It is today!";
      break;
    case "3":
      echo "It is Wednesday!";
      break;
    case "4":
      echo "It is Thursday!";
      break;
    case "5":
      echo "It is Friday!";
      break;
    case "6":
      echo "It is Saturday!";
      break;
    case "7":
      echo "It is Sunday!";
      break;
    default:
      echo "Invalid number!";
  }
}

echo "<b>que :2</b><br>";

// $year = $_POST[ 'leap' ];

// if( $year )
// 	{	
// 		//get the year
// 		echo "<br><br> Leap leapyears between 1901 and 2016 :";
// 		//check if entered value is a number
// 		if(!is_numeric($year))
// 		{
// 			echo "Strings not allowed, Input should be a number";
// 			return;
// 		}

// 		//multiple conditions to check the leap year
// 		elseif( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )
// 		{
// 			echo "<br> $year is a leap year";  
// 		}
// 		else
// 		{
// 			echo "<br> $year is not a leap year";  
// 		}

// 	}


$leapyearr = $_POST['leap'];
// $leapyearr=1947;

echo "<br>Leap leapyear :<br>";

for ($leapyear = $leapyearr; $leapyear <= $leapyearr; $leapyear++) {

  if ($_POST['leap']) {
    //get the year
    //check if entered value is a number
    if (!is_numeric($leapyear)) {
      echo "Strings not allowed, Input should be a number";
      return;
    }
    //multiple conditions to check the leap year
    if ((0 == $leapyear % 4) and (0 != $leapyear % 100) or (0 == $leapyear % 400)) {
      echo "<br> $leapyear is a leap year";
    } else {
      echo "<br> $leapyear is not a leap year<br>";
    }
  }
}

// $year = 1998;
echo "<br><br> Leap years between 1901 and 2016:<br>";

for ($year = 1901; $year <= 2016; $year++) {
  if ($year % 4 == 0) {
    if ($year % 100 != 0 || ($year % 100 == 0 && $year % 400 == 0)) {
      echo $year . " is a leap year.<br>";
    }
  } else {
    echo $year . " is not leap year<br>";
  }
}


// $startYear = 1901;
// $endYear = 2016;

// echo "Leap years between 1901 and 2016 :<br>";

// for ($year = 1901; $year <= 2016; $year++) {
//     if ($year % 4 == 0) {
//         if ($year % 100 == 0) {
//             if ($year % 400 == 0) {
//                 echo $year . "<br>";
//             }
//         } else {
//             echo $year . "<br>";
//         }
//     }
// }

echo "<b>que :4</b><br>";
$n1 = 1; // first number 
$n2 = 0; // second number
for ($i = 0; $i <= 9; $i++) {
  if ($i == 9) {
    echo " $n2.";
  } else {
    echo " $n2,";
    $temp = $n1 + $n2; // temporary variable  
    $n1 = $n2; // $n2 value shifted to $n1 
    $n2 = $temp; // temporary value ( sum ) is shifted. 
  }
}
echo "<br><b>que :5</b><br>";


$number = $_POST['num'];

if ($number) {
  //get the number entered  
  //store entered number in a variable  
  $a = $number;
  $sum = 0;
  //run loop till the quotient is 0  
  while ($a != 0) {
    $rem = $a % 10; //find reminder  
    $sum = $sum + ($rem * $rem * $rem); //cube the reminder and add it to the sum variable till the loop ends  
    $a = $a / 10; //find quotient. if 0 then loop again  
  }
  //if the entered number and $sum value matches then it is an armstrong number  
  if ($number == $sum) {
    echo "Yes $number an Armstrong Number<br>";
  } else {
    echo "$number is not an Armstrong Number<br>";
  }
}

echo "<br><b>que :6</b><br>";

$rows = $_POST['pattern']; // Number of rows in the pattern

for ($i = 1; $i <= $rows; $i++) {
  for ($j = 1; $j <= $rows; $j++) {
    if ($i == 1 || $i == $rows || $j == $rows) {
      echo "*";
    } else {
      echo " ";
    }
  }
  echo "<pre>";
  print_r("\n");
  echo "</pre>";
}

echo "<br><b>que :7</b><br>";
$a = '1';
$b = &$a;
$b = "2$b";

?>