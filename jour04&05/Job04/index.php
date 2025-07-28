<!DOCTYPE html>
<html>
<head>
  <title>Tableau des arguments POST</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    form {
      background-color: #ffffff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      margin-bottom: 30px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input[type="text"],
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #28a745;
      color: white;
      margin-top: 20px;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      width: 400px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #28a745;
      color: white;
    }
  </style>
</head>
<body>

  <form method="POST" action="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom">

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom">

    <label for="email">Email :</label>
    <input type="text" name="email" id="email">

    <input type="submit" value="Envoyer">
  </form>

  <?php
    if (!empty($_POST)) {
      echo "<table>";
      echo "<tr><th>Argument</th><th>Valeur</th></tr>";
      foreach ($_POST as $key => $value) {
        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
      }
      echo "</table>";
    }
  ?>

</body>
</html>
