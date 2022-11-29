<?php

if (!defined('4578S9')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

//Criptografar a senha
//echo password_hash(4578S9, PASSWORD_DEFAULT);

if (isset($this->dados['form'])) {
    $valorForm = $this->dados['form'];
}
?>




<html>

<head>
<link rel="stylesheet" href="<?php echo URL . 'app/assets/css/stylesheet.css'; ?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
        <div class="form">
            <div class="logo">
                <img src="<?php echo URL . 'app/assets/images/logo-derma.svg'; ?>" height="50" width="60" alt="">
            </div>

            <form action="" id="formulario" class="form-signin" method="POST">
                <div class="form-style">
                    <div class="form-title">
                        <img src="<?php echo URL . 'app/assets/images/log-in.svg'; ?>" alt="">
                        <h1>Faça seu login</h1>
                    </div>
                    <p>Entre com suas informações de cadastro.</p>
                    <legend>E-mail</legend>
                    <div class="form-group">
                        <img src="<?php echo URL . 'app/assets/images/mail-focus.svg'; ?>" id="mail" alt="" srcset="">
                        <input type="email" name="usuario"  id="email" aria-label="email" placeholder="Digite seu e-mail" autofocus >
                    </div>
                    <legend>Senha</legend>
                    <div class="form-group">
                        <img src="<?php echo URL . 'app/assets/images/lock.svg'; ?>" id="lock" alt="" srcset="">
                        <input type="password"  name="senha" id="password" aria-label="password" placeholder="Digite sua senha">
                        <img src="<?php echo URL . 'app/assets/images/eye.svg'; ?>" id="eye" alt="" srcset="">
                    </div>
                    <div class="rem-forgot">
                        <div class="rem">
                            <input type="checkbox" name="" id="remember">
                            <label for="remember">Lembre-me</label>
                        </div>
                        <a href="#">Esqueci minha senha</a>
                    </div>
                
                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LeLQ_ciAAAAAEhJBnV7BRgz3l5XwwNRWuUCHr5n"></div>
                
                    
                    <input style="opacity: 85%;" name="SendLogin" id="submitBtn" class="btn" type="submit" value="Entrar">
                    


                   
                    <div class="subscribe">
                        <p>Não tem uma conta?</p>
                        <strong><a href="<?php echo URL . "cadastrar/index"; ?>">Registre-se</a></strong>
                    </div>
                </div>
            </form>
        </div>
        <div class="background-login"></div>
    </body>

<!-- 
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    
                    <?php
                    if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                        <div class="notification is-danger">
                            <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <h3 class="title has-text" style="color: black;">Login</h3>
                        <form action="" class="form-signin" method="POST">
                            <div class="field">
                                <div class="control">
                                    <label>Usuário</label>
                                    <input name="usuario" class="input is-large" type="text" placeholder="Digite o usuário" value="<?php if (isset($valorForm['usuario'])) {
                                                                                                                                    } ?>"><br><br>
                                </div>
                            </div>

                            <div class="field">
                                <div class="form-group">

                                    <div class="control">
                                        <label>Senha</label>

                                        <input name="senha" id="txtSenha" class="input is-large" type="password" placeholder="Digite a senha">
                                        <p>Esqueceu a senha?</p>
                                        <span id="spnMostrarSenha" class="glyphicon glyphicon glyphicon-eye-open form-control-feedback"> </span>


                                    </div>

                                </div> 
                        
                                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LeLQ_ciAAAAAEhJBnV7BRgz3l5XwwNRWuUCHr5n"></div>

                            </div>


                            <input name="SendLogin" id="submitBtn" class="button is-block is-link is-large is-fullwidth" type="submit" value="Acessar"><br>
                        </form>
                        <a class="button is-block is-success is-large is-fullwidth" href="<?php echo URL . "cadastrar/index"; ?>">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body> -->

</html>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LcIVeoiAAAAAPrRT4fyEBxgquzV84-htLD5bpXp"></script>
<script>


        document.getElementById("submitBtn").disabled = true;

        function recaptchaCallback() {

           // console.log(document.getElementsByName('g-recaptcha-response'));
            document.getElementById("submitBtn").disabled = false;
        }

        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
<script>
    var $spnMostrarSenha = $('#spnMostrarSenha');
    var $txtSenha = $('#txtSenha');

    $spnMostrarSenha
        .on('mousedown mouseup', function() {
            var inputType = $txtSenha.attr('type') == 'password' ? 'text' : 'password';
            $txtSenha.attr('type', inputType);
        })
        .on('mouseout', function() {
            $txtSenha.attr('type', 'password');
        });
</script>