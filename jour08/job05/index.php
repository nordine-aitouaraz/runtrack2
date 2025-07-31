<?php
session_start();
if (!isset($_SESSION['morpion'])) {
    $_SESSION['morpion'] = array_fill(0, 9, '-');
    $_SESSION['tour'] = 'X';
    $_SESSION['gagnant'] = null;
}

function verifierGagnant($morpion) {
    $combinaisons = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];
    
    foreach ($combinaisons as $combo) {
        if ($morpion[$combo[0]] !== '-' && 
            $morpion[$combo[0]] === $morpion[$combo[1]] && 
            $morpion[$combo[1]] === $morpion[$combo[2]]) {
            return $morpion[$combo[0]]; 
        }
    }
    return null;
}

if (isset($_POST['case']) && $_SESSION['gagnant'] === null) {
    $case = (int)$_POST['case'];
    if ($case >= 0 && $case < 9 && $_SESSION['morpion'][$case] === '-') {
        $_SESSION['morpion'][$case] = $_SESSION['tour'];
        
        $_SESSION['gagnant'] = verifierGagnant($_SESSION['morpion']);
        
        if ($_SESSION['gagnant'] === null) {
            $_SESSION['tour'] = ($_SESSION['tour'] === 'X') ? 'O' : 'X';
        }
    }
}

if (isset($_POST['reset'])) {
    $_SESSION['morpion'] = array_fill(0, 9, '-');
    $_SESSION['tour'] = 'X';
    $_SESSION['gagnant'] = null;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>morpion</title>
    <style>
        table {
            border-collapse: collapse;
        }
        
        th, td {
            padding: 0;
        }

        body {
            text-align: center;
        }
        form {
            display: inline-block;
        }
        button {
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.8);
            width: 30px;
            height: 30px;
            font-size: 22px;
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .reset {
            margin-top: 20px;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gagnant {
            color: green !important;
        }
        .perdant {
            color: red !important;
        }
    </style>
</head>
<body>
    <h1>morpion</h1>
    
    <form method="post">
        <table >
            <tbody>
                <tr>
                    <td><button type="submit" name="case" value="0" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][0] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][0] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][0]; ?></button></td>
                    <td><button type="submit" name="case" value="1" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][1] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][1] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][1]; ?></button></td>
                    <td><button type="submit" name="case" value="2" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][2] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][2] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][2]; ?></button></td>
                </tr>
                <tr>
                    <td><button type="submit" name="case" value="3" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][3] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][3] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][3]; ?></button></td>
                    <td><button type="submit" name="case" value="4" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][4] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][4] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][4]; ?></button></td>
                    <td><button type="submit" name="case" value="5" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][5] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][5] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][5]; ?></button></td>
                </tr>
                <tr>
                    <td><button type="submit" name="case" value="6" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][6] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][6] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][6]; ?></button></td>
                    <td><button type="submit" name="case" value="7" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][7] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][7] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][7]; ?></button></td>
                    <td><button type="submit" name="case" value="8" <?php echo ($_SESSION['gagnant'] !== null) ? 'disabled' : ''; ?> class="<?php if($_SESSION['gagnant'] !== null) { echo ($_SESSION['morpion'][8] === $_SESSION['gagnant']) ? 'gagnant' : (($_SESSION['morpion'][8] !== '-') ? 'perdant' : ''); } ?>"><?php echo $_SESSION['morpion'][8]; ?></button></td>
                </tr>
            </tbody>
        </table>
        <button class="reset" type="submit" name="reset">Reset</button>
    </form>
</body>
</html>