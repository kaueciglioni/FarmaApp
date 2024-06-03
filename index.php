<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce de Farmácia - FarmaApp</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('src/img/farmacia.jpg'); /* Adicionando a imagem de fundo */
            background-size: cover; /* Garantindo que a imagem cubra todo o fundo */
            background-position: center; /* Centralizando a imagem */
            color: #fff; /* Cor do texto */
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px; /* Adicionando espaço interno */
            border-radius: 10px; /* Arredondando as bordas */
            background-color: #0056b3; /* Cor vermelha com transparência */
        }

        .brand {
            font-size: 24px; /* Tamanho da fonte */
            font-weight: bold; /* Negrito */
        }

        .owners {
            text-align: right; /* Alinhamento à direita */
            margin-top: 20px; /* Espaçamento superior */
        }

        .btn-container {
            text-align: center; /* Alinhamento central */
            margin-top: 20px; /* Espaçamento superior */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff; /* Cor do botão */
            color: #333; /* Cor do texto */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #eee; /* Hover cinza claro */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="brand">FarmaApp - E-commerce de Farmácia</div>
        <div class="owners">
            <p>Ruliana Sauanna Moreira Dos Santos - RA: 1827775</p>
            <p>Decio Alves da Silva Junior - RA: 1804989</p>
            <p>Beatriz Matos Pereira - RA: 1996217</p>
            <p>Kauê Negrini Ciglioni - RA: 1839772</p>
        </div>
    </div>
    <div class="container">
        <p>O FarmaApp é uma plataforma inovadora que visa reduzir o desperdício de medicamentos e promover o acesso à saúde universal.</p>
        <p>Através do nosso e-commerce de farmácia, oferecemos produtos próximos à validade a preços acessíveis, proporcionando economia para nossos clientes e contribuindo para um mundo mais sustentável.</p>
        <div class="btn-container">
            <a href="menu.php" class="btn">Catálogo de Produtos</a>
        </div>
    </div>
</body>
</html>
