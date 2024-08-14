// Funzione per validare lo username
function validateUsername() {
    const usernameField = document.getElementById('username');
    const usernameError = document.getElementById('username-error');
    const username = usernameField.value.trim();
    usernameError.textContent = ''; // Reset error message
    usernameError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare lo username (5-20 caratteri, solo lettere e numeri)
    const usernameRegex = /^[A-Za-z\d]{5,20}$/;

    if (username.length < 5 || username.length > 20) {
        usernameError.textContent = 'Lo username deve essere lungo tra 5 e 20 caratteri.';
        usernameError.style.display = 'block'; // Mostra l'errore
        return false;
    }
    if (!usernameRegex.test(username)) {
        usernameError.textContent = 'Lo username può contenere solo lettere e numeri. Non sono ammessi caratteri speciali.';
        usernameError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    return true;
}

// Funzione per validare l'email
function validateEmail() {
    const emailField = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const email = emailField.value.trim();
    emailError.textContent = ''; // Reset error message
    emailError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare il formato dell'email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailError.textContent = 'L\'email inserita non è valida. Assicurati di aver utilizzato il formato corretto (ad esempio, nome@dominio.com).';
        emailError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    return true;
}

// Funzione per validare la password
function validatePassword() {
    const passwordField = document.getElementById('password');
    const passwordError = document.getElementById('password-error');
    const password = passwordField.value.trim();
    passwordError.textContent = ''; // Reset error message
    passwordError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare la password (min 8 caratteri, almeno una maiuscola, una minuscola, un numero, un carattere speciale ammesso)
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!#$%&*+\-./=?@^_~])[A-Za-z\d!#$%&*+\-./=?@^_~]{8,}$/;

    if (password.length < 8) {
        passwordError.textContent = 'La password deve contenere almeno 8 caratteri.';
        passwordError.style.display = 'block'; // Mostra l'errore
        return false;
    }
    if (!/(?=.*[A-Z])/.test(password)) {
        passwordError.textContent = 'La password deve contenere almeno una lettera maiuscola.';
        passwordError.style.display = 'block'; // Mostra l'errore
        return false;
    }
    if (!/(?=.*[a-z])/.test(password)) {
        passwordError.textContent = 'La password deve contenere almeno una lettera minuscola.';
        passwordError.style.display = 'block'; // Mostra l'errore
        return false;
    }
    if (!/(?=.*\d)/.test(password)) {
        passwordError.textContent = 'La password deve contenere almeno un numero.';
        passwordError.style.display = 'block'; // Mostra l'errore
        return false;
    }
    if (!/(?=.*[!#$%&*+\-./=?@^_~])/.test(password)) {
        passwordError.textContent = 'La password deve contenere almeno un carattere speciale tra quelli ammessi (!, #, $, %, &, *, +, -, ., /, =, ?, @, ^, _, ~).';
        passwordError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    return true;
}

// Funzione per controllare il form di registrazione
function checkRegistration() {
    const isUsernameValid = validateUsername();
    const isEmailValid = validateEmail();
    const isPasswordValid = validatePassword();
    const privacyTermsChecked = document.getElementById('privacy_terms').checked;
    const privacyError = document.getElementById('privacy-error');

    privacyError.textContent = ''; // Reset error message
    privacyError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    if (!privacyTermsChecked) {
        privacyError.textContent = 'Devi accettare la Privacy Policy e i Termini per registrarti.';
        privacyError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    if (isUsernameValid && isEmailValid && isPasswordValid && privacyTermsChecked) {
        document.getElementById('registration_form').submit(); // Submit the form if all are valid
    }
}

// Funzione per validare lo username/email durante il login
function validateLoginUsernameOrEmail() {
    const emailField = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const email = emailField.value.trim();
    emailError.textContent = ''; // Reset error message
    emailError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare il formato dell'email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // Regex per validare lo username (5-20 caratteri, solo lettere e numeri)
    const usernameRegex = /^[A-Za-z\d]{5,20}$/;

    if (email.includes('@')) {
        // Validazione del formato email
        if (!emailRegex.test(email)) {
            emailError.textContent = 'Email non valida. Assicurati di aver utilizzato il formato corretto (es. nome@dominio.com).';
            emailError.style.display = 'block'; // Mostra l'errore
            return false;
        }
    } else {
        // Validazione del formato username
        if (!usernameRegex.test(email)) {
            emailError.textContent = 'Username non valido. Deve essere lungo tra 5 e 20 caratteri e può contenere solo lettere e numeri.';
            emailError.style.display = 'block'; // Mostra l'errore
            return false;
        }
    }

    return true;
}

// Funzione per controllare il form di login
function checkLogin() {
    const isLoginUsernameValid = validateLoginUsernameOrEmail();
    const isLoginPasswordValid = validatePassword();

    if (isLoginUsernameValid && isLoginPasswordValid) {
        document.getElementById('login_form').submit(); // Submit the form if both are valid
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
