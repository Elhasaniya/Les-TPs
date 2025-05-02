const QUESTIONS = [
    {
        question: "Quelle est la capitale du maroc ?",
        options: ["Casablanca", "Marrakech", "Rabat", "Tanger"],
        answer: "Rabat"
    },
    {
        question: "Combien font 5 + 3 ?",
        options: ["6", "7", "8", "9"],
        answer: "8"
    },
    {
        question: "Quelle est la couleur du ciel par temps clair ?",
        options: ["Rouge", "Gris", "Bleu", "Vert"],
        answer: "Bleu"
    },
    {
        question: "Combien de continents y a-t-il ?",
        options: ["5", "7", "9", "4"],
        answer: "7"
    },
    {
        question:"Quel est le quotient de 15/3?",
        options:["4","5","6","3"],
        answer:"5"
    }
];

let currentQuestion = 0;
let bonnesReponses = 0;
let timer;
let timeLeft = 5;

function lancerQuiz() {
    currentQuestion = 0;
    bonnesReponses = 0;
    document.getElementById("score").textContent = "";
    afficherQuestion();
}

function afficherQuestion() {
    if (currentQuestion >= QUESTIONS.length) {
        document.getElementById("question-box").innerHTML = " Quiz termine !";
        document.getElementById("options-box").innerHTML = "";
        document.getElementById("timer").style.display = "none";
        document.getElementById("score").textContent = `Score : ${bonnesReponses} / ${QUESTIONS.length}`;
        return;
    }

    const q = QUESTIONS[currentQuestion];
    document.getElementById("question-box").textContent = q.question;
    const optionsBox = document.getElementById("options-box");
    optionsBox.innerHTML = "";

    q.options.forEach(option => {
        const btn = document.createElement("button");
        btn.textContent = option;
        btn.className = "option";
        btn.onclick = () => verifierReponse(option);
        optionsBox.appendChild(btn);
    });

    timeLeft = 10;
    document.getElementById("time").textContent = timeLeft;
    document.getElementById("timer").style.display = "block";

    if (timer) clearInterval(timer);
    timer = setInterval(() => {
        timeLeft--;
        document.getElementById("time").textContent = timeLeft;
        if (timeLeft <= 0) {
            clearInterval(timer);
            verifierReponse(null); // Temps écoulé = mauvaise réponse
        }
    }, 1000);
}

function verifierReponse(reponseUtilisateur) {
    clearInterval(timer);
    const reponseCorrecte = QUESTIONS[currentQuestion].answer;
    if (reponseUtilisateur === reponseCorrecte) {
        bonnesReponses++;
    }
    currentQuestion++;
    afficherQuestion();
}
