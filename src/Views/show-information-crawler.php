<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2>Teste prático</h2>
            <p>O teste em questão consistem em coletar as informações do site
                <a href="http://www.guiatrabalhista.com.br/guia/salario_minimo.htm" target="_blank">Guia trabalhista</a>
                usando <b>Crawler</b> e exibir suas informações com base nos requisitos do teste.
            </p>
            <p>Caso deseje a informação com o formato JSON <a href="/json" target="_blank">clique aqui</a>.</p>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6">

            <div class="card">
                <div class="card-title text-center">
                    Solicitação do teste
                </div>
                <div class="card-body bg-dark text-white">
                    <pre class="text-white">
                        <?php print_r(
                            [
                                [
                                    'vigencia' => '01.01.2018',
                                    'valor_mensal' => 'R$954,00 <br> ...',
                                ],
                                [
                                    'vigencia' => '01.01.2017',
                                    'valor_mensal' => 'R$937,00 <br> ...'
                                ]
                            ]
                        ); ?>
                    </pre>
                    ...<br>
                    ...
                </div>
            </div>

        </div>
        <div class="col-md-6">

            <div class="card">
                <div class="card-title text-center">
                    Implementação usando crawler
                </div>
                <div class="card-body bg-dark" style="height: 600px; overflow: auto;">
                    <pre class="text-white">
                        <?php print_r($data); ?>
                    </pre>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>

