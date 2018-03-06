<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Calculadora</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <header class="col-md-12">
                <h1>Calculadora</h1>
            </header>
        </div>
        <div class="row">
            <section class="col-md-9">
                <?php 
                    $calc;
                    
                    echo 'A operação: ' . $_GET['number1'] . $_GET['operacao'] . $_GET['number2'].'<br>';
                    switch ($_GET['operacao']){
                        case "+":
                            $calc=$_GET['number1']+$_GET['number2'];
                            echo("Resultado: " . $calc);
                            break;
                        case "-":
                            $calc=$_GET['number1']-$_GET['number2'];
                            echo("Resultado: " . $calc);
                            break;
                        case "*":
                            $calc=$_GET['number1']*$_GET['number2'];
                            echo("Resultado: " . $calc);
                            break;
                        case "/":
                            $calc=$_GET['number1']/$_GET['number2'];
                            echo("Resultado: " . $calc);
                            break;
                    }
                ?>                 
                
            </section>
        </div>
    </div>
</body>
</html>