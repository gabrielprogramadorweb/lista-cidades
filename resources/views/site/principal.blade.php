@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

    <h1 class="mb-4">Lista de Cidades</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>População</th>
                <!-- Adicione outras colunas conforme necessário -->
            </tr>
        </thead>
        <tbody>
            <!-- Exemplo de linha da tabela, substitua com dados reais -->
            <tr>
                <td>1</td>
                <td>Cidade A</td>
                <td>1000000</td>
                <!-- Adicione outras colunas conforme necessário -->
            </tr>
            <tr>
                <td>2</td>
                <td>Cidade B</td>
                <td>500000</td>
                <!-- Adicione outras colunas conforme necessário -->
            </tr>
            <!-- Repita este bloco para cada cidade -->
        </tbody>
    </table>

    <!-- Script do Bootstrap via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Adicione scripts ou bibliotecas JavaScript conforme necessário -->
    <script src="seu-script.js"></script>

@endsection