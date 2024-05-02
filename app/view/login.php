<?php
    require_once("../controller/lib/_libs.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <!-- Font Icon -->
        <link rel="stylesheet" href="../../public/assets/fonts/material-icon/css/material-design-iconic-font.min.css?v=<?php echo $vers; ?>">
        <!-- Main css -->
        <link rel="stylesheet" href="../../public/assets/css/style.css?v=<?php echo $vers; ?>">
    </head>
    <body>
        <div class="main">
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="../../public/assets/img/draw2-2.png" alt="sing up image"></figure>
                            <a href="register.php" class="signup-image-link">Crea un account</a>
                        </div>
                        <div class="signin-form">
                            <h2 class="form-title">Login</h2>
                            <form method="POST" class="register-form" id="login-form" action="../controller/loginController.php">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Username o email" />
                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="pass" id="pass" placeholder="Password" />
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Ricordami</label>
                                </div>
                                <div class="form-group form-button">
                                    <input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
                                </div>
                            </form>
                            <div>
                                <span class="">Versione: <?php echo $config['site']['version']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- JS -->
        <script src="../../public/assets/js/script.js?v=<?php echo $vers; ?>"></script>
        <script src="../../public/assets/js/login.js?v=<?php echo $vers; ?>"></script>
        <script src="../../public/assets/js/jquery.min.js?v=<?php echo $vers; ?>"></script>
        <script src="../../public/assets/js/main.js?v=<?php echo $vers; ?>"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
