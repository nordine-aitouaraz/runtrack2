<?php


session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = []; 
}
if (isset($_POST['envoyer'])) {
    $prenom = $_POST['prenom'];
    $_SESSION['prenoms'][] = $prenom;
}
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = []; 
}


?>

<html>
<form action="" method="post">
    <input type="text" name="prenom" required>
    <button type="submit" name="envoyer">Envoyer</button>
    </form>
    <form action="" method="post">
<button type="submit" name="reset">Reset</button>
</form>
    

        

    <?php echo implode("<br> ", $_SESSION['prenoms']); ?>
</html>