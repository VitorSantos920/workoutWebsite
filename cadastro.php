<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Cadastro</title>
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/cadastro.css">
</head>

<body>
    <?php
    include_once "./cabecalho.php"
    ?>
    <main>
        <section class="banner">
            <img src="./assets/img/login.png" alt="Mulher em uma academia segurando cordas nos ombros.">
        </section>

        <section class="form-content">
            <header>
                <h1>Cadastrar</h1>
                <p>Cadastre suas credenciais para utilizar a plataforma.</p>
            </header>

            <form>
                <fieldset>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="John Del" required>
                </fieldset>

                <fieldset>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="exemplo@email.com.br" required autocomplete="on">
                </fieldset>

                <fieldset>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="(99) 99999-9999">
                </fieldset>

                <div class="password-content">
                    <fieldset>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="***********" required oninput="verificaSenha(this.value)">
                        <div class="requisitos">
                            <p id="has-seven">* 7 caracteres</p>
                            <p id="has-number">* 1 número</p>
                            <p id="has-special">* 1 caracter especial (Ex: &, %, $)</p>
                            <p id="has-capital-letter">* 1 letra maiúscula</p>
                        </div>
                    </fieldset>

                    <fieldset>
                        <label for="confirmar-senha">Confirmar senha</label>

                        <div class="password-confirmation-container">
                            <input type="password" name="confirmar-senha" id="confirmar-senha" placeholder="***********" required oninput="verificaCorrespondencia()">
                            <i class="fa-regular fa-circle-check"></i>
                            <i class="fa-regular fa-circle-xmark"></i>
                        </div>
                    </fieldset>
                </div>

                <button type="button" onclick="cadastrarUsuario()">Cadastrar</button>
                <p>Já possui uma conta? <a href="./login.php">Faça Login</a></p>
            </form>
            <div class="footer">
                <a href="#">Cookies & Privacidade</a>
                <a href="#">Politicas Legais</a>
                <a href="#">Workout@2024</a>
            </div>
        </section>

    </main>

    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/sweetalert2@11.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
    <script src="https://kit.fontawesome.com/4ac8bcd2f5.js" crossorigin="anonymous"></script>
    <script src="./assets/js/cadastro.js"></script>

</body>

</html>