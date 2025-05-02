// Exercice 2
let nombreSecret = Math.floor(Math.random() * 10) + 1;
let tentative;
let essais = 0;

do {
    tentative = parseInt(prompt("Devinez un nombre entre 1 et 10 :"));
    essais++;

    if (tentative < nombreSecret) {
        alert("Le nombre est plus grand !");
    } else if (tentative > nombreSecret) {
        alert("Le nombre est plus petit !");
    } else {
        alert("Bravo ! Vous avez trouvé en " + essais + " tentative(s).");
    }
} while (tentative !== nombreSecret);
