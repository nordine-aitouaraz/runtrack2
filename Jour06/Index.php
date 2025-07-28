<?php
$style = "style1";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $style = $_POST["style"] ?? "style1";
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Style Dynamique</title>
    <link rel="stylesheet" href="css/<?php echo htmlspecialchars($style); ?>.css">
</head>
<body>

<form method="POST" action="">
    <label for="style">Choisissez votre style de page :</label>
    <select id="style" name="style">
        <option value="style1" <?php if($style=="style1") echo "selected"; ?>>Style violet</option>
        <option value="style2" <?php if($style=="style2") echo "selected"; ?>>Style bleu</option>
        <option value="style3" <?php if($style=="style3") echo "selected"; ?>>Style vert</option>
    </select>
    <br><br>
    <button type="submit">Go !</button>
</form>
<main>
    <h1>Je ne sais pas quoi ecrire comme titre </h1>
    <p>Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. Illo aliquam nesciunt 
        itaque dignissimos minima temporibus dolor 
        unde laudantium, error libero ipsa assumenda 
        ducimus ipsum. Facilis perspiciatis odit inventore
         assumenda quos?</p>
</main>

</body>
</html>
