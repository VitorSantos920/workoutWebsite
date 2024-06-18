<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout | Cadastre-se!</title>
    <link rel="stylesheet" href="./assets/css/cadastro.css">
</head>

<body>
    <main>
        <section class="banner">
            <img src="./assets/img/login.png" alt="Mulher em uma academia segurando cordas nos ombros.">
        </section>

        <section class="form-content">
            <header>
                <h1>Cadastrar</h1>
                <p>Cadastre suas credenciais para utilizar a plataforma.</p>
            </header>

            <form action="#" method="post">
                <fieldset>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="John Del" required>
                </fieldset>

                <fieldset>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@mail.com" required>
                </fieldset>

                <fieldset>
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="(99) 99999-9999">
                </fieldset>

                <div class="password-content">
                    <fieldset>
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="***********" required>
                    </fieldset>

                    <fieldset>
                        <label for="confirmar-senha">Confirmar senha</label>
                        <input type="password" name="confirmar-senha" id="confirmar-senha" placeholder="***********" required>
                    </fieldset>
                </div>

                <button type="submit">Cadastrar</button>
                <p>Já possui uma conta? <a href="./login.php">Faça Login</a></p>
            </form>

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.1.1/build/vanilla-masker.min.js"></script>
    <script src="./assets/js/cadastro.js"></script>
</body>

</html>