<!DOCTYPE html>
<html>
<head>
  <title>Calcule</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    .p1 {
        color: #2B4570;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        border: 2px solid #2B4570;
        margin: 20px auto;
        padding: 15px;
        text-align: center;
        width: 300px;
        border-radius: 10px;
        background-color: rgba(43, 69, 112, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .p1:hover {
        transform: scale(1.05);
        background-color: rgba(43, 69, 112, 0.3);
        box-shadow: 0 8px 25px rgba(43, 69, 112, 0.4);
        border-width: 3px;
    }
    .p2 {
        color: #F25F5C;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        border: 2px solid #F25F5C;
        margin: 20px auto;
        padding: 15px;
        text-align: center;
        width: 300px;
        border-radius: 10px;
        background-color: rgba(242, 95, 92, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .p2:hover {
        transform: scale(1.05);
        background-color: rgba(242, 95, 92, 0.3);
        box-shadow: 0 8px 25px rgba(242, 95, 92, 0.4);
        border-width: 3px;
    }
    .p3 {
        color: #E9C46A;
        font-size: 20px;
        font-family: 'Roboto', sans-serif;
        border: 2px solid #E9C46A;
        margin: 20px auto;
        padding: 15px;
        text-align: center;
        width: 300px;
        border-radius: 10px;
        background-color: rgba(233, 196, 106, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .p3:hover {
        transform: scale(1.05);
        background-color: rgba(233, 196, 106, 0.3);
        box-shadow: 0 8px 25px rgba(233, 196, 106, 0.4);
        border-width: 3px;
    }

    body {
        background-color: #515758ff;
            }
  </style>
</head>
<body>

<?php
    $a = 7;
    $b = 9;
    
   function calcule($a, $operation, $b) {
        switch ($operation) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Erreur : Division par zéro";
                }
            case '%':
                if ($b != 0) {
                    return $a % $b;
                } else {
                    return "Erreur : Modulo par zéro";
                }
            default:
                return "Erreur : Opération non reconnue";
        }
    }
    
    echo "<p class='p1'>";
    echo "Addition : $a + $b = " . calcule($a, '+', $b) . "<br>";
    echo "</p>";
    
    echo "<p class='p2'>";
    echo "Soustraction : $a - $b = " . calcule($a, '-', $b) . "<br>";
    echo "</p>";

    echo "<p class='p3'>";
    echo "Multiplication : $a x $b = " . calcule($a, '*', $b) . "<br>";
    echo "</p>";
?>
    
</body>
</html>