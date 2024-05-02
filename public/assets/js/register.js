// Ottieni il riferimento al bottone
var btn_signin = document.getElementById("signin");

// Aggiungi un gestore di eventi per il click del bottone
btn_signin.addEventListener("click", function () {
    // Esegui i controlli necessari
    var condizione = false;
    var messaggioErrore = ""; // Inizializza un messaggio di errore vuoto

    var username = "valore_username"; // Ottenere il valore dell'username da qualche parte
    var email = "valore_email"; // Ottenere il valore dell'email da qualche parte
    var password1 = "valore_password1"; // Ottenere il valore della prima password da qualche parte
    var password2 = "valore_password2"; // Ottenere il valore della seconda password da qualche parte

    // Effettua i controlli
    if (!validaUsername(username)) {
        messaggioErrore += "Username non valido.\n";
    }

    if (!validaEmail(email)) {
        messaggioErrore += "Email non valida.\n";
    }

    if (!confrontaPassword(password1, password2)) {
        messaggioErrore += "Le password non corrispondono.\n";
    }

    if (!validaPassword(password1)) {
        messaggioErrore += "Password non è valida\n";
    }

    // Se ci sono errori, visualizza un messaggio di errore
    if (messaggioErrore !== "") {
        alert("Si sono verificati i seguenti errori:\n\n" + messaggioErrore);
    } else {
        // Tutti i controlli hanno successo, reindirizza l'utente a un'altra pagina
        window.location.href = "altra_pagina.html";
    }
});
