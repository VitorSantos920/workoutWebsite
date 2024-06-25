<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Vitor Santos, Diógene Gabriel e Ingrid Norberto">
    <link rel="shortcut icon" href="./assets/img/favicon.svg" type="image/x-icon">
    <title>Workout | Academia</title>
    <link rel="stylesheet" href="./assets/css/index.css?time=<?= time() ?>">
</head>

<body>
    <?php
    include_once "./cabecalho.php";
    ?>


    <div class="landpage">
        <div class="section1">
            <div class="conteudo">
                <h1>Treine comigo</h1>
                <p>Uma enorme seleção de conteúdo de saúde e fitness, receitas saudáveis ​​e histórias de transformação para ajudar você a ficar em forma e permanecer em forma!</p>
                <a href="./cadastro.php"><button type="button">Inscreva-se já</button></a>
                <div class="bottom">
                    <p>Patrocinado por</p>
                    <div class="brands">
                        <img src="assets/img/nike.svg" />
                        <img src="assets/img/buzzfeed.svg" />
                        <img src="assets/img/esprit.svg" />
                        <img src="assets/img/natgeo.svg" />
                        <img src="assets/img/dwff.svg" />
                        <img src="assets/img/huffpost.svg" />
                    </div>
                </div>
            </div>
            <div class="img-hero">
                <img src="assets/img/hero.png" />
            </div>
        </div>
        <div class="section2">
            <h2>Não sabe por onde começar?</h2>
            <p>Os programas oferecem orientação diária em um calendário interativo para mantê-lo no caminho certo.</p>
            <div class="box-categorias">
                <div class="box shapeSecondary1">
                    <div>
                        <h4>Videos treino</h4>
                        <p>Acesso a centenas de vídeos de treino completos e gratuitos.
                        </p>
                    </div>
                    <a href="#" class="seta">
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
                <div class="box shapeSecondary2">
                    <div>
                        <h4>Programas de teino</h4>
                        <p>Programas de treino acessíveis e eficazes.
                        </p>
                    </div>
                    <a href="#" class="seta">
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
                <div class="box shapeSecondary3">
                    <div>
                        <h4>Planos alimentares</h4>
                        <p>Planos elaborados com nutricionistas e profissionais cadastrados.
                        </p>
                    </div>
                    <a href="#" class="seta">
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
                <div class="box shapeSecondary4">
                    <div>
                        <h4>Workout Plus</h4>
                        <p>Adicione o acesso completo dos recursos à sua assinatura.
                        </p>
                    </div>
                    <a href="#" class="seta">
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="box-imagem">
                <div class="conteudo">
                    <h2>Treine em casa de graça</h2>
                    <p>Acreditamos que o fitness deve ser acessível a todos, em qualquer lugar, independentemente do rendimento ou do acesso a um ginásio. Com centenas de treinos profissionais, receitas saudáveis ​​e artigos informativos, bem como uma das comunidades mais positivas da web, você terá tudo o que precisa para atingir seus objetivos pessoais de condicionamento físico – de graça!</p>
                    <a href="#">Veja mais
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
                <img src="assets/img/workouthome.png" alt="">
            </div>
            <div class="box-imagem">
                <img src="assets/img/training.png" alt="">
                <div class="conteudo">
                    <h2>Obtenha mais com programas de treinamento de baixo custo e recursos avançados.</h2>
                    <p>Acreditamos que o fitness deve ser acessível a todos, em qualquer lugar, independentemente do rendimento ou do acesso a um ginásio. Com centenas de treinos profissionais, receitas saudáveis ​​e artigos informativos, bem como uma das comunidades mais positivas da web, você terá tudo o que precisa para atingir seus objetivos pessoais de condicionamento físico – de graça!</p>
                    <a href="#">Veja mais
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="section5">
            <h2>Membros</h2>
            <div class="box-categorias">
                <div class="box shapeSecondary2">
                    <h3>Acesso gratuito</h3>
                    <p>Alcance seus objetivos de condicionamento físico ou mantenha seu estilo de vida saudável com treinamento profissional e apoio de uma comunidade online positiva e ativa.</p>
                    <ul>
                        <li>Cerca de 600 vídeos de treino completos</li>
                        <li>Calendário customizado</li>
                        <li>Receitas saúdaveis</li>
                        <li>Artigos sobre saúde e atividades físicas</li>
                        <li>Comunidade online para apoio</li>
                        <li>Suporte de profissionais certificados</li>
                        <li>Não necessita de cartão de crédito</li>
                    </ul>
                    <a href="#">Veja mais
                        <img src="assets/img/arrow-right.png" alt="">
                    </a>
                </div>
                <div class="box shapeSecondary3">
                    <h3>Workout Plus</h3>
                    <p>Workout Plus inclui tudo o que você obtém com uma assinatura gratuita e adiciona novos recursos de conveniência, ferramentas de condicionamento físico e conteúdo exclusivo.</p>
                    <ul>
                        <li>Acesso completo sem anúncios</li>
                        <li>Ferramenta de seleção de treino</li>
                        <li>Estatísticas de suas atividades</li>
                        <li>Crie e acompanhe treinos personalizados</li>
                        <li>Treinos exclusivos</li>
                        <li>Criação de metas semais</li>
                        <li>Salve seus vídeos favoritos</li>
                        <li>Plano alimentar personalizado</li>
                    </ul>
                    <button>Junte-se agora!</button>
                </div>
            </div>
        </div>
    </div>
    <button class="subir" onclick="scrollToTop()"><img src="./assets/img/arrow-top.png"></button>
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/sweetalert2@11.js"></script>
    <script src="https://kit.fontawesome.com/8a4fb0877d.js" crossorigin="anonymous"></script>

    <script src="./assets/js/index.js"></script>
</body>

</html>