<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Home-Construtora</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="css/estilo1.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="author" content="Vcitor, Gabriel, Douglas, Aloysio, Thiago, ">
    <meta name="descriptions" content="Site de Construtora">
    <meta name="keywords" content="construtora, construção, obras, engenharia, materiais">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>

<body>
<header>
    <div class="conteiner">
        <div><div class="logo1"></div></div>
        <div class="menu">
            <ul>
                <a href="{{url('/contato')}}"><li>Contato</li></a>
                <a href="{{url('/sobre')}}"><li>Sobre</li>
                    <a href="{{url('/home')}}"><li>Home</li>
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
