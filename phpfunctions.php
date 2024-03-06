<?php 

//function that will accept a Unix Timestamp as a parameter and format it into mm/dd/yyyy format.
 $today = date("m/d/y");
echo "Today is " . $today . "<br>"; 
//function that will accept a Unix Timestamp as a parameter and format it into dd/mm/yyyy 
$anotherDay = date("d/m/y");
echo "Today is " . $anotherDay . "<br>";
//function that will accept a number parameter and display it as a formatted phone number
//vprintf() allows you to declare placeholders to be populated using a single array of values
$string = '+11234567890';
vprintf('%s-%s-%s', sscanf($string, '+1%3s%3s%4s'));

//number parameter and display it as US currency with a dollar sign
  $moneyNumber = 123456; 
  echo "<br>" . '$' . $moneyNumber . ".00";
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "author" content="Skylar Cameron">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php functions</title>

</head>
<body>
    
</body>
</html>