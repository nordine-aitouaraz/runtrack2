<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occurrences</title>
    <style>
       
        span {
            font-weight: bold;
            color: #2c3e50;
            font-size: large;
        }
        body {
            background-color: #f4f4f4;
            padding: 20px;
            max-width: 300px;
        }
      
        
    </style>
</head>
<body>

<?php
function occurrences($str, $char) {
    $count = 0;
    $length = strlen($str);
    
    for ($i = 0; $i < $length; $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    
    return $count;
}
echo "<p>";
$str = "lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
$char = "o";
echo "<div class='result'>";
echo "<span>Dans la chaîne</span> '$str', <span>le caractère '$char' apparaît </span>" . occurrences($str, $char) . " <span>fois.</span>";
echo "</div>";
echo "</p>";
?>

</body>
</html>
