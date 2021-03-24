<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Home-Construtora</title>
    <meta charset="utf-8">
    <meta name="author" content="Vcitor, Gabriel, Douglas, Aloysio, Thiago, Fabricio">
    <meta name="descriptions" content="Site de Construtora">
    <meta name="keywords" content="construtora, construção, obras, engenharia, materiais">
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

        } /*logo2*/

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

        .loren-ipsun{
            margin:0 auto;
            height:150px;
            width:80%;
            background-color:steelblue;
        }



        .frase{
            width:100%;
            text-align:center;
            font-family: 'Raleway', sans-serif;
            padding:50px 0px;
        }

        h5{
            padding-top:10px;
        }


        main{
            background-color:lightgrey;
            width:80%;
            margin:0 auto;

        }

        aside{
            display:flex;
            width:100%;
        }


        .loren1{
            width:50%;
            height:200px;
            font-family: 'Raleway', sans-serif;
            padding:100px 2%;
        }

        .foto1 img{
            width:100%;
            height:200px;
            margin:0px;
            padding:0px;
        }

        .loren2{
            width:50%;
            height:200px;
            font-family: 'Raleway', sans-serif;
            padding:100px 2%;
        }

        .foto2 img{
            width:100%;
            height:200px;
        }

        .loren3{
            width:100%;
            height:200px;
            font-family: 'Raleway', sans-serif;
            padding:100px 2%;
        }

        .foto3 img{
            width:100%;
            height:200px;
        }

        .loren4{
            width:100%;
            height:200px;
            font-family: 'Raleway', sans-serif;
            padding:100px 2%;
        }

        .foto4 img{
            width:100%;
            height:200px;
        }

        footer{
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



        @media screen and (max-width: 850px){
            aside{
                flex-direction:column;
            }

            .form{
                margin:5px 4%;
            }

            input[type=submit]{
                margin-top:0px;
            }

            #p{
                padding:5px 8%;
                margin:0px;
            }

            .conteiner-fundo{
                padding:5% 0;
            }

            .conteiner-form{
                width:50%;
                position: none;
                float:none;
                margin:0 auto;
                height: 100%;
            }

            .loren1{
                order:1;
                width:100%;
            }

            .foto1 img{
                order:2;
                width:100%;
            }

            .foto1 img:hover{
                transform:rotatey(180deg);
                transition-duration: 2s;
            }

            .loren2{
                order:3;
                width:100%;
            }

            .foto2 img{
                order:4;
                width:100%;
            }

            .foto2 img:hover{
                transform:rotatey(180deg);
                transition-duration: 2s;
            }

            .loren3{
                order:5;
                width:100%;
            }

            .foto3 img{
                order:6;
                width:100%;
            }

            .foto3 img:hover{
                transform:rotatey(180deg);
                transition-duration: 2s;
            }

            .loren4{
                order:7;
                width:100%;
            }

            .foto4 img{
                order:8;
                width:100%;
            }

            .foto4 img:hover{
                transform:rotatey(180deg);
                transition-duration: 2s;
            }
        }

        @media screen and (max-width: 600px){
            [class^="logo"]{
                text-align:center;
                float:none;
                margin:4px auto;
            }

            .menu{
                text-align:center;
                float:none;
                margin:4px auto;
            }

            .menu ul{
                margin-right:20px;
            }

            .menu li{
                padding:20px 12px;
            }

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
                <a href="{{url('/sobre')}}"><li>Sobre</li>
                    <a href="{{url('/')}}"><li>Home</li>
            </ul>
        </div>
    </div>
    <div class="clear"></div> <!--clear =limpar-->
</header>

<section>
    <div class="conteiner-fundo">

        <div class="clear"></div> <!--clear=limpar-->
    </div> <!--*conteiner-fundo-->

    <div class="loren-ipsun">
        <div class="frase">
            <h3>MINHA CHAMA PARA EMPREENDEDORISMO<h3>
                    <h5>Alguma mensagem para chamada</h5>
        </div><!--frase-->

    </div> <!--loren-ipsun-->
</section>
<main>
    <aside>
        <div class="loren1">
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ...</p>
        </div>

        <div class="foto1">
            <img src="imagens/mosaico1.jpg">
        </div>
    </aside>

    <aside>
        <div class="foto2">
            <img src="imagens/mosaico2.jpg">
        </div>
        <div class="loren2">
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ...</p>
        </div>
    </aside>

    <aside>
        <div class="loren3">
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ...</p>
        </div>
        <div class="foto3">
            <img src="imagens/mosaico3.jpg">
        </div>
    </aside>

    <aside>
        <div class="foto4">
            <img src="imagens/mosaico4.jpg">
        </div>

        <div class="loren4">
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ...</p>
        </div>
    </aside>
</main>

<footer>
    <img src="imagens/logo1.png">
    <p class="pa1">Todos os direitos reservados</p>
</footer>

</body>

</html>
