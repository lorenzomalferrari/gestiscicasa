<?php
    echo "<pre>"; // Iniziamo il blocco di stampa formattata
    print_r($fields); // Stampa l'array in formato leggibile
    echo "</pre>"; // Chiudiamo il blocco di stampa formattata
?>
<h2>
    <?php echo htmlspecialchars($fields['head']['title']); ?>
</h2>

<div class="container-fluid">
    <?php //require_once(ROOT . "app/view/components/table/buttons/buttons_list.php.php"); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card basic-form">
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                                <div class="invalid-feedback">
                                    Please choose a name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Email or Username</label>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter your email address or username" name="email" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Name</label>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                                <div class="invalid-feedback">
                                    Please choose a name.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-label">
                                    <label>Email or Username</label>
                                </div>
                                <input type="email" class="form-control" placeholder="Enter your email address or username" name="email" required>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php //require_once(ROOT . "app/view/components/table/buttons/buttons_list.php.php"); ?>
</div>
</form>
