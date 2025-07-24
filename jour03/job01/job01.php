<?php

$numeros = [200, 204, 173, 98, 171, 404, 459];

echo "
<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 30px auto;
        font-family: Arial, sans-serif;
        background-color: rgba(255, 255, 255, 0.8);
        border: 3px solid #000;
        border-radius: 10px;
        font-family: 'Outfit', sans-serif;
    }
    th {
        background-color: #ffffffff;
        color: black;
        padding: 10px;
        border: 3px solid #000;
        border-radius: 10px;
    }
    td {
        text-align: center;
        padding: 10px;
        font-weight: bold;
        border: 3px solid #000;
        border-radius: 10px;
    }
    .paire {
        background-color: #79a864ff; 
        color: black;
    }
    .impaire {
        background-color: #c73232ff; 
        color: black;
    }
    }
</style>

<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Parité</th>
    </tr>
";

foreach ($numeros as $nombre) {
    if ($nombre % 2 == 0) {
        $parite = "paire";
        $class = "paire";
    } else {
        $parite = "impaire";
        $class = "impaire";
    }

    echo "<tr class='$class'><td>$nombre</td><td>$parite</td></tr>";
}

echo "</table>";
?>
