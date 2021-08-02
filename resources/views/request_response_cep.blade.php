<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>
<body>

<br>

<table class="table" id="my-table">
    <thead>
    <tr>
        <th scope="col">cep</th>
        <th scope="col">logradouro</th>
        <th scope="col">complemento</th>
        <th scope="col">bairro</th>
        <th scope="col">localidade</th>
        <th scope="col">uf</th>
        <th scope="col">ibge</th>
        <th scope="col">gia</th>
        <th scope="col">ddd</th>
        <th scope="col">siafi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($response as $value) : ?>
    <tr>
        <td><?= $value->cep ?></td>
        <td><?= $value->logradouro ?></td>
        <td><?= $value->complemento ?></td>
        <td><?= $value->bairro ?></td>
        <td><?= $value->localidade ?></td>
        <td><?= $value->uf ?></td>
        <td><?= $value->ibge ?></td>
        <td><?= $value->gia ?></td>
        <td><?= $value->ddd ?></td>
        <td><?= $value->siafi ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<br>
<script>
    $(document).ready(function () {
        $('#my-table').dataTable();
    });
</script>

<form action="{{ route('api.form') }}">
    <button type="submit">Nova Consulta</button>
</form>

</body>
</html>