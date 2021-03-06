---
layout:      home
title:       Desenvolvimento Web
description: Cursos, aulas, tutoriais, apostilas, matérias sobre programação web!
---

<!-- Home start -->
<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">
        <h1>DevFuria</h1>
        <div class="start">Desenvolvimento web pra ninguém botar defeito!</div>
    </div>
    <a href="#cursos">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>
</section>

<header class="header">
    <nav class="navbar navbar-custom" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-" href="{{ base_url() }}">DevFuria</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#cursos">Cursos</a></li>
                    <li><a href="#categorias">Categorias</a></li>
                    <li><a href="#razao">Por que?</a></li>
                    <li><a href="#depoimentos">Depoimentos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </div>
        </div><!-- .container -->
    </nav>
</header>

<!-- Cursos -->
<section id="cursos" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Cursos</h2>
                    <div class="pfblock-line"></div>
                </div>
            </div>
        </div><!-- .row -->
        <div class="row">
            <div class="col-sm-4">
                <div class="pfblock-header wow fadeInUp">
<!--                     <h3 class="pfblock-title">Other</h3>
                    <p>Estão aberta as matrículas para a 2 edição do curso de <strong>Lógica de Programação Aliada a Testes Unitários</strong>.</p>
                    <p><a class="btn btn-primary" href="{{ base_url() }}/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/?utm_source=devfuria.com.br&utm_campaign=matriculas&utm_medium=home-page" role="button">Eu quero!!!</a></p> -->
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pfblock-header wow fadeInUp">
                    <h3 class="pfblock-title">Lógica + Testes Unitários <br /><small>(em Python)</small></h3>
                    <p>Este curso é um desafio para você,</p>
                    <p>diferente de tudo que você já viu.</p>
                    <p>Você nunca mais será o mesmo depois deste curso.</p>
                    <p><a class="btn btn-primary" href="{{ base_url() }}/cursos/logica-de-programacao+testes-unitarios-em-python/" role="button">Saiba mais!</a></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pfblock-header wow fadeInUp">
<!--                     <h3 class="pfblock-title">Cursos</h3>
                    <p>Estão aberta as matrículas para a 2 edição do curso de <strong>Lógica de Programação Aliada a Testes Unitários</strong>.</p>
                    <p><a class="btn btn-primary" href="{{ base_url() }}/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/?utm_source=devfuria.com.br&utm_campaign=matriculas&utm_medium=home-page" role="button">Eu quero!!!</a></p> -->
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .contaier -->


</section>

<!-- Categorias -->
<section id="categorias" class="pfblock">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Categorias</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        Uma coleção de conteúdo de primeiríssima qualidade.
                    </div>
                </div>
            </div>
        </div><!-- .row -->
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="javascript/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="JavaScript"/>
                            <figcaption>
                                <h2>JavaScript</h2>
                                <p>ECMAScript</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="php/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="PHP"/>
                            <figcaption>
                                <h2>PHP</h2>
                                <p>para quem tem sangue nos olhos</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="python/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Python"/>
                            <figcaption>
                                <h2>Python</h2>
                                <p>sem mistérios!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="node.js/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Node.js"/>
                            <figcaption>
                                <h2>Node.js</h2>
                                <p>É JavaScript do lado do servidor!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="backbone/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Backbone"/>
                            <figcaption>
                                <h2>Backbone</h2>
                                <p>material inédito, surpreenda-se!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="html-canvas/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Canvas"/>
                            <figcaption>
                                <h2>Canvas</h2>
                                <p>canvas.getContext('2d')</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="logica-de-programacao/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-vermelhos.png" alt="Lógica de programação"/>
                            <figcaption>
                                <h2>Lógica de programação</h2>
                                <p>não entre aqui</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="html-css/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="HTML & CSS"/>
                            <figcaption>
                                <h2>HTML & CSS</h2>
                                <p>Vai estudar um, tem que estudar o outro.</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="sql/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="SQL"/>
                            <figcaption>
                                <h2>SQL</h2>
                                <p>Structured Query Language</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="misc/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Miscellaneous"/>
                            <figcaption>
                                <h2>Miscellaneous</h2>
                                <p>Assuntos diversos!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="regex/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="Expressões Regulares"/>
                            <figcaption>
                                <h2>Expressões Regulares</h2>
                                <p>descomplicamos</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="tdd/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="TDD"/>
                            <figcaption>
                                <h2>TDD</h2>
                                <p>Test Driven Development</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="git/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="img01"/>
                            <figcaption>
                                <h2>Git</h2>
                                <p>prático, prático, prático!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="c/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="img01"/>
                            <figcaption>
                                <h2>C</h2>
                                <p>Sem frescura!</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="seguranca-da-informacao/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="img01"/>
                            <figcaption>
                                <h2>Segurança da Informação</h2>
                                <p>OWASP TOP TEN 2010</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="grid wow zoomIn">
                    <a href="linux/">
                        <figure class="effect-bubba">
                            <img src="{{ base_url() }}/app/templates/clean/images/itens-azuis.png" alt="img01"/>
                            <figcaption>
                                <h2>Linux</h2>
                                <p>Receitas de instalação e muito mais...</p>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </div><!-- .contaier -->
