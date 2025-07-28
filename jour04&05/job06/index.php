<!DOCTYPE html>
<html>
<head>
  <title>Test Pair ou Impair</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 40px;
      background-color: #f4f4f4;
      text-align: center;
    }
    form {
      background: white;
      padding: 20px;
      border-radius: 8px;
      display: inline-block;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    input[type="text"] {
      padding: 10px;
      width: 200px;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #0066cc;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .result {
      margin-top: 20px;
      font-weight: bold;
      font-size: 18px;
    }
  </style>
</head>
<body>

  <form method="GET" action="">
    <label for="nombre">Entrez un nombre :</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <input type="submit" value="Tester">
  </form>

  <?php
    if (isset($_GET['nombre']) && is_numeric($_GET['nombre'])) {
        $nombre = (int) $_GET['nombre'];

        if ($nombre % 2 == 0) {
            echo "<div class='result'>Nombre pair</div>";
        } else {
            echo "<div class='result'>Nombre impair</div>";
        }
    } elseif (isset($_GET['nombre'])) {
        echo "<div class='result' style='color: red;'>Veuillez entrer un nombre valide</div>";
    }
  ?>

</body>
</html>
