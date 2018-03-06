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
            <section class="col-md-12">
            <form method="GET" action="/calc.php">
                <div class="form-group row">
                    <label for="number1" class="col-sm-2 col-form-label">Número 1</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="number1" name="number1">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="number2" class="col-sm-2 col-form-label">Número 2</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="number2" name="number2">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Operações</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao" id="soma" value="+" checked>
                        <label class="form-check-label" for="soma">
                            SOMAR
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao" id="subtrair" value="-">
                        <label class="form-check-label" for="subtrair">
                            SUBTRARIR
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao" id="multiplicar" value="*">
                        <label class="form-check-label" for="multiplicar">
                            MULTIPLICAR
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao" id="dividir" value="/">
                        <label class="form-check-label" for="dividir">
                            DIVIDIR
                        </label>
                        </div>
                    </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </div>
                </form>
            </section>
        </div>
    </div>
</body>
</html>