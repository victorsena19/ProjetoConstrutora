<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Contato</title>
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
            background-image: url('../imagens/bg-form.jpg');
            background-repeat: no-repeat;
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

        .conteiner-form{
            margin:0px auto;
            width:80%;
            height:600px;
            background-color:gray;
        } /*conteiner-form*/

        .titulo-form{
            width:100%;
            height: 100px;
            text-align: center;
            background-color:#A9A9A9;
            font-family: 'Raleway', sans-serif;
            font-size: 15px;
            color:black;
            padding:40px 0;

        } /*titulo-form*/

        .form{
            padding:10px 4%;
        } /*form*/

        .form input{
            width:100%;
            height:40px;
            padding:0 5%;
        } /*form input*/

        .form p{
            font-family: 'Raleway', sans-serif;
            font-size: 18px;
        } /*form paragrafo*/

        .form:not(:first-child){
            margin-top:30px;
        }

        input[type=submit]{
            font-family: 'Raleway', sans-serif;
            font-size:18px;
            margin-top:10px;
            background-color:#A9A9A9;
            border-radius:10px;
            cursor: pointer;
        }
        #p{
            margin:25px 8%;
            font-family: 'Raleway', sans-serif;
            font-size: 18px
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
                <a href="{{url('/sobre')}}"><li>Sobre</li></a>
                <a href="{{url('/')}}"><li>Home</li></a>
            </ul>
        </div>
    </div>
    <div class="clear"></div> <!--clear =limpar-->
</header>

<div class="conteiner-form">
    <h2 class="titulo-form">PREENCHA OS CAMPOS COM OS DADOS PEDIDOS ABAIXO QUE LOGO RETORNAREMOS</h2>

    <form>
        <div class="form">
            <p>*Nome</p>
            <input type="text" name="nome" required placeholder="Nome completo">
        </div> <!--form-->

        <div class="form">
            <p>*Email</p>
            <input type="email" name="email" required placeholder="Digite seu melhor email">
        </div> <!--form-->

        <div class="form">
            <p>*Fone</p>
            <input type="number" name="numero" required placeholder="Telefone para contato">
        </div> <!--form-->

        <div class="form">
            <input type="submit" name="enviar">
        </div>
        <div id="p">
            <p>*Campos obrigatórios</p>
        </div>

    </form>

</div> <!--conteiner-form-->

    <footer>
        <img src="imagens/logo1.png">
        <p class="pa1">Todos os direitos reservados</p>
    </footer>

</body>
</html>

