<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Greentech</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/greentech.css">
    
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" role="navigation menuitem">
            <ul class="nav justify-content-end">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#servico">Serviço</a></li>
                <li class="nav-item"><a class="nav-link" href="#historia">Sobre</a></li>
                <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
            </ul>
            
            <!-- div class="flex-center position-ref full-height" -->
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Cadastrar</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </nav>
    </header>
     <main class="container">
        <section>
            <img alt="img do app" alt="Logo GreenTech">
            <button role="widjet">Baixe já</button>

        </section>

        <section role="mail">
            <h2 id="servico">Serviço</h2>
        </section>

        <section role="historia">
            <h2>Nossa História e Equipe</h2>
            <p>O GreenTech, é um aplicativo desenvolvido pelos graduandos do sexto ciclo de Análise e Desenvolvimento de
                Sistemas - período vespertino - 2016. O projeto nasceu de um trabalho em classe bem sucedido na disciplina
                de Redes de Computadores. Após observarmos a relevância da ideia, o grupo decidiu ampliar o projeto para
                nosso Trabalho de Conclusão de curso sob orientação e supervisão do Mestre em Engenharia Mecânica Fernando
                Mendes Bacic, que nos brindou com muito conhecimento, ensinamentos acadêmicos e profissionais espetaculares.
                </p>
            <h3>Integrantes:</h3>

            <div class="row" role="Equipe">
                <article class="card border-primary mb-3" style="width: 15.5rem;">
                    <img class="card-img-top" src="img/super_mario_bros.jpg" alt="Bryan">
                    <p class="card-body"><b>Bryan</b><br> o que ele faz?</p>
                </article>
                <article class="card border-primary mb-3" style="width: 15.5rem;">
                    <img class="card-img-top" src="img/super_mario_bros.jpg" alt="Luciana">
                    <p class="card-body"><b>Luciana</b><br> o que ela faz?</p>
                </article>
                <article class="card border-primary mb-3" style="width: 15.5rem;">
                    <img class="card-img-top" src="img/super_mario_bros.jpg" alt="Saulo">
                    <p class="card-body"><b>Saulo</b><br> o que ele faz?</p>
                </article>
                <article class="card border-primary mb-3" style="width: 15.5rem;">
                    <img class="card-img-top" src="img/super_mario_bros.jpg" alt="Vitória">
                    <p class="card-body"><b>Vitória</b><br> o que ela faz?</p>
                </article>
            </div>
        </section>

        <section role="contatos" class="row">
            <aside class="col-5">
                <h3 id="contato">Contato:</h3>
                <p>Endereço: Praça 19 de Janeiro, sem número - Boqueirão
                    <br> Praia Grande - SP, CEP: 11700-100 </p>
                <p>Telefone: (13) 3569-6068 </p>
                <p>Redes sociais</p>
            </aside>
            <form class="col-7">
                <fieldset class="form-group">
                    <h3 id="contato">
                        <legend>Envie-nos uma mensagem:</legend>
                    </h3>
                    <p>Para mais informações, críticas e sugestões, preencha os campos abaixo que retornaremos.</p>


                    <label for="inputEmail" class="col-form-label">Seu Nome:</label>
                    <input type="text" name="nome" placeholder="Ex.: Névinha das Neves" class="form-control">

                    <label class="col-form-label">Seu Email:</label>
                    <input type="email" name="email" placeholder="Ex.: nevinha@gatinha.com" class="form-control">

                    <label class="col-form-label">Qual é o assunto da mensagem?</label>
                    <input type="text" name="assunto" placeholder="Ex.: Gostei do site" class="form-control">

                    <label class="col-form-label">Sua Mensagem:</label>
                    <textarea name="mensagem" placeholder="Ex.: Cade o CSS dessa bagaça??" class="form-control" rows="3"></textarea>
                    <br>
                    <button type="submit" name="btnEnviar" class="btn btn-outline-primary">Enviar Mensagem</button>
                </fieldset>
            </form>
        </section>
    </main>
    <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
        <p class="text-center">Equipe GreenTech &copy 2018 - Topicos Especiais para Internet - Prof° Leonardo Villani - Fatec
            Praia Grande</p>
    </footer>    

           
        <!-- /div -->
    </body>
</html>
