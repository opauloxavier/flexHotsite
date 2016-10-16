<?php include 'mail.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexibilité - Pilates e Estética</title>
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="custom/css/custom.css"/>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css"/>
    <link rel="shortcut icon" href="custom/img/favicon.png" type="image/x-icon">
    <script type="text/javascript" src="assets/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="custom/js/analytics.js"></script>
    <script type="text/javascript" src="custom/js/custom.js"></script>
    <style>
    @import 'https://fonts.googleapis.com/css?family=Roboto|Montserrat:700|Montserrat';
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Abrir Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <a class="navbar-left" href="<?= SITE_URL ?>"><img src="custom/img/logo.png" class="img-responsive" id="logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron vertical-center">
      <div class="container">
      </div>
    </div>
    <div class="row" id="sobre">
                <div class="container">
                    <div class="col-md-6">
                       <h1>Saúde e Bem-estar de homens e mulheres de todas as idades.</h1>
                       <p>Entendemos que quando corpo e mente trabalha junto nossa 
                        qualidade de vida muda e temos mudança no humor, no corpo e na vida!
                      <br>
                      Trabalhamos para que nossos pacientes recuperem seu equilibrio e harmonia do seu corpo! 
                       </p>
                    </div>
                </div>
    </div>
    <div class="row blockquote">
                <div class="container">
                    <div class="col-md-12">
                       <blockquote class="blockquote-reverse">
                        "Pilates desenvolve um corpo uniforme, corrige posturas erradas, restaura a vitalidade física, revigora a mente e eleva o espírito"
                        <footer><cite title="Joseph Pilates">Joseph Pilates</cite></footer>
                        </blockquote>
                    </div>
                </div>
    </div>
        <div class="container">
            <div class="row" id="servicos">
                <legend>Pilates</legend>
                <div class="col-md-4"><img src="custom/img/pilates.png" class="img-responsive"></div>
                <div class="col-md-8">
                <p>Todo mundo já sabe o quanto é importante para a saúde a prática de 
                    exercícios físicos, porém não são todas as pessoas que apreciam a prática de 
                    caminhada ou corrida e as atividades realizadas em academia. Atualmente, 
                    uma das alternativas para essas pessoas é o Pilates. Esse método de 
                    condicionamento físico e mental foi criado pelo alemão Joseph Pilates 
                    (1880-1967) e, mesmo com exercícios aparentemente suaves, os movimentos 
                    realizados no Pilates proporciona o alongamento e a fortificação do corpo de 
                    forma integrada e individualizada, além de melhorar da respiração, diminuir o 
                    stress, desenvolver consciência e equilíbrio corporal, melhorar a coordenação 
                    motora e a mobilidade articular e proporcionar relaxamento. Outra proposta do 
                    Pilates é oferecer uma nova maneira de seus praticantes se relacionarem com 
                    o mundo.</p>
                </div>
            </div>
        </div>
            <div class="container-fluid bg-odd">
               <div class="container">
                <div class="row ">
                    <legend>RPG (Reeducação Postural Global)</legend>
                    <div class="col-md-4"><img src="custom/img/rpg.png" class="img-responsive"></div>
                    <div class="col-md-8">
                        <p>
                        O tratamento através da RPG é indicado nas diversas patologias do sistema 
                        musculoesquelético, tais como hérnia de disco, lombalgia e lombociatalgia, 
                        dores musculares e articulares, cefaleias tensionais, alterações posturais 
                        (escoliose, hiperlordose, hipercifose etc), pés planos e cavos, entre outras. 
                        Entre os benefícios, o bom alongamento global, melhora do padrão 
                        respiratório, melhora do tônus muscular de uma maneira geral e boa 
                        consciência corporal.
                        <br>
                        A RPG baseia-se em três princípios fundamentais:
                        </p>
                        <ul>
                            <li>Individualidade: Cada ser humano é único e reage de forma diferente;</li>
                            <li>Causalidade: A verdadeira causa do problema pode estar distante do sintoma 
                                (causa/conseqüência)
                            </li>
                            <li>Globalidade: Deve-se tratar o corpo como um todo, buscando identificar as 
                                responsabilidades das retrações musculares nas patologias músculo-esqueléticas. 
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
            <div class="container">
            <div class="row">
                <legend>Acupuntura</legend>
                <div class="col-md-4"><img src="custom/img/acupuntura.jpg" class="img-responsive"></div>
                <div class="col-md-8">
                    <p>
                    A acupuntura é um conjunto de práticas terapêuticas inspirado nas tradições médicas orientais. Criada há mais de dois milênios, a acupuntura é um 
                    dos tratamentos médicos mais antigos do mundo. Consiste na estimulação de locais anatômicos sobre ou na pele – os chamados pontos de acupuntura.
                    </p>
                    <p><strong>Para que serve</strong></p>
                    <p>
                    A acupuntura busca a recuperação do organismo como um todo pela indução de processos regenerativos, normalização das funções alteradas, reforço do sistema imunológico e controle da dor.
                    </p>
                    <p>
                    A acupuntura é especialmente indicada para a redução da dor em casos de fibromialgia e dores localizadas nas costas, tratamento de náuseas e vômitos em pacientes que se submetem a quimioterapias ou cirurgias, e diminuição da tensão emocional.
                    </p> 
                </div>
            </div>
            <div class="row">
                <legend>Day Spa</legend>
                <div class="col-md-6">
                    <ol>
                        <li>Acupuntura</li>
                        <li>Auriculoterapia</li>
                        <li>Criolipolise</li>
                        <li>Criofrequencia</li>
                        <li>Dermaroller</li>
                        <li>Eletrolipolise</li>
                        <li>Endermologia</li>
                        <li>Fotodepilação</li>
                        <li>Corrente Russa</li>
                        <li>Limpeza de pele profunda</li>
                        <li>Massagem Modeladora</li>
                        <li>Peeling Quimico e Diamante</li>
                        <li>Reflexologia e Shiatsu Corporativo e para Festas e Eventos</li>
                        <li>Tratamento para Manchas com luz Pulsada</li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <p>O Day Spa nada mais é que um pacote onde são agregados serviços que vão 
                        desde massagens relaxantes, a tratamentos faciais, serviços em pés e mãos, 
                        além de shiatsu, banhos, ofurô e aromoterapia. Enfim, não há uma receita de 
                        bolo, mas há resultado: bem estar.</p>
                        <p> Há pacotes para todos os tipos, dos mais 
                        simples aos mais completos. Os valores também vão variar de acordo com os 
                        serviços agregados ou as instalações disponíveis. 
                        <p>
                        Você monta seu Day Spa: 
                        pode incluir, massagem com bambu, ritual no couro cabeludo, sais… Enfim, 
                        não faltam opções. Alguns incluem refeição, dependendo do tempo que você 
                        disponibiliza para seu dia de relax.
                        </p>
                        <p>
                        Consulte os pacotes e valores via e-mail.
                        </p>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="contato">
            <div class="container">
                <div class="row" >
                    <div class="col-md-12">
                        <h3>Fale Conosco</h3>
                    </div>
                    <form action="index.php" method="POST">
                      <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <input type="text" name="nome" placeholder="Nome" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 col-xs-6 col-sm-6">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" name="assunto" placeholder="Assunto" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea name="mensagem" placeholder="Mensagem" class="form-control" required rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-4 col-md-offset-4">
                                        <button type="submit" name="submitEmail" class="btn btn-success btn-block">ENVIAR MENSAGEM</button>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-6">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.4656591564244!2d-43.442453584506865!3d-22.748093885092757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x99664e849612eb%3A0xacb00eb10081b17f!2sFlexibilite+Pilates+%26+Est%C3%A9tica!5e0!3m2!1spt-BR!2sbr!4v1475373744562" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                           <p>Telefone: (21) 96435-0727</p>
                           <p>Rua Luís Sobral, 1223 - Metrópole, Nova Iguaçu - RJ, 26013-736</p>
                       </div>
                    </div>
                </form>
                        </div>
            </div>
    </div>           

    <footer class="footer">
        <div class="container">
           <p> Flexibilité Estética e Pilates, Todos os direitos reservados. Desenvolvido por <a href="http://agenciabasic.com.br" target="_blank">Agência Basic</a></p>
        </div>
    </footer>    
</body>
</html>