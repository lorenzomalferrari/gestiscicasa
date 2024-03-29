document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var message = document.getElementById("message");

    // Esempio di validazione lato client (sostituire con validazione più robusta)
    if (username.trim() === "" || password.trim() === "") {
        message.textContent = "Inserire username e password.";
        return;
    }

    // Invia la richiesta di login tramite AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                message.textContent = xhr.responseText;
            } else {
                message.textContent = "Errore durante il login.";
            }
        }
    };
    xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
});

document.getElementById("registerForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var message = document.getElementById("message");

    // Verifica se la password e la conferma della password coincidono
    if (password !== confirmPassword) {
        message.textContent = "Le password non corrispondono.";
        return;
    }

    // Invia la richiesta di registrazione tramite AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "register.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                message.textContent = xhr.responseText;
            } else {
                message.textContent = "Errore durante la registrazione.";
            }
        }
    };
    xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password) + "&confirmPassword=" + encodeURIComponent(confirmPassword));
});

document.getElementById("logoutBtn").addEventListener("click", function() {
    // Effettua il logout distruggendo la sessione (esempio di logout)
    window.location.href = "logout.php";
});

function buildMenu() {
    // Ottieni il riferimento all'elemento del menu
    var menu = document.getElementById("menu");

    // Crea un array di oggetti che rappresentano gli elementi del menu
    var menuItems = [
        { label: "Home", url: "home.html" },
        { label: "Profilo", url: "profile.html" },
        { label: "Impostazioni", url: "settings.html" }
        // Puoi aggiungere altri elementi del menu qui
    ];

    // Crea una lista non ordinata per gli elementi del menu
    var ul = document.createElement("ul");

    // Itera attraverso gli elementi dell'array e crea gli elementi <li> e <a> per ciascun elemento del menu
    menuItems.forEach(function(item) {
        var li = document.createElement("li");
        var a = document.createElement("a");
        a.href = item.url;
        a.textContent = item.label;
        li.appendChild(a);
        ul.appendChild(li);
    });

    // Aggiungi la lista non ordinata al menu
    menu.appendChild(ul);
}

// Chiamata alla funzione per generare il menu quando la pagina è completamente caricata
window.onload = function() {
    buildMenu();
};

