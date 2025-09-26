<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form action="" method="post">
            <label for="preco">Preço do Produto (R$):</label>
            <input type="number" step="0.01" name="preco" id="preco">

            
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade">

            <input type="submit" value="Calcular">
        </form>
    </main>
    

    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST")
    $preco = $_POST["preco"];

    $quantidade = $_POST["quantidade"];
    $subtotal = $preco * $quantidade;
     
    $imposto = $subtotal * 0.125; 
    $totalfinal = $subtotal + $imposto;

    echo " Orçamento PC-Pronto ";

    echo "Produto: R$ " . number_format($preco, 2, ",", ".") . " (x$quantidade)";

    echo "Subtotal: R$ " . number_format($subtotal, 2, ",", ".");

    echo "<p> Imposto (12,5%): R$ $imposto </p>";
    
    
   
    
    

  ?>

    
</body>
</html>
