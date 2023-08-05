<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resultado</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Resultado</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pChoice = $_POST["pChoice"];
        $choices = array("pedra", "papel", "tesoura");
        $computerChoice = $choices[array_rand($choices)];

        echo "<p>Você escolheu: $pChoice</p>";
        echo "<p>O computador escolheu: $computerChoice</p>";

        if ($pChoice == $computerChoice) {
            echo "<p>Empate!</p>";
        } elseif (
            ($pChoice == "pedra" && $computerChoice == "tesoura") ||
            ($pChoice == "papel" && $computerChoice == "pedra") ||
            ($pChoice == "tesoura" && $computerChoice == "papel") 
        ) {
            echo "<p>Você venceu!</p>";
        } else {
            echo "<p>Você perdeu!</p>";
        }
    }
    ?>
    
    <a href="index.html">Restart</a>
</body>
</html>