</section>

<!-- Tá esperando o quê ?
<section class="calltoaction">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <h2 class="wow slideInRight" data-wow-delay=".1s">Tá esperando o quê?</h2>
                <div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
                    <p>Demorou para estudar com a gente!</p>
                    <p>E não é porque é grátis não, é que aqui tem qualidade!</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
                <a href="#categorias" class="btn btn-lg">Escolha uma categoria</a>
            </div>
        </div><!-- .row
    </div><!-- .container
</section> -->


<!-- Por que ? -->
<section id="razao" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Por que ?</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <p>Porque amamos o que fazemos e nos divertimos fazendo.</p>
                        <p>O objetivo do site é colaborar na formação técnica de programadores.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="iconbox wow slideInLeft">
                    <div class="iconbox-icon">
                        <span class="icon-magic-wand"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Qualidade</h3>
                        <div class="iconbox-desc">
                            Chega de ler tutoriais bizarros por aí, nos prezamos pela qualidade dos nossos artigos.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="iconbox wow slideInLeft">
                    <div class="iconbox-icon">
                        <span class="icon-puzzle"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Sem enrolação</h3>
                        <div class="iconbox-desc">
                            Simples, prático, direto e  objetivo. Leia qualquer um de nosso artigos e confira você mesmo.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="iconbox wow slideInLeft">
                    <div class="iconbox-icon">
                        <span class="icon-puzzle"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Dedicado</h3>
                        <div class="iconbox-desc">
                            Feito com todo o carinho e cuidado para o público iniciante.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="iconbox wow slideInRight">
                    <div class="iconbox-icon">
                        <span class="icon-badge"></span>
                    </div>
                    <div class="iconbox-text">
                        <h3 class="iconbox-title">Isto não é um blog</h3>
                        <div class="iconbox-desc">
                            Blog é reciclável, é bagunçado, sem pé nem cabeça! Mas caso queira, veja o nosso <a href="blog/">blog</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>


<!-- Depoimentos -->
<section id="depoimentos" class="pfblock pfblock-gray">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="pfblock-header wow fadeInUp">
                    <h2 class="pfblock-title">Depoimentos</h2>
                    <div class="pfblock-line"></div>
                    <div class="pfblock-subtitle">
                        <p>A galera leu, curtiu, comentou, só me resta agadecer: muuuuuuuito obrigado!</p>
                    </div>
                </div>
            </div>
        </div><!-- .row -->
        <div class="row">
            <!--
            O primeiro da lista é o depoimento mais recente....

            <div class="cbp-qtcontent">
                <blockquote>
                    <p></p>
                    <footer><a href="#"></a></footer>
                </blockquote>
            </div>
            -->
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Nice!</p>
                    <footer><a href="http://devfuria.com.br/javascript/operador-condicional-ternario/#comment-3827518707">Marco Antonio</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito obrigado!!!</p>
                    <footer><a href="http://www.devfuria.com.br/logica-de-programacao/exemplos-na-linguagem-c-do-algoritmo-bubble-sort/#comment-3821466534">Brian</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Parabéns pelo artigo! Muito bom!</p>
                    <footer><a href="http://www.devfuria.com.br/misc/arquivo-hosts/#comment-3811171220">Lourival Lopes</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito Obrigado. Muito simples sua explicação.</p>
                    <footer><a href="http://devfuria.com.br/javascript/manipulando-radios-buttons-com-javascript/#comment-3800579651">Jeferson Fernandes</a></footer>
                </blockquote>
            </div>
