<?php
include("variaveis.php");
if (isset($_SESSION['usuarioLogado'])) {
    header('location:Home.php');
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/bootstrap.css">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/all.css">

    <!-- Personalizado CSS -->
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/login.css">
    <link rel="stylesheet" href="<?php echo URLASSETS ?>css/alerta.css">
    <link rel="shortcut icon" type="imagex/png" href="./images/icon.ico">

    <title>Cadastro Cliente</title>
</head>

<body>
    <?php
    include("Visao/include/MensagemDeAlerta.php");
    ?>
    <section class="container-fluid">
        <div id="LoginCadastro_container" class="row justify-content-center align-itens-center">
            <div class="col-md-6 col-lg-4 col-xl-4 pt-5">
                <div class="card border-0 border-r-none">
                    <div id="logo_LoginCadastro" class="card-header text-center border-0 border-r-none bg-primary">
                        <h1 class="text-light mt-3">
                            CENTRAL TURISMO
                        </h1>
                        <div id="botao_LoginCadastro">
                            <button onclick="window.location.href='Cadastro.php'" class="btn btn-info btn-sm">CADASTRE-SE</button>
                        </div>
                    </div>
                    <div class="card-body border border-light shadow">
                        <form action="Controle/ControleLogin.php" method="post">
                            <div class="input-group flex-nowrap my-3 border-r-none">
                                <div class="input-group-prepend border-r-none">
                                    <span class="input-group-text border-r-none" id="inputemail">
                                        <i class="fas fa-at"></i>
                                    </span>
                                </div>
                                <input name="email" type="text" class="form-control border-r-none" placeholder="Email" aria-label="email" aria-describedby="inputEmail" maxlength="99" min="4" required autofocus>
                            </div>
                            <div class="input-group flex-nowrap mb-3 border-r-none">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-r-none" id="inputSenha">
                                        <i class="fas fa-fingerprint"></i>
                                    </span>
                                </div>
                                <input name="senha" type="password" class="form-control border-r-none" placeholder="Senha" aria-label="Senha" aria-describedby="inputSenha" maxlength="99" min="4" required>
                            </div>
                            <button type="submit" class="btn btn-info btn-block border-r-none">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo URLASSETS ?>js/jquery.min.js">
    </script>
    <script src="<?php echo URLASSETS ?>js/bootstrap.bundle.min.js">
    </script>


    <?php
    // Quando uma sessão msg for criar e uma sessão alert for definida, então, o javascript será inserido na página para exibir a mensagem.
    if (isset($_SESSION['alert'])) {
        ?>
        <script>
            var mensagemCard = document.getElementById('mensagemCard');

            // chando a função ao carregar pagina
            window.setTimeout(function() {
                fadeIn(mensagemCard, 0.5);
                fecharMensagem();
            }, 0);

            function fecharMensagem() {
                window.setTimeout(function() {
                    fadeOut(mensagemCard, 1);
                }, 5000)
            }


            function fecharAgora() {
                fadeOut(mensagemCard, 0.5)
            }


            // fadeIn
            function fadeIn(element, time) {
                processa(element, time, 0, 100);
            }

            // fadeOut
            function fadeOut(element, time) {
                processa(element, time, 100, 0);
            }

            // realizar efeito
            function processa(element, time, initial, end) {
                var increment;
                var intervalo;
                var opc;

                if (initial == 0) {
                    increment = 2;
                    element.classList.remove('d-none');
                } else {
                    increment = -3;
                }

                opc = initial;

                intervalo = setInterval(function() {
                    if ((opc == end)) {
                        if (end == 0) {
                            element.classList.add('d-none');
                        }
                        clearInterval(intervalo);
                    } else {
                        if (end == 0) {
                            opc += increment;
                            if (element.style.opacity >= 0) {
                                element.style.opacity = opc / 100;
                            } else {
                                element.classList.add('d-none');
                            }
                            element.style.filter = "alpha(opacity=" + opc + ")";
                            element.style.right = -0.1 + "px";
                        } else {
                            opc += increment;
                            element.style.opacity = opc / 100;
                            element.style.filter = "alpha(opacity=" + opc + ")";
                            element.style.right = (opc - 40) + "px";
                        }
                    }
                }, time * 10);
            }
        </script>

        <?php
        unset($_SESSION['alert']);
    }
    ?>

</body>

</html>