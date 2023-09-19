<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Core php assignment</title>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
        integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>

<body>

    <div class="subjectform">
        <h1>PHP ASSIGNMENT</h1>
        <h3>MODULE-3(Core PHP)</h3>
        <div>
            <ul>
                <li>Write a PHP program to enter marks of five subjects Physics, Chemistry,
                    Biology, Mathematics and Computer, calculate percentage and grade by if
                    else write a PHP program for find "Thursday" in week using switch
                    Function.
                    <br>
                    <b>ans:-</b>
                    <h3> Display Grade of Student as per marks obtained</h3>
                    <form class="pure-form pure-form-aligned" method="POST" action="perc1.php" target="_blank">
                        Enter the Marks of the student </br>
                        <fieldset>
                            <div class="pure-control-group">
                                <label for="phy">Physics:</label> <input id="phy" type="number" name="phy" /></br></br>
                            </div>
                            <div class="pure-control-group">
                                <label for="che"> Chemistry:</label><input id="che" type="number"
                                    name="chem" /></br></br>
                            </div>
                            <div class="pure-control-group">
                                <label for="maths">Maths:</label> <input id="maths" type="number"
                                    name="maths" /></br></br>
                            </div>
                            <div class="pure-control-group">
                                <label for="bio">Biology:</label> <input id="bio" type="number" name="bio" /></br></br>
                            </div>
                            <div class="pure-control-group">
                                <label for="com">Computer:</label> <input id="com" type="number" name="com" /></br></br>
                            </div>
                            <div class="pure-control-group">
                                <label for="week">week days in number :</label> <input type="number" name="days"
                                    id="week"><br><br>
                            </div>
                <li>
                    Write a PHP program to check Leap years between 1901 to 2016 Using
                    nested if.
                    <br>
                    <b>Ans :</b>
                </li>
                <div class="pure-control-group">
                    <label for="leapy">check leap years : </label><input type="number" name="leap" id="leapy">
                </div>
                <div class="pure-control-group">
                    <label for="sub"></label> <input id="sub" type="submit" value="submit" name="subtn" />
                </div>

                </fieldset>
                </form>
                </li>
                <li>
                    Write a PHP program to find the largest of three numbers using ternary
                    Operator. <br>
                    <b>Ans :</b>

                    <div class="pure-form pure-form-aligned pure-control-group">
                        <form id="numberForm" action="" method="POST" target="_blank">
                            <label for="value_x">X :</label><input type="number" name="num1" id="value_x"><br>
                            <label for="value_y">Y :</label><input type="number" name="num2" id="value_y"><br>
                            <label for="value_z">Z :</label><input type="number" name="num3" id="value_z"><br>
                            <label for="value_XYZ">Largest number among X,Y and Z is :</label><input type="submit"
                                name="value_XYZ" value="find largest" id="value_XYZ"><br>
                        </form>
                        <div id="result"></div>
                    </div>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $num1 = $_POST["num1"];
                        $num2 = $_POST["num2"];
                        $num3 = $_POST["num3"];

                        $largest = ($num1 >= $num2) ? (($num1 >= $num3) ? $num1 : $num3) : (($num2 >= $num3) ? $num2 : $num3);
                    }
                    if (isset($largest)):
                        echo "<br>The largest number $num1,$num2 and $num3 is: " . $largest;

                    endif;
                    ?>
                    <!-- <p>
                        function largest($x, $y, $z) {
                            $max = $x;
                            $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
                            
                            echo "Largest number among $x, $y and $z is: $max\n";
                          }
                          
                          largest(100, 50, 25);
                          largest(50, 50, 25);
                    </p>  -->
                </li>
                <li>Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21,
                    34. <br>
                    <b>Ans: </b>
                    <p>
                        $num = 0;<br>
                        $n1 = 0;<br>
                        $n2 = 1;<br>

                        echo "use h3 Fibonacci series for 0 to 34 number: h3";<br>
                        echo "\n";<br>
                        echo $n1 . ' ' . $n2 . ' ';<br>
                        while ($num < 8) { <br>
                            $n3=$n2 + $n1;<br>
                            echo $n3 . ' ' ; <br>
                            $n1=$n2; <br>
                            $n2=$n3;<br>
                            $num=$num + 1;<br>
                            } <br>
                    </p>
                    <strong>Output Here...</strong>

                    <?php
                    $num = 0;
                    $n1 = 0;
                    $n2 = 1;
                    echo "<h3>Fibonacci series for 0 to 34 number: </h3>";
                    echo "\n";
                    echo $n1 . ' ' . $n2 . ' ';
                    while ($num < 8) {
                        $n3 = $n2 + $n1;
                        echo $n3 . ' ';
                        $n1 = $n2;
                        $n2 = $n3;
                        $num = $num + 1;
                    }
                    ?>
                </li>
                <li>Write a program to find whether a number is Armstrong or not Write a
                    program to print the below format :<br>
                    5 9<br>
                    2610<br>
                    3711<br>
                    4812<br>
                    <b>Ans :</b><br>
                    <div>
                        <form method="post" action="perc1.php" target="_blank">
                            enter the above numbers and any numbers :
                            <input type="number" name="num">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <!-- <?php
                    // if ($_POST) {
                    //     //get the number entered  
                    //     $number = $_POST['number'];
                    //     //store entered number in a variable  
                    //     $a = $number;
                    //     $sum = 0;
                    //     //run loop till the quotient is 0  
                    //     while ($a != 0) {
                    //         $rem = $a % 10; //find reminder  
                    //         $sum = $sum + ($rem * $rem * $rem); //cube the reminder and add it to the sum variable till the loop ends  
                    //         $a = $a / 10; //find quotient. if 0 then loop again  
                    //     }
                    //     //if the entered number and $sum value matches then it is an armstrong number  
                    //     if ($number == $sum) {
                    //         echo "Yes $number an Armstrong Number";
                    //     } else {
                    //         echo "$number is not an Armstrong Number";
                    //     }
                    // }
                    ?> -->
                </li>
                <li>
                    Write a program for this Pattern:<br>
                    *****<br>
                    *<br>
                    *<br>
                    *<br>
                    *****
                    <br>
                    <b>Ans :</b><br>
                    <div>
                        <form method="POST" action="perc1.php" target="_blank">
                            <label for="pattern"> Get your pattern :<input type="number" name="pattern"
                                    id="pattern"></label>
                            <input type="submit" value="get pattern" name="patternn" id="patternn">
                        </form>
                    </div>
                </li>
                <li>
                    What will be the values of $a and $b after the code below is executed?<br>
                    Explain your answer.<br>
                    $a = '1';<br>
                    $b = &$a;<br>
                    $b = "2$b";<br><br>
                    <b>Ans : 21</b><br>
                    <p>Because...</p>
                    <ol type="1">
                        <li>Initially, $a is assigned the string value '1'.</li>
                        <li>$b is assigned by reference to $a. This means that $b now points to the same memory location
                            as $a. Any changes made to $b will also affect $a, and vice versa.</li>
                        <li>$b = "2$b"; assigns the value "2$b" to $b. This means that $b will be "21" because it
                            concatenates the string "2" with the current value of $b, which is "1" (as both $a and $b
                            reference the same memory location).
                            <br><br>
                            Since $b is assigned by reference to $a, any changes made to $b also affect $a. Therefore,
                            after executing this code, both $a and $b will have the value "21".
                        </li>
                    </ol>
                </li>
                <li>
                    How can you tell if a number is even or odd without using any Condition or
                    loop?<br>
                    <b>Ans :</b><br>
                    $even = ($num % 2 == 0);<br>
                    $odd = ($num % 2 != 0);<br>
                    Using modulo (%) operator: This is the simplest method of checking for even and odd and in this
                    method, we simply check whether the number is divisible by 2 or not using the modulo '%'
                    operator.<br>
                    <br>
                    $arr = array("0" => "Even", "1" => "Odd");<br>

                    $check = 13;<br>

                    echo "Your number is: " . $arr[$check % 2];<br>
                    <?php

                    $arr = array("0" => "Even", "1" => "Odd");

                    $check = 13;

                    echo "Your number is: " . $arr[$check % 2];

                    ?>
                </li>
                <li>
                    How can you declare the array (all type) in PHP? Explain with example
                    Covert a JSON string to array.<br>
                    <b>Ans :</b><br>
                    <?php

                    // Using array() function
                    $cars = array("Volvo", "BMW", "Toyota"); //true 1 and false 0 
                    
                    echo "<pre>";
                    print_r($cars) . "<br>";
                    echo "</pre>";

                    // Using shorthand [] syntax 
                    $array1 = ["foo" => "bar", "bar" => "foo"];
                    echo "<pre>";
                    print_r($array1) . "<br>";
                    echo "</pre>";

                    // index array start index [0] to incresed [1].
                    $array2 = array(10, 20, 30, 40, 50, 80);

                    echo "<pre>";
                    print_r($array2) . "<br>";
                    echo "</pre>";

                    //associate array key and pair value
                    $array3 = array("a" => "yellow", "b" => "blue", "c" => "green");
                    echo "<pre>";
                    print_r($array3) . "<br>";
                    echo "</pre>";

                    // multidimensional array 
                    $array4 = array(array("Volvo", 22, 18), array("BMW", 15, 13), array("Toyto", 5, 2), array("Land Rover", 17, 15));
                    echo "<pre>";
                    print_r($array4) . "<br>";
                    echo "</pre>";

                    // json string convert to array
                    $jsonString = '{"name":"kasamali","age":23,"isStudent":true}';

                    // Convert JSON string to array by json_decode
                    $array = json_decode($jsonString, true);
                    echo "<pre>";
                    var_dump($array);
                    echo "<br>";
                    print_r($array);
                    echo "</pre>";

                    // array convert to JASON string by json_encode
                    $data = array(
                        "name" => "kasamali",
                        "age" => 23,
                        "city" => "Ahemdabad"
                    );

                    // Convert the array to a JSON string
                    $jsonString = json_encode($data);
                    echo $jsonString;

                    ?>
                </li>
                <li>
                    Write program to remove duplicate values from array <br>
                    <b>Ans :</b><br>
                    Input Array <br>
                    $a = array("red", "green", "red", "blue");<br>

                    // Array after removing duplicates<br>
                    print_r(array_unique($a));<br>
                    <br>
                    <strong>Output :</strong>
                    <?php
                    // Input Array
                    $a = array("red", "green", "red", "blue");

                    // Array after removing duplicates
                    echo "<pre>";
                    print_r(array_unique($a));
                    echo "</pre>";

                    ?>

                </li>
                <li>
                    Get random values from array. <br>
                    <b>Ans :</b><br><br>
                    // Declare an associative array<br>
                    $arr = array("a" => "21", "b" => "31", "c" => "7", "d" => "20");<br>
                    <br>
                    // Use array_rand function to returns random key<br>
                    $key = array_rand($arr);<br>
                    <br>
                    // Display the random array element<br>
                    echo $arr[$key];<br><br>
                    <strong>Output :</strong><br>
                    <?php

                    // Declare an associative array
                    $arr = array("a" => "21", "b" => "31", "c" => "7", "d" => "20");

                    // Use array_rand function to returns random key
                    $key = array_rand($arr);

                    // Display the random array element
                    echo "<pre>";
                    print_r($arr[$key]);
                    echo "</pre>";

                    ?>

                </li>
                <li>
                    Write a PHP script which decodes the following JSON string.<br>
                <li>Use a for loop to total the contents of an integer array called numbers which
                    has five elements. Store the result in an integer called total.</li><br>
                <b>Ans :</b><br><br>
                $numbers = [25, 80, 70, 60, 30, 60];<br>
                $total = 0;<br>
                <br>
                for ($i = 0; $i < count($numbers); $i++) {<br>
                    $total = $total + $numbers[$i];<br>
                    }<br>
                    <br>
                    echo "The total is: " . $total . "<br>";<br>
                    <br>
                    $num = array(30, 35, 40, 45, 60, 70, 80, 90);<br>
                    $total = 0;<br>
                    <br>
                    for ($i = 0; $i < count($num); $i++) {<br>
                        $total = $total + $num[$i];<br>
                        }<br>
                        <br>
                        echo "The total is" . $total;<br>
                        <i>Output :</i><br><br>
                        <?php

                        $numbers = [25, 80, 70, 60, 30, 60];
                        $total = 0;

                        for ($i = 0; $i < count($numbers); $i++) {
                            $total = $total + $numbers[$i];
                        }

                        echo "The total is: " . $total . "<br>";


                        $num = array(30, 35, 40, 45, 60, 70, 80, 90);
                        $total = 0;

                        for ($i = 0; $i < count($num); $i++) {
                            $total = $total + $num[$i];
                        }

                        echo "The total is" . $total;
                        ?>
                        </li>
                        <li>
                            Declare a Multi Dimensioned array of floats called balances having Three
                            rows and five columns.<br>
                            <b>Ans :</b><br><br>
                            $balances = array(<br>
                                array(12.50, 11.30, 13.50, 10.80, 11.20),<br>
                                array(9.60, 8.50, 11.10, 7.50, 5.50),<br>
                                array(13.50, 11.40, 16.20, 11.10, 15.60)<br>
                            );<br>
                            <br>
                            echo "multidimensional array row[2] index and column[3] index value is:";<br>
                            print_r($balances[2][3]);<br>
                            echo "<br>";<br>
                            echo "multidimensional array row[0] index and column[0] index value is:";<br>
                            print_r($balances[0][0]);<br>
                            echo "<br>";<br><br>
                            <i>Output :</i><br><br>
                            <?php
                            //Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.
                            $balances = array(
                                array(12.50, 11.30, 13.50, 10.80, 11.20),
                                array(9.60, 8.50, 11.10, 7.50, 5.50),
                                array(13.50, 11.40, 16.20, 11.10, 15.60)
                            );

                            echo "multidimensional array row[2] index and column[3] index value is:";
                            print_r($balances[2][3]);
                            echo "<br>";
                            echo "multidimensional array row[0] index and column[0] index value is:";
                            print_r($balances[0][0]);
                            echo "<br>";

                            ?>
                        </li>
            </ul>
        </div>
    </div>
</body>

</html>