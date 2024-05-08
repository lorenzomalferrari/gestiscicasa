function checkLogin() {
    //recupero i campi del form
    var email = document.getElementById("email").value; //può essere anche username
    var password = document.getElementById("password").value;

    //convalido il contenuto dei campi del form

    //Se tutti i controlli passano, eseguo il submit del modulo
    //passo al controller del login -> loginController.php
    document.getElementById("login_form").submit();
}
