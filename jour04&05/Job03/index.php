<!DOCTYPE html>
<html>
<head>
  <title>Formulaire POST</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
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
      background-color: #007bff;
      color: white;
      margin-top: 20px;
      cursor: pointer;
    }

    .result {
      margin-top: 20px;
      font-weight: bold;
      color: #007bff;
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
      $nbPost = count($_POST);
      echo "<div class='result'>Le nombre d’arguments POST envoyés est : $nbPost</div>";
    }
  ?>

</body>
</html>
