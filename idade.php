<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Idade</title>
</head>
<body>
    <form method="post">
        Ano de nascimento: <input type="number" name="ano" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $anoNascimento = $_POST["ano"];
        $anoAtual = date("Y"); // ano atual

        $idade = $anoAtual - $anoNascimento;
        $diasVividos = $idade * 365;
        $idade2050 = 2050 - $anoNascimento;

        echo "<p>Idade: $idade anos</p>";
        echo "<p>Dias vividos (aproximado): $diasVividos dias</p>";
        echo "<p>Idade em 2050: $idade2050 anos</p>";
    }
    ?>
</body>
</html>