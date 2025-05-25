 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $operation = $_POST["operation"];
    $resultat = "";

    switch ($operation) {
        case "add":
            $resultat = $num1 + $num2;
            break;
        case "sub":
            $resultat = $num1 - $num2;
            break;
        case "mul":
            $resultat = $num1 * $num2;
            break;
        case "div":
            if ($num2 != 0) {
                $resultat = $num1 / $num2;
            } else {
                $resultat = "Erreur : Division par zéro !";
            }
            break;
        default:
            $resultat = "Opération invalide.";
    }

    echo "<div class='result'><strong>Résultat :</strong> $resultat</div>";
}
?>