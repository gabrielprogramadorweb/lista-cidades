<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cidades</title>
    <!-- Adicione os links para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Adicione o link para o arquivo CSS personalizado -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Lista de Cidades</h1>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th>População</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dados as $dado)
                    <tr>
                        <td>{{ $dado->cidade }}</td>
                        <td>{{ $dado->populacao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Adicione os scripts do Bootstrap (jQuery e Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-eJqDOUwqyKBgJhPgg3T7ZNq5gA/awEOtFSAB8FV3MOUshC2TQoDkgrM5c+e2ss" crossorigin="anonymous"></script>
</body>
</html>
