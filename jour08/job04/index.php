<?php

session_start();

if(isset($_POST['deconnexion'])) {
    session_destroy();
    session_start(); 
    
}

if(isset($_POST['connexion'])) {
    $identifiant = $_POST['identifiant'];
    $_SESSION['identifiant'] = $identifiant;


}

?>

<html>
    <?php if (isset($_SESSION['identifiant'])): ?>
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['identifiant']); ?> !</h2>
        
        <form method="post">
            <button type="submit" name="deconnexion">Déconnexion</button>
        </form>
        
    <?php else: ?>
        <h1>Connexion</h1>
        <form method="post">
            <input type="text" name="identifiant" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
        
    <?php endif; ?>
</html>