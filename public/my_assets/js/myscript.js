function checkLogin() {
    //recupero i campi del form
    var email_username = document.getElementById("email").value;//può essere anche username
    var password = document.getElementById("password").value;

    if (checkForAtSymbol(email_username) ){ //se ha @ controllo in relazione al campo email e se è valida
        login_result = validateEmail(email_username);
        login_isValid = login_result.isValid;
        login_message = login_result.message;
    }else{//senno è username
        login_result = validateUsername(email_username);
        login_isValid = login_result.isValid;
        login_message = login_result.message;
    }

    password_result = validatePassword(password);
    password_isValid = password_result.isValid;
    password_message = password_result.message;

    console.log(login_result);
    console.log(password_result);
    console.log(login_isValid && password_isValid);

    errorLogin = login_message + " - " + password_message;
    //Se tutti i controlli passano, eseguo il submit del modulo
    if ( !(login_isValid && password_isValid) ){
        alert( errorLogin );
    }else{
        //passo al controller del login -> loginController.php
        //alert("Credenziali valide!");
        document.getElementById("login_form").submit();
    }
}

function validateEmail(email_string) {
    // Espressione regolare per la convalida dell'email
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Controlla se l'email soddisfa il modello
    if (emailPattern.test(email_string)) {
        return { isValid: true, message: "" }; // L'email è valida, nessun errore
    } else {
        return { isValid: false, message: "Email non valida" }; // L'email non è valida, restituisci un messaggio di errore
    }
}

