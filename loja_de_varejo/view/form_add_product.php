<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de varejo - Cadastro de produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="../controller/Product.php" method="POST">
        <fieldset class="p-4 m-5 border border-blue-400">
            <legend>Dados do produto</legend>
            <section class="columns-3">
                <article>
                    <label for="name">Nome do produto</label>
                    <input type="text" id="name" name="name" class="border border-blue-400">
                </article>
                <article>
                    <label for="price">Preço</label>
                    <input type="number" id="price" name="price" class="border border-blue-400">
                </article>
                <article>
                    <label for="quantity">Quantidade em estoque</label>
                    <input type="number" id="quantity" name="quantity" class="border border-blue-400">
                </article>
            </section>
        </fieldset>
    </form>
</body>

</html>