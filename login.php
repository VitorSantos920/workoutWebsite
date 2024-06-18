<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css?time=<?=time()?>">
</head>
    <body>
        <main>
            <section class="banner">
                <img src="./assets/img/login.png" alt="">
            </section>

            <section class="form-content"> 
                <header>
                    <h1>Entrar</h1>
                    <p>Entre com suas credenciais inseridas na hora do registro.</P>
                </header>
                <form action="#" method="post">
                    <fieldset>
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" placeholder="example@mail.com" required/>
                    </fieldset>
                    <fieldset>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="***********" required/>
                    </fieldset>  
                    <button type="submit">Entrar em minha conta</button>
                    <div class="formata-esquerda">
                        <a>Esqueceu sua senha?</a>
                    </div>   
                </form>
                <div class="formata-span-meio">
                    <span>Ainda não possui uma conta?</span>
                </div>
                <button type="submit" class="button-criarConta">Criar uma conta</button>
                <div class="footer">
                    <span>Cookies & Privacidade</span>
                    <span>Politicas Legais</span>
                    <span>Workout@2024</span>
                </div>
            </section>
        </main>
    </body>
</html>