function validatePassword(password_str) {
    // Parametri standard per la password
    var minLength = 8;
    var hasUppercase = /[A-Z]/.test(password_str);
    var hasLowercase = /[a-z]/.test(password_str);
    var hasSpecialChars = /[!@#$%^&*(),.?":{}|<>]/.test(password_str);
    var hasNumbers = /\d/.test(password_str); // Controlla la presenza di numeri
    var hasNonAllowedChars = /[^A-Za-z0-9!@#$%^&*(),.?":{}|<>]/.test(password_str);

    // Controlla la lunghezza
    if (password_str.length < minLength) {
        return { isValid: false, message: "La password deve contenere almeno " + minLength + " caratteri" };
    }

    // Controlla la presenza di maiuscole
    if (!hasUppercase) {
        return { isValid: false, message: "La password deve contenere almeno una lettera maiuscola" };
    }

    // Controlla la presenza di minuscole
    if (!hasLowercase) {
        return { isValid: false, message: "La password deve contenere almeno una lettera minuscola" };
    }

    // Controlla la presenza di numeri
    if (!hasNumbers) {
        return { isValid: false, message: "La password deve contenere almeno un numero" };
    }

    // Controlla la presenza di caratteri speciali
    if (!hasSpecialChars) {
        return { isValid: false, message: "La password deve contenere almeno un carattere speciale" };
    }

    // Controlla la presenza di caratteri non ammessi
    if (hasNonAllowedChars) {
        return { isValid: false, message: "La password contiene caratteri non ammessi" };
    }

    // Se tutti i controlli passano, la password è valida
    return { isValid: true, message: "" };
}

function checkForAtSymbol(inputString) {
    // Controlla se la stringa contiene il carattere '@'
    if (inputString.includes('@')) {
        return true;
    } else {
        return false;
    }
}

function validateUsername(username_str) {

    const emailError = document.getElementById("email-error");

    // Lunghezza minima e massima consentita per lo username
    const minLength = 3;
    const maxLength = 20;

    var flag = false;
    var text = "";
    var display = "";
    emailError.textContent = "";
    emailError.style.display = "none";

    // Espressione regolare per la verifica dell'username (solo lettere e numeri)
    const usernamePattern = /^[a-zA-Z0-9]+$/;

    if (username_str.trim() === "") {
        emailError.textContent = "Inserire username o email, campo obbligatorio.";
        emailError.style.display = "block";
        return false;
    } else if (!soloLettere(username_str) && !username_str()) {
        emailError.textContent = "Inserisci un'email valida o uno username valido.";
        emailError.style.display = "block";
        return false;
    } else if (username_str.length < minLength || username_str.length > maxLength) {
        return { isValid: false, message: "Lo username deve avere una lunghezza compresa tra " + minLength + " e " + maxLength + " caratteri" };
    }
    else {
        emailError.textContent = "";
        emailError.style.display = "none";
        return true;
    }


    emailError.textContent = text;
    emailError.style.display = display;
    return flag;








    // Controlla la lunghezza
    if (username_str.length < minLength || username_str.length > maxLength) {
        return { isValid: false, message: "Lo username deve avere una lunghezza compresa tra " + minLength + " e " + maxLength + " caratteri" };
    }

    // Controlla se lo username contiene solo caratteri alfanumerici
    if (!usernamePattern.test(username_str)) {
        return { isValid: false, message: "Lo username può contenere solo lettere e numeri" };
    }

    // Se tutti i controlli passano, lo username è valido
    return { isValid: true, message: "" };
}

function checkRegistration() {
    //recupero i campi del form
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var privacy_terms = document.getElementById("privacy_terms");

    console.log(username);
    console.log(email);
    console.log(password);
    console.log(privacy_terms);

    var errorRegistration = "";
    //convalido il contenuto dei campi del form

    username_result = validateUsername(username);
    username_isValid = username_result.isValid;
    username_message = username_result.message;

    console.log(username_result);

    email_result = validateEmail(email);
    email_isValid = email_result.isValid;
    email_message = email_result.message;

    console.log(email_result);

    password_result = validatePassword(password);
    password_isValid = password_result.isValid;
    password_message = password_result.message;

    console.log(password_result);

    privacy_terms_result = validateCheckbox(privacy_terms);
    privacy_terms_isValid = privacy_terms_result.isValid;
    privacy_terms_message = privacy_terms_result.message;

    console.log(privacy_terms_result);

    errorRegistration =
        username_message + " - " +
        email_message + " - " +
        password_message + " - " +
        privacy_terms_message;

    //Se tutti i controlli passano, eseguo il submit del modulo
    if (!(username_isValid && email_isValid && password_isValid && privacy_terms_isValid)) {
        alert(errorRegistration);
    } else {
        //passo al controller del registration -> registerController.php
        //alert("Credenziali valide!");
        document.getElementById("registration_form").submit();
    }
}

function validateCheckbox(checkbox) {
    // Controlla se la checkbox è stata selezionata
    if (checkbox.checked) {
        return { isValid: true, message: "" }; // Checkbox selezionata
    } else {
        return { isValid: false, message: "Devi accettare la privacy policy e i termi d'uso per procedere" }; // Checkbox non selezionata
    }
}

/**
 * Verifica se una stringa contiene solo lettere dalla A alla Z (maiuscole e minuscole).
 *
 * @param {string} str - La stringa da verificare.
 * @return {boolean} True se la stringa contiene solo lettere dalla A alla Z, altrimenti false.
 */
function soloLettere(str) {
    // Usa una espressione regolare per verificare se la stringa contiene solo lettere
    const regex = /^[A-Za-z]+$/;
    return regex.test(str);
}

function soloNumeri(str) {
    // Usa una espressione regolare per verificare se la stringa contiene solo numeri
    const regex = /^[0-9]+$/;
    return regex.test(str);
}

/**
 *
 */
function checkWelcome() {
    // Ottieni i valori degli input e della select
    var nome = document.getElementById('nome').value.trim();
    var cognome = document.getElementById('cognome').value.trim();
    var sesso = document.getElementById('sesso').value;

    // Flag per il controllo
    var isValid = true;

    // Controlla se il campo Nome è compilato
    if ( nome === "" && !soloLettere(nome) ) {
        alert("Il campo Nome è obbligatorio.");
        isValid = false;
    }

    // Controlla se il campo Cognome è compilato
    if ( cognome === "" && !soloLettere(cognome) ) {
        alert("Il campo Cognome è obbligatorio.");
        isValid = false;
    }

    // Controlla se il campo Sesso ha un valore selezionato
    if ( sesso === "scegli" && !soloNumeri(sesso) ) {
        alert("Obbligatorio, selezionare un sesso.");
        isValid = false;
    }

    // Se tutti i controlli sono superati, invia il modulo
    if (isValid) {
        document.getElementById('welcome_form').submit();
    }
}
