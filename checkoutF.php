<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - FarmaApp</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .produto {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .produto img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
        }
        .produto-info {
            flex: 1;
            margin-left: 10px;
        }
        .produto-info h2 {
            margin-top: 0;
        }
        .produto-info p {
            margin: 5px 0;
        }
        .preco-total {
            text-align: right;
            margin-top: 20px;
        }
        .btn-finalizar {
            display: block;
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            text-align: center;
            border-radius: 8px;
            transition: background-color 0.3s;
        }
        .btn-finalizar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <div class="produto">
            <img src="src\img\loratadina.jpg" alt="Produto 1">
            <div class="produto-info">
                <h2>Loratadina</h2>
                <p>Preço: R$ 27,50</p>
                <p>Localização: Ultrafarma - Bela Vista</p>
            </div>
        </div>
        <!-- Adicione os demais produtos aqui -->
        <div class="preco-total">
            <h3>Total: R$ 27,50</h3>
        </div>
        <a href="#" class="btn-finalizar">Finalizar Compra</a>
    </div>
</body>
</html>
