<?php 

    $yourName = "Skylar Cameron";
    $number1 = 4;
    $number2 = 3;
    $total = $number1 + $number2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Skylar Cameron">
    <meta name="keywords">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>


</head>
<body>
<h1>PHP Basics</h1>
<?php 

    echo "<h2> $yourName </h2>" ;
    echo "<h3> Number 1: $number1 </h3>";
    echo "<h3> Number 2: $number2 </h3>";
    echo "<h1> Total: $total </h1>";

?>

<script>

<?php

echo "let languages =['PHP', 'HTML', 'Javascript'];";

echo "for(let i=0; i < languages.length; i++){
        document.write(languages[i]+ ' ' );
        }";

?>

</script>

</body>
</html>