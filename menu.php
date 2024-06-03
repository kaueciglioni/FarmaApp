<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Produtos - FarmaApp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
            margin: 0;
        }
        .btn-container {
            display: flex;
            gap: 10px;
        }
        .catalogo {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .produto {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin: 0 auto; /* Adicionar esta linha */
        }

        .produto img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 10px;
            border-radius: 8px;
        }
        .produto h2 {
            margin-top: 0;
            font-size: 16px;
            color: #333;
        }
        .produto .preco {
            font-size: 14px;
            color: #007bff;
        }
        .btn-comprar {
        display: block;
        width: 150px; /* Defina uma largura fixa */
        margin: 10px auto; /* Adicione margem automática para centralizar horizontalmente */
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        text-align: center;
        border-radius: 8px;
        transition: background-color 0.3s;
        }
                    
        .btn-menu {
            display: block;
            width: 200px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-menu:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            display: block;
            width: 200px;
            padding: 10px;
            background-color: #6c757d;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }

        footer{
            margin-left: 45%;
            padding: 20pt;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Catálogo de Produtos - FarmaApp</h1>
            <div class="btn-container">
                <a href="create_medicamento.php" class="btn-menu">Sou dono de Farmácia - Cadastrar Produtos</a>
                <a href="filtrar_medicamento.php" class="btn-secondary">Buscar Medicamento</a>
            </div>
        </div>
        <h4>Produtos em promoção - Todos os produtos próximos a data de validade </h4>
        <div class="catalogo">
            <div class="produto">
                <img src="src/img/images.jpg" alt="Produto 1">
                <h2>Dipirona</h2>
                <p class="preco">R$ 20,00</p>
                <p>Localização: Drogaria São Paulo Ibirapuera</p>
                <a href="checkoutA.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\paracetamol.jpeg" alt="Produto 2">
                <h2>Paracetamol</h2>
                <p class="preco">R$ 19,70</p>
                <p>Localização: DrogaLeste Vila Curuça</p>
                <a href="checkoutB.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\ibuprofeno.jpg" alt="Produto 3">
                <h2>Ibuprofeno</h2>
                <p class="preco">R$ 12,30</p>
                <p>Localização: Drogasil Jardim Helena</p>
                <a href="checkoutC.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\omeprazol.jpg" alt="Produto 4">
                <h2>Omeprazol</h2>
                <p class="preco">R$ 45,70</p>
                <p>Localização: DrogaRaia Itaquera</p>
                <a href="checkoutD.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\amoxilina.jpg" alt="Produto 5">
                <h2>Amoxilina</h2>
                <p class="preco">R$ 55,00</p>
                <p>Localização: Drograria São Paulo Mooca</p>
                <a href="checkoutE.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\loratadina.jpg" alt="Produto 6">
                <h2>Loratadina</h2>
                <p class="preco">R$ 27,50</p>
                <p>Localização: Ultrafarma Bela Vista</p>
                <a href="checkoutF.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\cetoprofeno.jpg" alt="Produto 7">
                <h2>Cetoprofeno</h2>
                <p class="preco">R$ 65,00</p>
                <p>Localização: DrogaLesta Penha</p>
                <a href="checkoutG.php" class="btn-comprar">Comprar</a>
            </div>
            <div class="produto">
                <img src="src\img\fluoxetina.jpg" alt="Produto 8">
                <h2>Fluoxetina</h2>
                <p class="preco">R$ 23,20</p>
                <p>Localização: DrogaRaia Barra-Funda</p>
                <a href="checkoutH.php" class="btn-comprar">Comprar</a>
            </div>
        </div>
    </div>

    <footer>&copy;  FarmaApp
    </footer>
</body>
</html>
