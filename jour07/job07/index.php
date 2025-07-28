<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <form method="post">
        <input type="text" name="str" placeholder="Entrez votre texte" value="<?php echo isset($_POST['str']) ? htmlspecialchars($_POST['str']) : ''; ?>">
        
        <select name="fonction">
            <option value="gras" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'gras') ? 'selected' : ''; ?>>gras</option>
            <option value="cesar" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'cesar') ? 'selected' : ''; ?>>cesar</option>
            <option value="plateforme" <?php echo (isset($_POST['fonction']) && $_POST['fonction'] == 'plateforme') ? 'selected' : ''; ?>>plateforme</option>
        </select>
        
        <button type="submit">Modifier</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['str'])) {
        
        function gras($str) {
            return preg_replace('/\b[A-Z][a-zA-Z]*/', '<b>$0</b>', $str);
        }
        
        function cesar($str, $decalage = 2) {
            $result = '';
            for ($i = 0; $i < strlen($str); $i++) {
                $char = $str[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    if ($char >= 'A' && $char <= 'Z') {
                        $ascii = ((($ascii - 65) + $decalage) % 26) + 65;
                    } elseif ($char >= 'a' && $char <= 'z') {
                        $ascii = ((($ascii - 97) + $decalage) % 26) + 97;
                    }
                    $result .= chr($ascii);
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }
        
        function plateforme($str) {
            return preg_replace('/\b(\w*me)\b/', '$1_', $str);
        }
        
        $str = $_POST['str'];
        $fonction = $_POST['fonction'];
        
        echo "<p>Texte normal : " . htmlspecialchars($str) . "</p>";
        
        switch ($fonction) {
            case 'gras':
                echo "<p>Texte modifié : " . gras($str) . "</p>";
                break;
            case 'cesar':
                echo "<p>Texte modifié : " . htmlspecialchars(cesar($str)) . "</p>";
                break;
            case 'plateforme':
                echo "<p>Texte modifié : " . htmlspecialchars(plateforme($str)) . "</p>";
                break;
        }
    }
    ?>
</body>
</html>
