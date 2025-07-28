<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
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
      padding-right: 1px;
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
  </style>
</head>
<body>

  <form method="GET" action="">
    <label>Nom :</label>
    <input type="text" name="nom">

    <label>Prénom :</label>
    <input type="text" name="prenom">

    <label>Âge :</label>
    <input type="text" name="email">

    <input type="submit" value="Envoyer">
  </form>

  <?php
    if (!empty($_GET)) {
        $nombreArguments = count($_GET);
        echo '<div class="result">Nombre d\'arguments GET : ' . $nombreArguments . '</div>';
    }
  ?>

</body>
</html>
