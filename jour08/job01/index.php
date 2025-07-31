<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}

if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 1;
} else {
    $_SESSION['nbvisites']++;
}
?>

<body>
    <h1>Compteur de Visites</h1>
    
        <p>Nombre de visites : <strong><?php echo $_SESSION['nbvisites']; ?></strong></p>
    
    <form method="post">
        <button type="submit" name="reset" class="reset-btn">Reset</button>
    </form>
    
</body>
