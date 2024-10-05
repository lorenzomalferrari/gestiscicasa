// Funzione per validare lo username
async function validateUsername() {
    const usernameField = document.getElementById('username');
    const usernameError = document.getElementById('username-error');
    const username = usernameField.value.trim();
    usernameError.textContent = ''; // Reset error message
    usernameError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare lo username (5-20 caratteri, solo lettere e numeri)
    const usernameRegex = /^[A-Za-z\d]{5,20}$/;

    const isUse = await checkIsUse("username", username);
    console.log(isUse)

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

    if ( isUse ) {
        usernameError.textContent = 'Lo username è già usato.';
        usernameError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    return true;
}

// Funzione per validare l'email
async function validateEmail() {
    const emailField = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const email = emailField.value.trim();
    emailError.textContent = ''; // Reset error message
    emailError.style.display = 'none'; // Nascondi l'errore per impostazione predefinita

    // Regex per validare il formato dell'email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const isUse = await checkIsUse("email", email);

    if (!emailRegex.test(email)) {
        emailError.textContent = 'L\'email inserita non è valida. Assicurati di aver utilizzato il formato corretto (ad esempio, nome@dominio.com).';
        emailError.style.display = 'block'; // Mostra l'errore
        return false;
    }

    if (isUse) {
        usernameError.textContent = 'L\'email è già stata usata.';
        usernameError.style.display = 'block'; // Mostra l'errore
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

    if (isLoginUsernameValid && isLoginPasswordValid)
        document.getElementById('login_form').submit();
}

function goBack(path) {
    if (path)
        window.location.href = path;
    else
        window.history.back();
}

function action(action, id = null) {
    console.log("Azione: " + action);
    console.log("id: " + id);
    let url = window.location.origin + '/crm_gc/';
    console.log("pre-ulr: " + url);
    // Crea FormData dal form
    const formElement = document.getElementById('dynamicForm');
    const formData = new FormData(formElement);

    // Converti FormData in un oggetto JavaScript
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    console.log("data: ");
    console.log(data);

    // Costruzione dell'URL in base al valore di action
    if (action === 'insert') {
        url += 'app/controller/action/insert.php';
    } else if (action === 'update') {
        data['id'] = id;
        url += 'app/controller/action/update.php';
    } else if (action === 'delete') {
        data['id'] = id;
        url += 'app/controller/action/delete.php';
    } else {
        // Caso di default
        url += 'app/controller/action/default.php';
    }

    console.log("- Azione: " + action);
    console.log("- Url: " + url);
    console.log("- Data: ");
    console.log(data);

    // Usa fetch per inviare i dati via POST come JSON
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(result => {
            // Gestisci la risposta del file PHP
            console.log('Success:', result);

            // Azione specifica per ogni file PHP
            if (action === 'delete') {
                console.log(action);
                // Reindirizza alla pagina "lista.php"
                //window.location.href = window.location.origin + '/crm_gc/'+ result.path;
            } else if (action === 'insert') {
                // Ricarica la pagina attuale passando il nuovo id come parametro GET
                const get_params =
                    'id=' + result.id +
                    '&page=' + data['page'] +
                    '&path_key=' + data['path_key'] +
                    '&tableName=' + data['tableName'] +
                    '&parent=' + data['parent'] +
                    '&input_fields=' + data['input_fields'];

                //if (isValidUrlWithParams(get_params)){
                let path = window.location.pathname + '?' + get_params;
                window.location.href = path;
                //}
                //else{
                //    alert("Errore di formattazione: " + get_params);
                //}
            } else if (action === 'update')
                window.location.reload();
            else
                console.error('Azione non riconosciuta');
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function validateCheckbox(checkbox) {
    // Controlla se la checkbox è stata selezionata
    if (checkbox.checked)
        return { isValid: true, message: "" };
    else
        return { isValid: false, message: "Devi accettare la privacy policy e i termi d'uso per procedere" };
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

function checkTextInput(id, feedbackId) {
    const input = document.getElementById(id);
    const feedback = document.getElementById(feedbackId);
    const value = input.value.trim();
    const regex = /^[A-Za-z]+$/;
    if (value === '') {
        feedback.textContent = 'Questo campo è obbligatorio.';
        feedback.style.color = 'red';
        feedback.style.display = 'block';
    } else if (!regex.test(value)) {
        feedback.textContent = 'Il campo può contenere solo lettere.';
        feedback.style.color = 'red';
        feedback.style.display = 'block';
    } else {
        feedback.textContent = '';
        feedback.style.display = 'none';
    }
}

// Funzione per controllare la validità della data di nascita
function checkBirthDate() {
    const dateInput = document.getElementById('data_nascita');
    const feedback = document.getElementById('data_nascita-feedback');
    const value = dateInput.value;

    // Età minima
    const minAge = 18;

    if (!value) {
        feedback.textContent = 'Questo campo è obbligatorio.';
        feedback.style.color = 'red';
        feedback.style.display = 'block';
    } else {
        const today = new Date();
        const selectedDate = new Date(value);

        // Calcola la data limite per essere maggiorenne
        const minDate = new Date(today.getFullYear() - minAge, today.getMonth(), today.getDate());

        if (selectedDate > today) {
            feedback.textContent = 'La data di nascita non può essere nel futuro.';
            feedback.style.color = 'red';
            feedback.style.display = 'block';
        } else if (selectedDate > minDate) {
            feedback.textContent = `Devi avere almeno ${minAge} anni.`;
            feedback.style.color = 'red';
            feedback.style.display = 'block';
        } else {
            feedback.textContent = '';
            feedback.style.display = 'none';
        }
    }
}

// Funzione per controllare il campo Sesso
function checkGender() {
    const sessoInput = document.getElementById('sesso');
    const feedback = document.getElementById('sesso-feedback');
    const value = sessoInput.value;
    if (value === '' || value === 'Seleziona...') { // Assumi che 'Seleziona...' sia il valore predefinito
        feedback.textContent = 'Per favore, seleziona un sesso.';
        feedback.style.color = 'red';
        feedback.style.display = 'block'; // Mostra il feedback
    } else {
        feedback.textContent = '';
        feedback.style.display = 'none'; // Nascondi il feedback
    }
}

// Funzione di controllo del modulo
async function checkWelcome() {
    checkTextInput('nome', 'nome-feedback');
    checkTextInput('cognome', 'cognome-feedback');
    checkBirthDate();
    checkGender();

    const isUserConfirmed = await checkConfirmUser();

    // Aggiungi ulteriori controlli o invia il modulo se tutto è valido
    const nomeFeedback = document.getElementById('nome-feedback').textContent;
    const cognomeFeedback = document.getElementById('cognome-feedback').textContent;
    const dataNascitaFeedback = document.getElementById('data_nascita-feedback').textContent;
    const sessoFeedback = document.getElementById('sesso-feedback').textContent;

    console.log("nomeFeedback: " + nomeFeedback);
    console.log("cognomeFeedback: " + cognomeFeedback);
    console.log("dataNascitaFeedback: " + dataNascitaFeedback);
    console.log("sessoFeedback: " + sessoFeedback);
    console.log("isUserConfirmed: " + isUserConfirmed);

    if (nomeFeedback === '' && cognomeFeedback === '' && dataNascitaFeedback === '' && sessoFeedback === '' && isUserConfirmed){
        console.log("Proseguo");
        document.getElementById('welcome_form').submit();
    }
    else {
        console.log("I campi sono obbligatori.");
        alert('I campi sono obbligatori. O bisogna confermare il link nell\'email mandata');
    }
}

async function checkConfirmUser() {
    console.log("checkConfirmUser");
    const idUser = document.getElementById("IDUSER").value;
    console.log("idUser" + idUser);
    console.log(window.location.origin + '/crm_gc/app/controller/users/checkUserStatus.php');

    try {
        const response = await fetch(window.location.origin + '/crm_gc/app/controller/users/checkUserStatus.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'  // Imposta l'intestazione per JSON
            },
            body: JSON.stringify({ idUser : idUser })  // Invia i dati come JSON
        });

        console.log("Raw response:", response);
        const responseText = await response.text();
        console.log("Raw Response:", responseText); // Logga la risposta completa

        // Ora prova a fare il parsing JSON
        const result = JSON.parse(responseText);
        console.log("result");
        console.log(result);

        const feedbackElement = document.getElementById('user-status-feedback');

        if (result.status) {
            feedbackElement.style.display = 'none';  // Nascondi feedback se l'utente è attivo
            return true;
        } else {
            feedbackElement.textContent = result.message;
            feedbackElement.style.color = 'red';
            feedbackElement.style.display = 'block';  // Mostra feedback se l'utente non è attivo
            return false;
        }
    } catch (error) {
        console.error('Errore nella richiesta:', error);
        return false;
    }
}

async function checkIsUse(params, value) {
    console.log("checkIsUse");
    console.log("params: " + params);
    console.log("value: " + value);
    console.log(window.location.origin + '/crm_gc/app/controller/users/checkIsUse.php');

    try {
        const response = await fetch(window.location.origin + '/crm_gc//app/controller/users/checkIsUse.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'  // Imposta l'intestazione per JSON
            },
            body: JSON.stringify({ params : params, value : value })  // Invia i dati come JSON
        });

        console.log("Raw response:", response);
        const responseText = await response.text();
        console.log("Raw Response:", responseText); // Logga la risposta completa

        // Ora prova a fare il parsing JSON
        const result = JSON.parse(responseText);
        console.log("result");
        console.log(result);

        const feedbackElement = document.getElementById(params + '-status-feedback');

        if (result.status) {
            feedbackElement.style.display = 'none';  // Nascondi feedback se l'utente è attivo
            return true;
        } else {
            feedbackElement.textContent = result.message;
            feedbackElement.style.color = 'red';
            feedbackElement.style.display = 'block';  // Mostra feedback se l'utente non è attivo
            return false;
        }
    } catch (error) {
        console.error('Errore nella richiesta:', error);
        return false;
    }
}

function goToDetail(id) {
    document.detailForm.id.value = id !== null && id !== undefined ? id : '';
    document.detailForm.submit();
}
