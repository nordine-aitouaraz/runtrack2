<?php
echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Texte un caractère sur deux</title>
    <link href='https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap' rel='stylesheet'>
    <style>
        p {
            color: #475678;
            font-family: 'Outfit', sans-serif;
            font-size: 50px;
            text-align: center;
            font-weight: bold;
            background-color: rgba(138, 139, 150, 0.3);
            background-blur: 5px;
        }
            body {
            backgroud-image: url('https://img.freepik.
            com/vecteurs-libre/arriere-plan-particul
            es-technologiques-abstraites-realistes_
            23-2148431735.jpg?semt=ais_hybrid&w=740');
}
    </style>
</head>
<body>
";

?>
<body>
<?php
$str = "Est ce que mon code php va fonctionner ?";

echo "<p>";
for ($i = 0; $i < strlen($str); $i += 2) {
    echo $str[$i];
}
echo "</p>";
?>

</body>
</html>
