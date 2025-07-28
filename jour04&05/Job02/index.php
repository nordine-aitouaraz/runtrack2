<!DOCTYPE html>
<html>
<head>
  <title>Formulaire GET</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    body {
      font-family: "Roboto", sans-serif;
      padding: 40px;
      background-color: #e4e7eaff;
    }

    form {
      padding: 25px;
      border: 1px solid #ccc;
      border-radius: 10px;
      max-width: 400px;
      margin: auto;
      background-color: rgba(62, 99, 179, 0.5);
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #0066cc;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .result {
      color: #0066cc;
      text-align: center;
      margin-top: 23px;
      font-weight: bold;
    }

    .result-container {
      margin: 30px auto;
      max-width: 500px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: rgba(62, 99, 179, 0.5);
      backdrop-filter: blur(10px);
        padding: 1px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }
    .result-container2 {
      margin: 30px auto;
      max-width: 500px;
      text-align: center;
      
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
    }

    h2 {
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>

  <form method="GET" action="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">

    <label for="email">Âge :</label>
    <input type="text" name="email" id="email">

    <input type="submit" value="Envoyer">
  </form>

  <?php
    if (!empty($_GET)) {
      echo '<div class="result-container2">';
      echo "<h2>Arguments GET reçus :</h2>";
      echo '<div class="result-container">';
      echo "<table>";
      echo "<thead><tr><th>Argument</th><th>Valeur</th></tr></thead>";
      echo "<tbody>";
      foreach ($_GET as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
      }
      echo "</tbody></table>";
      echo "</div>";
      echo "</div>";
    }
  ?>

</body>
</html>
