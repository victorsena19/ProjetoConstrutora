<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>Sobre</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <style>
            *{
                margin:0px;
                padding:0px;
                box-sizing:border-box;

            }

            html,body{
                height:100%;
                width:100%;
            }

            header{
                padding: 10px 0px;
                background-color:#d6d6d6;
            }

            .conteiner{
                width:100%
                height:50px;
            } /*conteiner*/

            .clear{
                clear:both;
            }/*limpar*/

            .logo1{
                width:160px;
                height:60px;
                float:left;
                margin:20px 50px;
                background-image: url('../imagens/logo1.png');
                background-size:100%;
                background-repeat:no-repeat;

            }/*logo1*/

            .menu{
                width:50%;
                height:100px;
                float:right;
                margin:10px 2%;

            }

            .menu ul{
                list-style: none;
                background-color: black

            }

            .menu li{
                float:right;
                padding: 30px 20px;
                cursor: pointer;
                height:auto;
                width:auto;
            }

            .menu li:hover{
                background-color: white;
            }

            .conteiner-fundo{
                width:80%;
                height:500px;
                background-image: url('../imagens/bg-form.jpg');
                background-size:cover;
                margin:0px auto;

            } /*conteiner-fundo*/

            section{
                background-color:#d6d6d6;
                width:80%;
                margin:0 auto;
            }
            .sobre{
                display: inline-block;
                padding: 20px 15px;
                width:48%;
                position: relative;
                text-align: justify;

            }

            .sobre h3{
                padding:5px 15px;
            }

            .map{
                margin: 9px;
                display:inline-block;
                width: 48%;
                position: relative;
            }
            .map h3{
                padding:10px 0;
            }

            footer{
                width:80%;
                margin:0 auto;
                background-color: #d6d6d6;
                text-align:center;
                padding:40px 0;
            }

            footer img{
                width:10%;
                height:10%;
            }

            .pa1{
                padding:5px 0;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="conteiner">
                <div><div class="logo1"></div></div>
                <div class="menu">
                    <ul>
                        <a href="{{url('/contato')}}"><li>Contato</li></a>
                            <a href="{{url('/sobre')}}"><li>Sobre</li></a>
                                <a href="{{url('/')}}"><li>Home</li></a>
                    </ul>
                </div>
            </div>
            <div class="clear"></div> <!--clear =limpar-->
        </header>

        <div class="conteiner-fundo">

            <div class="clear"></div> <!--clear=limpar-->
        </div> <!--*conteiner-fundo-->

        <section>
            <div class="sobre">
                <h3>Sobre o Cena construções</h3>
                <p>O Cena Construções, com mais de 20 anos de atuação no mercado, é uma das maiores incorporadoras de Rondônia, com sede na cidade de Cacoal. Alia seu padrão de qualidade ao conhecimento do mercado local para oferecer projetos inovadores com alto padrão de execução e acabamento.

                    Iniciou suas atividades com a Construtora Aripuanã, no segmento de obras públicas em 1994 e, em 1999, lançou a ConcreAço da Amazônia, atual líder da região no ramo de estruturas pré-moldadas de concreto. Em 2011, passou a atuar diretamente no mercado imobiliário, com o lançamento do Condomínio Vila Romana.

                    Hoje conta com 9 mil m² em canteiros de obras, 56 mil m² construídos e foi responsável por grandes obras da região, tais como Aeroporto de Cacoal, Hospital São Daniel Comboni e Hospital Regional de Cacoal. Também conduziu a construção de escolas técnicas, faculdades, hotéis e supermercados.
                    Entre seus principais empreendimentos estão o Condomínio Vila Romana, o Residencial Araçá e o Reserva do Bosque, seu mais novo empreendimento.</p>
            </div>

            <div class="map">
                <h3>Faça uma visita</h3>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="300" class="mapa" id="gmap_canvas" src="https://maps.google.com/maps?q=av%20nacoes%20unidas%20cacoal%20Brasil&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://torrent9-fr.com"></a></div>
                </div>
                <div class="clear"></div> <!--clear=limpar-->
        </section>
        <footer>
            <img src="imagens/logo1.png">
            <p class="pa1">Todos os direitos reservados</p>
        </footer>
    </body>
</html>

