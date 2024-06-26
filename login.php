<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Login</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css?time=<?= time() ?>">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
</head>

<body>
    <?php
    include_once "./cabecalho.php";

    ?>
    <main>
        <section class="banner">
            <img src="./assets/img/login.png" alt="">
        </section>

        <section class="form-content">
            <header>
                <h1>Entrar</h1>
                <p>Entre com suas credenciais inseridas na hora do registro.</P>
            </header>
            <form>
                <fieldset>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="example@mail.com" required />
                </fieldset>
                <fieldset>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" placeholder="***********" required />
                </fieldset>
                <button type="button" onclick="realizarLogin()">Entrar em minha conta</button>
                <div class="formata-esquerda">
                    <a href="#">Esqueceu sua senha?</a>
                </div>
            </form>
            <div class="formata-span-meio">
                <span>Ainda não possui uma conta?</span>
            </div>
            <a href="cadastro.php" class="button-criarConta">Criar uma conta</a>
            <footer class="footer">
                <a href="#">Cookies & Privacidade</a>
                <a href="#">Politicas Legais</a>
                <a href="#">Workout@2024</a>
            </footer>
        </section>
    </main>

    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/sweetalert2@11.js"></script>
    <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>

    <script src="./assets/js/login.js"></script>
</body>

</html>