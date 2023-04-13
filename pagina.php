<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-dark d-flex flex-column align-items-center justify-content-center">
    <div class="bg-dark text-light rounded col-6">

        <div class="p-3">
            <div class="display-3 text-center">Calculadora</div>
        </div>

        <div class="container d-flex flex-column align-items-center justify-content-center p-4">
            <form class="col-6 mb-5" method="POST">
                <div class="row mb-4">
                    <label class="mb-2" for="num1">Número 1:</label>
                    <input class="ms-2" type="number" id="num1" name="num1" required>
                </div>

                <div class="row mb-4">
                    <label class="mb-2" for="num2">Número 2:</label>
                    <input class="ms-2" type="number" id="num2" name="num2" required>
                </div>
                <p class="text-center">Operação:</p>
                <div class="grid gap-0 column-gap-3">
                        <div class="p-2 g-col-6"><input type="radio" name="operacao" value="Somar">Somar</div>
                        <div class="p-2 g-col-6"><input type="radio" name="operacao" value="Subtrair">Subtrair</div>
                        <div class="p-2 g-col-6"><input type="radio" name="operacao" value="Dividir">Dividir</div>
                        <div class="p-2 g-col-6"><input type="radio" name="operacao" value="Multiplicar">Multiplicar</div> 
                </div>
                <div class="mt-3 row gap-2 justify-content-center">
                    <button type="submit" name="submit" class="btn btn-danger col-4">Calcular</button>
                </div>
            </form>

            <?php
            include "calculos.php";

            if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacao = $_POST['operacao'];

                switch ($operacao) {
                    case 'Somar':
                        $resultado = somar($num1, $num2);
                        break;
                    case 'Subtrair':
                        $resultado = subtrair($num1, $num2);
                        break;
                    case 'Multiplicar':
                        $resultado = multiplicar($num1, $num2);
                        break;
                    case 'Dividir':
                        $resultado = dividir($num1, $num2);
                        break;
                    default:
                        $resultado = "Operação inválida.";
                        break;
                }

                echo "<p><strong>Resultado:</strong> $resultado</p>";
                echo "<p><strong>Operação:</strong> $operacao</p>";
            }

            ?>
        </div>
</body>

</html>