<!--             <div class="cbp-qtcontent">
                <blockquote>
                    <p>Top parabéns, grande abraço!</p>
                    <footer><a href="http://www.devfuria.com.br/sql/mysql-pelo-terminal/#comment-3796872968">Willian Sandro</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Valeu man :) salvou dois dias de sofrimento com isso.</p>
                    <footer><a href="https://disqus.com/by/rumblersoppa/">Rumbler Soppa</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Excelente explicação! Obrigado!</p>
                    <footer><a href="http://www.devfuria.com.br/python/modulos-pacotes/#comment-3750503937">Michel Wilhelm</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bom, seus artigos tem me ajudado bastante!</p>
                    <footer><a href="http://www.devfuria.com.br/python/manipulando-arquivos-de-texto/#comment-3735020868">Guilherme Britto</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Estas dicas me ajudaram muito. Valeu!</p>
                    <footer><a href="http://devfuria.com.br/linux/instalando-nodejs/#comment-3732906289">Itamar Gomes</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bom! Obrigado!</p>
                    <footer><a href="http://www.devfuria.com.br/python/yield/#comment-3699133721">Danilo Braz</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Parabéns pelo site...</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/dom/#comment-3685533765">Valério Souza</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Que explicação sensacional....</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/dom-create-element/#comment-3683468494">Luiz Felipe</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Guardei no Firefox para estudar mais tarde, a noite. Conteúdo bem interessante, eu sinceramente não havia visto. Qualquer dúvida eu posto " aqui" , okay! ?</p>
                    <footer><a href="http://www.devfuria.com.br/c/introducao-linguagem-c/#comment-3664089484">Willian Efaanz</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Parabéns pela explicação!</p>
                    <footer><a href="http://www.devfuria.com.br/logica-de-programacao/trocar-o-valor-de-duas-variaveis/#comment-3672490164">Jorge Bill Silva</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Legal o artigo.</p>
                    <footer><a href="http://www.devfuria.com.br/python/saidas-output/#comment-3661558218">zumbipy</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Me auxiliou em uma questão, muito bom !</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/forms/input-radio-button/#comment-3636774896">Rapha Stecca</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Ajudou a entender um pouco mais sobre. Obrigado!</p>
                    <footer><a href="http://www.devfuria.com.br/php/manipulando-checkboxes-com-php/#comment-3560414040">Ricardo Souza</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Flavio, deu certo! Estive todo esse tempo tentando de um jeito errado, muito obrigado!</p>
                    <footer><a href="http://www.devfuria.com.br/sql/mysql-listar-base/#comment-3580898402">Sor Dantas, o Magro</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bom, abriu para novas ideias.</p>
                    <footer><a href="http://www.devfuria.com.br/python/tdd-primeiros-passos-com-testes-unitarios/#comment-3574121281">Luiz Gledson</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Post muito agregador!</p>
                    <footer><a href="http://www.devfuria.com.br/blog/2015/10/07/a-pratica-deve-vir-antes-da-teoria.html#comment-3569277033">Israel Blender</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Olha, eu tmb coloco os atributos das minhas tags assim, facilita a leitura do código num futuro. E me ajudou bastante!</p>
                    <footer><a href="http://www.devfuria.com.br/php/manipulando-radio-button-com-php/#comment-3574810910">Gualberto Dos Santos</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito legal e bem explicado parabéns!</p>
                    <footer><a href="http://www.devfuria.com.br/logica-de-programacao/trocar-o-valor-de-duas-variaveis/#comment-3592643589">Natalia Rodrigues</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito obrigado!!!!!!!!!!!</p>
                    <footer><a href="http://devfuria.com.br/linux/instalando-sqlite/#comment-3496702500">Tadeu Espíndola Palermo</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Excelente explicação, muito obrigado pelo artigo!</p>
                    <footer><a href="http://devfuria.com.br/javascript/prototipos-prototype/#comment-3391239261">Leandro M. Silva </a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Excelente! Direto ao ponto...</p>
                    <footer><a href="http://www.devfuria.com.br/python/sintaxe-basica/#comment-3316225832">Marcelo Romeu Gonçalves</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Thank's very much!</p>
                    <footer><a href="http://www.devfuria.com.br/git/netrc-nao-pedir-senha/#comment-3311432326">brazica</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Show de bola... Parabéns!</p>
                    <footer><a href="http://www.devfuria.com.br/python/yield/#comment-3276927535">Eduardo</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Só para lhe dizer que este site é fantastico! Obrigado por partilhar os seus conhecimentos com o pessoal! :)</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/backbone-exemplo-05/#comment-3262230385">Nuno Almeida</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Show !!</p>
                    <footer><a href="http://www.devfuria.com.br/python/lacos-de-repeticao/#comment-3248117928">Bruno Peçanha</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Resolveu meu problema!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/forms/input-radio-button/#comment-3215373541">Netlife NL</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito obrigado! Não estava entendendo o que eram esses elementos até encontrar este post.</p>
                    <footer><a href="http://www.devfuria.com.br/html-css/elementos-inline-block-level/#comment-3033551740">Lucas</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Tenho aprendido muito com seus tutoriais, muito obrigado e parabéns pelo conteúdo.</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/dom-getelementbyid/#comment-2905104572">Rodrigo Gonçalves</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Estou estudando o NodeJS e me encantando com a estrutura e facilidade de executar a linguagem. Muito bacana esse compêndio de artigos, me ajudará bastante! Valeu msm!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/node.js/#comment-2900773411">Rodrigo Zan</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Simples e Didático!!! Parabéns!!!</p>
                    <footer><a href="http://www.devfuria.com.br/python/sintaxe-basica/#comment-3179804339">Evandro Costa</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Ajudou muito!</p>
                    <footer><a href="http://www.devfuria.com.br/python/sintaxe-basica/#comment-3108586469">Carlos Henrique</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Show!! A tirinha foi fod*! HAHAHA</p>
                    <footer><a href="http://www.devfuria.com.br/logica-de-programacao/#comment-2923536078">Rodolfo Martins</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bom seu tutorial, parabéns!</p>
                    <footer><a href="http://www.devfuria.com.br/python/manipulando-arquivos-de-texto/#comment-3010849957">Brito</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bem feito o artigo, parabéns!! Com certeza é de muita valia. Bem abordado os tópicos com a preocupação de passar desde a forma mais simples de testes até um framework. Obrigado!!!</p>
                    <footer><a href="http://www.devfuria.com.br/python/tdd-primeiros-passos-com-testes-unitarios/#comment-3034463140">Newton San</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>O DevFuria tem artigos muito interessante sobre várias áreas. Continuem com esse trabalho bacana :D</p>
                    <footer><a href="http://www.devfuria.com.br/php/como-funcionam-os-metodos-get-e-post/#comment-3090951852">Edson Fell</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Sensacional, Flávio! Estava me sentindo mal acostumado usando jQuery. Estou criando um projeto sem utilizar frameworks e treinando JS. Sua explicação foi excelente. Obrigado!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/dom-getelementbyid/#comment-2586607601">Rômulo Bastos</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Obrigado, adorei!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/forms/input-radio-button/#comment-2620405304">anonymousUP</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>De parabéns, simples e prático!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/numeros-aleatorios/#comment-2315409860">Emerson Andrey</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Caraca meu, muito resumido e bem explicadinho. Parabéns!!!</p>
                    <footer><a href="http://www.devfuria.com.br/linux/apache-habilitar-mod_rewrite-no-apache-mod/#comment-2626611324">Kevin Riquena</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Excelente explicação, rápida, prática, objetiva e esclarecedora... valeu!</p>
                    <footer><a href="http://www.devfuria.com.br/html-css/seletores-css/#comment-1790118192">Grazi AC</a></footer>
                </blockquote>
            </div>
            <div class="cbp-qtcontent">
                <blockquote>
                    <p>Muito bem explicado!!!</p>
                    <footer><a href="http://www.devfuria.com.br/javascript/dom-create-element/#comment-1841649928">Geilson Ribeiro Mirandola</a></footer>
                </blockquote>
            </div>
 -->        </div><!-- .row -->
    </div><!-- .row -->
</section>

<!-- Contato -->
<section id="contato" class="pfblock" style="padding-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="pfblock-header">
                    <h2 class="pfblock-title">Contato</h2>
                    <div class="pfblock-line"></div>
                    <p>Para entrar em contato com a gente, você pode...</p>
                    <br />
                    <p style="text-align: left">1) Abrir uma <a href="https://github.com/flaviomicheletti/devfuria.com.br/issues/new">issue</a> no repositório ou</p>
                    <p style="text-align: left">2) Enviar um email para <strong>sitedevfuria arroba gmail.com</strong></p>
                </div>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</section>

