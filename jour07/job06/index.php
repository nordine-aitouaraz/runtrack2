<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            font-family: 'Roboto', sans-serif;
            background: #343b46ff;
            color: #5D4037;
            padding: 20px;
            text-align: center;
            min-height: 100vh;
        }
        
        h1 {
            color: #FF8A65;
            margin-bottom: 30px;
        }
        
        .separateur {
            width: 80%;
            height: 3px;
            background: linear-gradient(90deg, transparent, #ffffffff, transparent);
            margin: 40px auto;
            border-radius: 2px;
        }
        
        /* Première section - Version simple */
        .section-simple {
            background-color: #e4941cff;
            border: 2px solid #e4941cff;
            border-radius: 15px;
            padding: 25px;
            margin: 20px auto;
            max-width: 600px;
        }
        
        .titre-section {
            color: #5D4037;
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        
        .resultat-simple {
            background-color: rgba(255, 183, 77, 0.4);
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            margin: 10px 0;
            border-left: 4px solid #e4941cff;
        }
        
        /* Deuxième section - Version interactive */
        .section-interactive {
            background-color: #d06087ff;
            border: 2px solid #d06087ff;
            border-radius: 15px;
            padding: 25px;
            margin: 20px auto;
            max-width: 600px;
        }
        
        .titre-section-interactive {
            color: #5D4037;
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }
        
        .text-display {
            background-color: #F8BBD0;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            font-size: 14px;
            line-height: 1.3;
            min-height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-left: 4px solid #F8BBD0;
            font-weight: bold;
        }
        
        .btn {
            background: #F8BBD0;
            border: none;
            color: #5D4037;
            padding: 11px 23px;
            font-size: 12px;
            font-weight: bold;
            border-radius: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            background: linear-gradient(45deg, #F48FB1, #F8BBD0);
        }
        
        .btn:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    
    <!-- version simple -->
    <div class="section-simple">
        <div class="titre-section"> Version Simple </div>
        <?php
        $str1 = "Si tu réussis à déchiffrer ce texte, bien joué.";
        $leetSpeak1 = [
            'A' => '4', 'B' => '8', 'E' => '3', 'G' => '6', 'L' => '1', 'O' => '0', 'S' => '5', 'T' => '7',
            'a' => '4', 'b' => '8', 'e' => '3', 'g' => '6', 'l' => '1', 'o' => '0', 's' => '5', 't' => '7'
        ];
        
        $result1 = str_replace(array_keys($leetSpeak1), array_values($leetSpeak1), $str1);
        
        echo "<div class='resultat-simple'>";
        echo "<strong>Texte normal :</strong><br>" . htmlspecialchars($str1) . "<br><br>";
        echo "<strong>Texte modifié :</strong><br>" . htmlspecialchars($result1);
        echo "</div>";
        ?>
    </div>
    
    <div class="separateur"></div>
    
    <!-- version interactive -->
    <div class="section-interactive">
        <div class="titre-section-interactive">Version Interactive</div>
        <?php
        function leetSpeak($text, $leetMap) {
            return str_replace(array_keys($leetMap), array_values($leetMap), $text);
        }
        
        $str2 = "Hello LaPlateforme !";
        $leetSpeak2 = [
            'A' => '4', 'B' => '8', 'E' => '3', 'G' => '6', 'L' => '1', 'O' => '0', 'S' => '5', 'T' => '7',
            'a' => '4', 'b' => '8', 'e' => '3', 'g' => '6', 'l' => '1', 'o' => '0', 's' => '5', 't' => '7'
        ];
        
        $isLeet = isset($_POST['toggle']) ? !empty($_POST['isLeet']) : false;
        $displayText = $isLeet ? leetSpeak($str2, $leetSpeak2) : $str2;
        $buttonText = $isLeet ? "Texte normal" : "Modifier";
        ?>
        
        <div class="text-display">
            <?php echo htmlspecialchars($displayText); ?>
        </div>
        
        <form method="post">
            <input type="hidden" name="isLeet" value="<?php echo $isLeet ? '0' : '1'; ?>">
            <button type="submit" name="toggle" class="btn">
                <?php echo $buttonText; ?>
            </button>
        </form>
    </div>
</body>
</html>