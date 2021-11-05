@extends('templates.template')

@section('content')
    <h1 class="text-center">CRUD</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{ route('pets/create') }}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome do pet</th>
                <th scope="col">Tutor(a)</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($pets as $pet)
                    <tr>
                        <th scope="row">{{$pet->id}}</th>
                        <td>{{$pet->name}}</td>
                        <td>{{$pet->relUsers->name}}</td>
                        <td>
                            <a href="{{ route('show', ['pets' => $pet->id]) }}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{ route('update', ['pets' => $pet->id]) }}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
          </table>
    </div>

@endsection
