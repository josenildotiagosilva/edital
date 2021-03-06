<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ public_path('bootstrap5/css/bootstrap.min.css') }}">
    <title>pdf 2</title>
    <style>
        .classe {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col">
            <img class="float-left" src="dist/img/logo-prefeitura-mossoro-colorida.png" width="112" height="100"
                alt="logo-prefeitura-mossoro-colorida">
        </div>
        <div class="col text-center">
            <div style="font-size: 30px" class="bold">
                PREFEITURA MUNICIPAL DE MOSSORÓ
            </div>
            <div style="font-size: 10px">
                SECRETARIA MUNICIPAL DE SEGURANÇA PÚBLICA, DEFESA CIVIL, MOBILIDADE URBANA E TRÂNSITO
            </div>
            <div>
                SECRETARIA EXECUTIVA DE MOBILIDADE URBANA E TRÂNSITO
            </div>
            <div style="font-size: 10px">
                Rua: Felipe Camarão, 968 – Doze Anos – Mossoró/RN – CEP: 59.603-340 – Fone: 84 3315-4727
            </div>
        </div>
    </div>
    <div class="text-center pt-4">
        REQUERIMENTO DE RECURSO DE AUTUAÇÃO OU PENALIDADE / RESTITUIÇÃO DE VALORES
    </div>
    <div class="d-inline-flex fs-1 h3 text-center">
        DEFESA PRÉVIA DE AUTUAÇÃO (CDP)
    </div>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th scope="col">Nome:</th>
                <th>CPF:</th>
            </tr>
        </thead>
        <tbody>
            <td colspan="4">
                <table class="table mb-0">
                    Teste
                </table>
            </td>
            <tr class="align-bottom">
                <td colspan="8" scope="row">Josenildo Tiago</td>
                <td colspan="2" scope="row">037.569.369-98</td>
            </tr>
        </tbody>
    </table>

    <script src="{{ public_path('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>