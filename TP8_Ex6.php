<?php
// Tableau des bonnes réponses
$bonnesReponses = array(
  "q1" => "a",
  "q2" => "b",
  "q3" => "b"
);

$score = 0;
$total = count($bonnesReponses);

echo "<h2>Résultat du Quiz:</h2>";

foreach ($bonnesReponses as $question => $bonneReponse) {
  if (isset($_POST[$question])) {
    $reponseUtilisateur = $_POST[$question];
    if ($reponseUtilisateur == $bonneReponse) {
      echo "<p><strong>Question " . substr($question, 1) . " :</strong> ✔️ Bonne réponse</p>";
      $score++;
    } else {
      echo "<p><strong>Question " . substr($question, 1) . " :</strong> ❌ Mauvaise réponse (Votre choix : $reponseUtilisateur | Bonne réponse : $bonneReponse)</p>";
    }
  } else {
    echo "<p><strong>Question " . substr($question, 1) . " :</strong> ❌ Aucune réponse sélectionnée</p>";
  }
}

echo "<h3>Score final : $score / $total</h3>";
echo '<a href="TP8_ex6 (2).html">Refaire le quiz</a>';
?>
