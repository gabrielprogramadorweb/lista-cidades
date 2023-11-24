@extends('site.layouts.app')

@section('title', 'Lista de Cidades')

@section('content')
    <div>
        <h1 class="display-4 text-center mb-5">Lista de Cidades</h1>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Cidade</th>
                    <th scope="col">População</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dados as $dado)
                    <tr>
                        <td>{{ $dado->cidade }}</td>
                        <td>{{ $dado->populacao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
