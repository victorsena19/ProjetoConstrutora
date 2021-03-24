<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Contato</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="css/estilo2.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>

<body>
<header>
    <div class="conteiner">
        <div><div class="logo1"></div></div>
        <div class="menu">
            <ul>
                <li>Contato</li>
                <li>Sobre</li>
                <li>Home</li>
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
            <input type="number" name="numero"
                   required placeholder="Telefone para contato">
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

