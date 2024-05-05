function validaUsername(username) {
    // Espressione regolare per controllare se lo username contiene solo lettere, numeri, trattini bassi (_) o trattini (-)
    var regex = /^[a-zA-Z0-9_-]+$/;

    // Controlla se lo username è vuoto
    if (username.trim() === '') {
        return false; // Lo username è vuoto
    }

    // Controlla se lo username contiene solo caratteri validi
    if (!regex.test(username)) {
        return false; // Lo username contiene caratteri non validi
    }

    // Controlla la lunghezza dello username
    if (username.length < 5 || username.length > 15) {
        return false; // Lo username non ha una lunghezza valida
    }

    // Lo username è valido
    return true;
}

function validaPassword(password) {
    // Controlla se la password ha almeno 8 caratteri
    if (password.length < 8) {
        return false; // La password è troppo corta
    }

    // Controlla se la password contiene almeno una lettera minuscola
    if (!/[a-z]/.test(password)) {
        return false; // La password non contiene lettere minuscole
    }

    // Controlla se la password contiene almeno una lettera maiuscola
    if (!/[A-Z]/.test(password)) {
        return false; // La password non contiene lettere maiuscole
    }

    // Controlla se la password contiene almeno un numero
    if (!/[0-9]/.test(password)) {
        return false; // La password non contiene numeri
    }

    // La password è valida
    return true;
}

function confrontaPassword(password1, password2) {
    // Controlla se le due password sono uguali
    return password1 === password2;
}

function validaEmail(email) {
    // Espressione regolare per convalidare l'email
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Controlla se l'email è vuota
    if (email.trim() === '') {
        return false; // L'email è vuota
    }

    // Controlla se l'email corrisponde al formato desiderato utilizzando l'espressione regolare
    if (!regex.test(email)) {
        return false; // L'email non è nel formato corretto
    }

    // L'email è valida
    return true;
}

function controllaCheckbox(checkboxId) {
    // Ottieni il riferimento all'elemento checkbox utilizzando l'ID
    var checkbox = document.getElementById(checkboxId);

    // Controlla se la checkbox è stata spuntata
    if (checkbox.checked) {
        return true; // La checkbox è stata spuntata
    } else {
        return false; // La checkbox non è stata spuntata
    }
}
