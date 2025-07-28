<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f3f3;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #0066cc;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .message {
      margin-top: 20px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>

  <form method="POST" action="">
    <h2>Connexion</h2>
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Se connecter">
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username === "John" && $password === "Rambo") {
        echo "<div class='message'>C’est pas ma guerre</div>";
      } else {
        echo "<div class='message'>Votre pire cauchemar</div>";
      }
    }
  ?>

</body>
</html>
