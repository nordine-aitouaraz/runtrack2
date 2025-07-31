<?php
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() + (365 * 24 * 60 * 60)); 
    $_COOKIE['nbvisites'] = 0; 
}

if (!isset($_COOKIE['nbvisites'])) {
    setcookie('nbvisites', 1, time() + (365 * 24 * 60 * 60)); 
    $nbvisites = 1;
} else {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbvisites, time() + (365 * 24 * 60 * 60));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de Visites 2</title>
</head>
<body>
    <h1>Compteur de Visites 2</h1>

    <p>Nombre de visites : <strong><?php echo isset($_COOKIE['nbvisites']) ? $_COOKIE['nbvisites'] : $nbvisites; ?></strong></p>
    
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>