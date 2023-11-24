<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Lista Cidades - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <!-- Bootstrap CSS via CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2Wl2/wv4PZhp0FQgtF+UK9X/EUAs/JZ5" crossorigin="anonymous">
    <!-- Bootstrap Scripts via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-c3r47/CGGZ4KSJo4TI+uxIjHpXsDG/sb81XXl18Z1zvAhR/6C0rR5cZu6NtE7ZgR" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2Wl2/wv4PZhp0FQgtF+UK9X/EUAs/JZ5" crossorigin="anonymous">
    </script>

    <!-- Adicione scripts ou bibliotecas JavaScript conforme necessário -->
    <script src="seu-script.js"></script>
</head>

@extends('site.layouts.basico')

@section('titulo', 'Home')

@section('conteudo')

   
<div class="container mt-4">
    <h1 class="mb-4">Lista de Cidades</h1>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome da Cidade</th>
                <th>População</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cidade A</td>
                <td>1,000,000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cidade B</td>
                <td>500,000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cidade C</td>
                <td>750,000</td>
            </tr>
            <!-- Add more rows for additional cities -->
        </tbody>
    </table>
</div>

    <!-- Scripts do Bootstrap via CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Adicione scripts ou bibliotecas JavaScript conforme necessário -->
    <script src="seu-script.js"></script>

@endsection
