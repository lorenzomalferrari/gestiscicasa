<form id="welcome_form" action="<?php ROOT . "app/controller/welcomeController.php" ?>" method="post">
    <input type="hidden" name="<?php echo CONFIG['session']['keys']['IDUSER'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['IDUSER']]; ?>">
    <input type="hidden" name="<?php echo CONFIG['session']['keys']['USERNAME'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['USERNAME']]; ?>">
    <input type="hidden" name="<?php echo CONFIG['session']['keys']['PASSWORD'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['PASSWORD']]; ?>">
    <input type="hidden" name="<?php echo CONFIG['session']['keys']['EMAIL'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['EMAIL']]; ?>">
    <input type="hidden" name="<?php echo CONFIG['session']['keys']['TOKEN'] ?>" value="<?php echo $_SESSION[CONFIG['session']['keys']['TOKEN']]; ?>">

    <div class="form-group">
        <div class="input-label">
            <label>Nome</label>
        </div>
        <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" required
            oninput="validateTextInput('nome', 'nome-feedback')"
            onblur="validateTextInput('nome', 'nome-feedback')">
        <div id="nome-feedback" class="feedback"></div> <!-- Feedback per Nome -->
    </div>

    <div class="form-group">
        <div class="input-label">
            <label>Cognome</label>
        </div>
        <input type="text" class="form-control" placeholder="Cognome" name="cognome" id="cognome" required
            oninput="validateTextInput('cognome', 'cognome-feedback')"
            onblur="validateTextInput('cognome', 'cognome-feedback')">
        <div id="cognome-feedback" class="feedback"></div> <!-- Feedback per Cognome -->
    </div>

    <div class="form-group">
        <div class="input-label">
            <label>Sesso</label>
        </div>
        <select class="form-control" name="sesso" id="sesso" required
            onchange="validateSesso()">
            <?php echo $sesso_options; ?>
        </select>
        <div id="sesso-feedback" class="feedback"></div> <!-- Feedback per Sesso -->
    </div>

    <div class="form-group">
        <div class="input-label">
            <label>Data di Nascita</label>
        </div>
        <input type="date" class="form-control" name="data_nascita" id="data_nascita" required
            onchange="validateDate()">
        <div id="data_nascita-feedback" class="feedback"></div> <!-- Feedback per Data di Nascita -->
    </div>

    <div class="form-group">
        <button type="button" class="submit-btn" onclick="checkWelcome()">REGISTRA</button>
    </div>
</form>
